<!-- Script setup -->
<script setup>
import axios from 'axios';
import { onMounted, ref, reactive, watch } from 'vue';
import { Form, Field, useSetFieldError } from 'vee-validate';
import * as yup from 'yup';
import { useToastr } from '../../../toastr.js';

import { Bootstrap4Pagination } from 'laravel-vue-pagination';
  // Import the Footer and MenuBar components
  import AdminSideBar from '@/components/Organisms/adminSidebar.vue';
  import AdminMenuBar from '@/components/Organisms/adminMenubar.vue';
  import AdminFooter from '@/components/Organisms/adminFooter.vue';
  import UserListItem from './UserListItem.vue';
  import { debounce } from 'lodash';

let toastr = useToastr();
let users = ref({'data': []});
let editing = ref(false);
let formValues = reactive({ id: '', name: '', email: '', password: '' }); // Initialize with default values
let form = ref(null);
let searchQuery = ref(null);


let getUser = ( page = 1) => {
    axios.get(`/api/users?page=${page}`)
        .then((response) => {
            users.value = response.data;
            selectedUsers.value = [];
            selectAll.value = false;
        })
        .catch((error) => {
            console.error('Error fetching users:', error);
        });
};

const createUserSchema = yup.object({
    name: yup.string().required(),
    email: yup.string().email().required(),
    password: yup.string().required().min(8),
});

const editUserSchema = yup.object({
    name: yup.string().required(),
    email: yup.string().email().required(),
    // password: yup.string().when('password', {
    //     is: (password) => password && password.length > 0,
    //     then: yup.string().required().min(8),
    //     otherwise: yup.string().min(8),
    // }),

    
    // pssword: yup.string().when('password', {
    //     is: (password) => password && password.length > 0,
    //     then: yup.string().required().min(8),
    //     otherwise: yup.string().min(8),
    // }),
    password: yup.string().when((password, schema) => {
        return password ? schema.required().min(8) : schema;
    }),
});

let createuser = (values, { resetForm, setErrors }) => {
    axios.post('/api/users', values)
        .then((response) => {
            users.value.data.unshift(response.data);
            $('#userFormModal').modal('hide');
            toastr.success('Added User Successfuly');
            resetForm();
        })
        .catch((error) => {

            if(error.response.data.errors) {
                 //    setFieldError('email', error.response.data.errors.email[0])
                setErrors(error.response.data.errors); 
            }
      

        })
};

let addUser = () => {
    editing.value = false;
    $('#userFormModal').modal('show');
};




let editUser = (user) => {
    editing.value = true;
    $('#userFormModal').modal('show');
    formValues.id = user.id;
    formValues.name = user.name;
    formValues.email = user.email;
    formValues.password = ''; // Clear password field

    // formValues = reactive({ // Set formValues with user data
    //     id: user.id,
    //     name: user.name,
    //     email: user.email,
    //     password: '' // Clear password field
    // });
};

let updateUser = (values, { resetForm, setErrors }) => {
    axios.put('/api/users/' + formValues.id, values)
        .then((response) => {
            const index = users.value.findIndex(user => user.id === response.data.id);
            users.value[index] = response.data;
            $('#userFormModal').modal('hide');
            toastr.success('Update User Successfuly');
            resetForm();
        })
        .catch((error) => {

            if(error.response.data.errors) {
                //    setFieldError('email', error.response.data.errors.email[0])
                setErrors(error.response.data.errors); 
            }

            })
        //     .finally(() => {
        //     form.value.resetForm();
        // });
};




let userDeleted = (userId) => {
        users.value = users.value.filter(user => user.id !== userId)
}


let handleSubmit = (values, actions) => {
    if (editing.value) {
        updateUser(values, actions);
    } else {
        createuser(values, actions);
        // createuser(values, { resetForm: form.value.resetForm });
    }
};

// select Delete User
let selectedUsers = ref([]);

let toggleSelection = (user) => {
    
    let index = selectedUsers.value.indexOf(user.id); 
    if(index === -1){
        
        selectedUsers.value.push(user.id);
    } else {
        selectedUsers.value.splice(index, 1);
    }
    console.log(selectedUsers.value);
}

