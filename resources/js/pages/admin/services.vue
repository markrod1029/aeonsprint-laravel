<!-- Script setup -->
<script setup>
import axios from 'axios';
import { onMounted, ref, reactive } from 'vue';
import { Form, Field} from 'vee-validate';
import * as yup from 'yup';

let services = ref([]);
let form = reactive({
    name: '',
});

let serviceEditing = ref(false);

let getService = () => {
    axios.get('/api/services')
        .then((response) => {
            services.value = response.data;
        })
        .catch((error) => {
            console.error('Error fetching services:', error);
        });
};

let schema = yup.object ({
    name: yup.string().required(),

});


let editService = () => {
    $('#projectFormModal').modal('show');
    serviceEditing.value = true;

}

let createService = () => {
    axios.post('/api/services', form)
      .then((response) => {
            serviceEditing.value = false;
            services.value.unshift(response.data);
            form.value.name = '',
            $('#projectFormModal').modal('hide');
 q
        });
};



onMounted(() => {
    getService();
});
</script>

<!-- Template -->
<template>
    <AdminMenuBar/>

    <AdminSideBar />

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Services Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Services Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class=" mb-4">
                    <button type="button" data-toggle="modal" data-target="#projectFormModal" d class="btn btn-primary bg-blue" >Create New User</button>
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
                                                <th>Services Name</th>
                                                <th>Control</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Your table rows here -->
                                            <tr v-for="service in services" :key="service.id">
                                                <td>{{ service.id }}</td>
                                                <td>{{ service.name }}</td>
                                                <td>
                                                    <a href="#" @click.prevent="editService(service)" class="btn btn-primary btn-sm " style="margin-right: 5px;"><i class="fa fa-edit"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Services Name</th>
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

    <div class="modal fade" id="projectFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">

                        <span v-if="serviceEditing"> Update New Service</span>
                        <span v-else> Add New Service</span>

                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Form -->
                <Form  @submit="createService" :validation-schema="schema" v-slot="{errors}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Services Name:</label>
                            <Field type="text" v-model="form.name" name="name" :class="{'is-invalid': errors.name}" class="form-control" id="name" required />
                            <span class="invalid-feedback"> {{ errors.name }}</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary bg-secondary" data-dismiss="modal">Close</button>
                        <button  type="submit" class="btn btn-primary bg-primary">Save</button>
                    </div>
                </Form>
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
}
</script>