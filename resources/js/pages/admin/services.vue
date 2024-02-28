<!-- Script setup -->
<script setup>
import axios from 'axios';
import { onMounted, ref, reactive } from 'vue';
import { Form, Field} from 'vee-validate';
import * as yup from 'yup';
import { useToastr } from '../../toastr.js'


let toastr = useToastr();
let services = ref([]);
let serviceEditing = ref(false);
let formValues = reactive({ id: '', name: '' });
let form = ref(null)
let serviceIdDelete = ref(null);

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


let addService = () => {
    serviceEditing.value = false;
    $('#serviceFormModal').modal('show');
   
}



let createService = (values, { resetForm } ) => {
    axios.post('/api/services', values)
      .then((response) => {
            services.value.unshift(response.data);
            resetForm();
            $('#serviceFormModal').modal('hide');
            toastr.success('Added Service Successfuly');

        });
};



let editService = (service) => {
    $('#serviceFormModal').modal('show');
    serviceEditing.value = true;
    formValues.id = service.id;
    formValues.name = service.name;
}

let updateService = (values, { resetForm }) => {
    axios.put('/api/services/' + formValues.id, values)
    .then((response) => {
        const index = services.value.findIndex(service => service.id === response.data.id);
        services.value[index] = response.data;
        toastr.success('Update Service Successfuly');
        $('#serviceFormModal').modal('hide');
        resetForm();
    })
}


let comfirmDeleteService = (service) => {
    serviceIdDelete.value = service.id;
    $('#serviceDeleteModal').modal('show');

}


let deleteService = () => {
    axios.delete(`/api/services/${serviceIdDelete.value}`)
    .then(() => {
        services.value = services.value.filter(service => service.id !== serviceIdDelete.value);
        $('#serviceDeleteModal').modal('hide');
        toastr.success('Service Deleted Successfuly');

    })
}


let handleSubmit = (values, actions) => {
    if(serviceEditing.value){
        updateService(values, actions); 

    } else {
        createService(values, actions); 
    }
}

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
                    <button type="button" @click="addService" class="btn btn-primary bg-blue" >Create New User</button>
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
                                                    <a href="#" @click.prevent="comfirmDeleteService(service)" class="btn btn-danger btn-sm " style="margin-right: 5px;"><i class="fa fa-trash"></i> </a>
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

    <div class="modal fade" id="serviceFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <Form  @submit="handleSubmit" :validation-schema="schema" v-slot="{errors}" :initial-values="formValues">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Services Name:</label>
                            <Field type="text" v-model="formValues.name"  name="name" :class="{'is-invalid': errors.name}" class="form-control" id="name" required />
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


    <div class="modal fade" id="serviceDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">

                        <span > Delete Service</span>

                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Form -->
                    <div class="modal-body">
                        <h5>Are You Sure you want to Delete this Service</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary bg-secondary" data-dismiss="modal">Close</button>
                        <button  @click.prevent="deleteService" type="submit" class="btn btn-danger bg-danger">Delete</button>
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
}
</script>