let bulkDelete = () => {
    axios.delete('/api/users', {
        data: {
            ids: selectedUsers.value
        }
    })
    .then(response => {
        users.value.data =  users.value.data.filter(user => !selectedUsers.value.includes(user.id));
        selectedUsers.value = [];
        // toastr.success('Users Deleted Successfuly ');
        toastr.success(response.data.message);
    })

};

let selectAll = ref(false);
let selectAllUsers = () => {

    if(selectAll.value) {
        selectedUsers.value = users.value.data.map(user => user.id);
    }else {
        selectedUsers.value = [];
    }
    
    console.log(selectedUsers.value)

}


// search User List



let search = () => {
    axios.get('/api/users/search', {

        params: {
            query: searchQuery.value,
        }
    })
    .then(response => {
        users.value = response.data;
    })
    .catch(error => {
        console.log( error)
    });

 }

 watch(searchQuery, debounce(() => {
    search();
 }, 300));

onMounted(() => {
    getUser();

});
</script>

<!-- Template -->
<template>
    <AdminMenuBar />

    <AdminSideBar />
    
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">

                <div class="d-flex justify-content-between">

                <div class=" mb-4 d-flex">

                    <button @click="addUser" type="button" class="btn btn-primary bg-blue ml-2">
                        <i class="fa fa-plus-circle"></i>
                        Create New User
                    </button>

                    <div  v-if="selectedUsers.length > 0 ">
                        <button @click="bulkDelete" type="button" class="btn btn-danger bg-danger ml-2">
                            <i class="fa fa-trash"></i>
                            Delete Selected User
                        </button>

                        <span class="ml-2">Selected {{ selectedUsers.length }} Users</span>

                    </div>


                </div>

              
                <div>
                    <input type="text" name="" v-model="searchQuery" class="form-control" placeholder="Search..." id="">

                </div>
            </div>


                <div class="card">
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row"></div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                        <thead>
                                            <tr>

                                                <th><input type="checkbox" v-model="selectAll" @change="selectAllUsers" ></th>
                                                <th>#</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                 <th>Register Date</th>
                                                <th>role</th>
                                                <th>Control</th>
                                            </tr>
                                        </thead>
                                        <tbody v-if="users.data.length > 0">
                                            <!-- Your table rows here -->
                                            <UserListItem v-for="(user, index) in users.data" 
                                                 :key="user.id"
                                                 :user=user
                                                 :index=index
                                                 @editUser="editUser"
                                                 @userDeleted="userDeleted"
                                                 @toggleSelection="toggleSelection"
                                                 :select-all ="selectAll"
                                                  />
                                        </tbody>

                                        <tbody v-else> 

                                            <tr>
                                                <td colspan="7" class="text-center"> No Users Found</td>
                                            </tr>

                                         </tbody>

                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>Register Date</th>
                                                <th>role</th>
                                                <th>Control</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <Bootstrap4Pagination :data="users" @pagination-change-page="getUser" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <AdminFooter />


    <div class="modal fade" id="userFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <span v-if="editing">Edit New User</span>
                        <span v-else>Add New User</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Form -->
                <Form ref="form" @submit="handleSubmit" :validation-schema="editing ? editUserSchema : createUserSchema" v-slot="{ errors }" :initial-values="formValues">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label"> Name:</label>
                            <Field type="text" name="name" v-model="formValues.name" :class="{'is-invalid': errors.name}" class="form-control" id="name" required />
                            <span class="invalid-feedback">{{ errors.name }}</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label"> Email:</label>
                            <Field type="text" name="email" v-model="formValues.email" :class="{'is-invalid': errors.email}" class="form-control" id="email" required />
                            <span class="invalid-feedback">{{ errors.email }}</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Password:</label>
                            <Field type="password" name="password" v-model="formValues.password" :class="{'is-invalid': errors.password}" class="form-control" id="password" required />
                            <span class="invalid-feedback">{{ errors.password }}</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary bg-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary bg-primary">Save</button>
                    </div>
                </Form>
            </div>
        </div>
    </div>



    
</template>



<style>
.invalid-feedback {
    color: red;
}
</style>
