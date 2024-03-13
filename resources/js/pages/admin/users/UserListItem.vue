<template>
   <tr>
    <td><input type="checkbox" :checked="selectAll"  @change="toggleSelection" name="" id=""></td>
    <td>{{ index + 1 }}</td>
    <td>{{ user.name }}</td>
    <td>{{ user.email }}</td>
    <td>{{ user.formatted_created_at }}</td>
    <!-- <td>{{ formatDate(user.created_at) }}</td> -->

    <td>
        <select name="" class="form-control" id="" @change="changeRole(user, $event.target.value)">
            <option v-for="role in roles" :value="role.value" :selected="(user.role === role.name)">{{ role.name  }}</option>
        </select>
    </td>
    <!-- <td>{{  user.role}}</td> -->
    <td>
    <a href="#" @click.prevent="$emit('editUser', user)" class="btn btn-primary btn-sm " style="margin-right: 5px;"><i class="fa fa-edit"></i> </a>
    <a href="#" @click.prevent="emit('confirmUserDeletion', user.id)" class="btn btn-danger btn-sm " style="margin-right: 5px;"><i class="fa fa-trash"></i> </a>
    </td>
</tr>
        
    


  
</template>

<script setup>
import formatDate from '../../../helper.js';
import { ref } from 'vue';
  import { useToastr } from '../../../toastr.js';

let toastr = useToastr();
let emit = defineEmits(['userDeleted', 'editUser', 'confirmUserDeletion']);

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


</script>