<!-- Script setup -->
<script setup>
// Import components
import AdminSideBar from '@/components/Organisms/adminSidebar.vue';
import AdminMenuBar from '@/components/Organisms/adminMenubar.vue';
import AdminFooter from '@/components/Organisms/adminFooter.vue';
import ServicesItem from './ServicesItem.vue';


import axios from 'axios';
import { onMounted, ref, reactive, watch } from 'vue';
import { Form, Field} from 'vee-validate';
import * as yup from 'yup';
import { useToastr } from '../../../toastr.js'
import { debounce } from 'lodash'

let toastr = useToastr();
let services = ref([]);
let searchServiceQuery = ref(null)

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



let searchService = () => {
    axios.get('/api/services/search', {
        params: {
            query: searchServiceQuery.value,
        }
    })
    .then(response => {
        services.value = response.data
    }).catch( error => {
        console.log(error);
    })
}


watch(searchServiceQuery, debounce(() => {
    searchService();
}, 300));


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

                <div class="d-flex justify-content-between">
                    <div class=" mb-4">
                    <button type="button" @click="addService"  class="btn btn-primary bg-blue" >Create New User</button>
                </div>

                <div>

                    <input type="text" name="search" id="search" v-model="searchServiceQuery" placeholder="Search....." class="form-control">
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
                                                <th>ID</th>
                                                <th>Services Name</th>
                                                <th>Control</th>
                                            </tr>
                                        </thead>
                                        <tbody v-if="services.length > 0">
                                            <!-- Your table rows here -->


                                            <ServicesItem v-for="(service, index) in services"
                                                :key="service.id"
                                                :service=service
                                                :index=index

                                                />
                                           
                                        </tbody>

                                        <tbody v-else>
                                            <tr>
                                                <td colspan="6" class="text-center"> No Service Found </td>
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


</script>