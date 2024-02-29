<template>
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

<script setup>
import { onMounted, ref, reactive } from 'vue';

import { Form, Field, useSetFieldError } from 'vee-validate';
import * as yup from 'yup';

let formValues = reactive({ id: '', name: '', email: '', password: '' }); // Initialize with default values
let form = ref(null);




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



let handleSubmit = (values, actions) => {
    if (editing.value) {
        updateUser(values, actions);
    } else {
        createuser(values, actions);
        // createuser(values, { resetForm: form.value.resetForm });
    }
};


</script>