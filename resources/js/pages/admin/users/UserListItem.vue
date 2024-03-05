<template>
   <tr>
    <td><input type="checkbox" :checked="selectAll"  @change="toggleSelection" name="" id=""></td>
    <td>{{ index + 1 }}</td>
    <td>{{ user.name }}</td>
    <td>{{ user.email }}</td>
    <td>{{ formatDate(user.created_at) }}</td>

    <td>
        <select name="" class="form-control" id="" @change="changeRole(user, $event.target.value)">
            <option v-for="role in roles" :value="role.value" :selected="(user.role === role.name)">{{ role.name  }}</option>
        </select>
    </td>
    <!-- <td>{{  user.role}}</td> -->
    <td>
    <a href="#" @click.prevent="$emit('editUser', user)" class="btn btn-primary btn-sm " style="margin-right: 5px;"><i class="fa fa-edit"></i> </a>
    <a href="#" @click.prevent="confirmUserDeletion(user)" class="btn btn-danger btn-sm " style="margin-right: 5px;"><i class="fa fa-trash"></i> </a>
    </td>
</tr>
        
    


<div class="modal fade" id="deleteUserFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <span>Delete User Account</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Form -->

                <div class="modal-body">
                    <h5>Are You Sure you want to Delete this User</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary bg-secondary" data-dismiss="modal">Close</button>
                        <button @click.prevent="deleteUser" type="submit" class="btn btn-danger bg-danger">delete</button>
                </div>

                
            </div>
        </div>


    </div>
</template>

<script setup>
import formatDate from '../../../helper.js';
import { ref } from 'vue';
  import { useToastr } from '../../../toastr.js';

let toastr = useToastr();
let userIdDelete = ref(null);
let emit = defineEmits(['userDeleted', 'editUser']);

let roles = ref([
   {
    name: 'ADMIN',
    value: 1
    },

    {
    name: 'USER',
    value: 0
    }

]);

let changeRole = (user, role) => {
    axios.patch(`/api/users/${user.id}/change-role`, {
        role: role
    })
    .then(() => {
        toastr.success('Role Change Successfuly');
    })
}


// delete user selected

let toggleSelection = () => {
    emit('toggleSelection', props.user);
}



let props = defineProps({

    user: Object,
    index: Number,
    selectAll: Boolean

});



// let editUser = (user) => {
//     emit('editUser', user);

// }


// confirmation Deleted
let confirmUserDeletion = (user) => {
    userIdDelete.value = user.id;
    $('#deleteUserFormModal').modal('show');
}

// delete to Controller
let deleteUser = () => {
    axios.delete(`/api/users/${userIdDelete.value}`)
    .then(() => {
        $('#deleteUserFormModal').modal('hide');
        // users.value = users.value.filter(user => user.id !== userIdDelete.value)
        emit('userDeleted', userIdDelete.value), 
        toastr.success('User Deleted Successfuly');
    })

}
</script>