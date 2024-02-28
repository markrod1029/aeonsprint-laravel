<!-- Script setup -->
<script setup>
import axios from 'axios';
import { onMounted, ref, reactive } from 'vue';
import { Form, Field, useSetFieldError } from 'vee-validate';
import * as yup from 'yup';
import { useToastr } from '../../toastr.js';


let toastr = useToastr();
let users = ref([]);
let editing = ref(false);
let formValues = reactive({ id: '', name: '', email: '', password: '' }); // Initialize with default values
let form = ref(null);
let userIdDelete = ref(null);


let getUser = () => {
    axios.get('/api/users')
        .then((response) => {
            users.value = response.data;
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
            users.value.unshift(response.data);
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
    form.value.resetForm();
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





let handleSubmit = (values, actions) => {
    if (editing.value) {
        updateUser(values, actions);
    } else {
        createuser(values, actions);
        // createuser(values, { resetForm: form.value.resetForm });
    }
};



let confirmUserDeletion = (user) => {


    userIdDelete.value = user.id;

    $('#deleteUserFormModal').modal('show');
}

let deleteUser = () => {
    axios.delete(`/api/users/${userIdDelete.value}`)
    .then(() => {
        $('#deleteUserFormModal').modal('hide');
        users.value = users.value.filter(user => user.id !== userIdDelete.value)
        toastr.success('User Deleted Successfuly');

    })

}


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
                <div class=" mb-4">
                    <button @click="addUser" type="button" class="btn btn-primary bg-blue">Create New User</button>
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
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                 <th>Register Date</th>
                                                <th>role</th>
                                                <th>Control</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Your table rows here -->
                                            <tr v-for="user in users" :key="user.id">
                                                <td>{{ user.id }}</td>
                                                <td>{{ user.name }}</td>
                                                <td>{{ user.email }}</td>
                                                <td>{{  }}</td>
                                                <td>{{  }}</td>
                                                <td>
                                                    <a href="#" @click.prevent="editUser(user)" class="btn btn-primary btn-sm " style="margin-right: 5px;"><i class="fa fa-edit"></i> </a>
                                                    <a href="#" @click.prevent="confirmUserDeletion(user)" class="btn btn-danger btn-sm " style="margin-right: 5px;"><i class="fa fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
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

<script>
// Import components
import AdminSideBar from '@/components/Organisms/adminSidebar.vue';
import AdminMenuBar from '@/components/Organisms/adminMenubar.vue';
import AdminFooter from '@/components/Organisms/adminFooter.vue';

export default {
    components: {
        // Register components
        AdminSideBar,
        AdminMenuBar,
        AdminFooter
    }
};
</script>

<style>
.invalid-feedback {
    color: red;
}
</style>
