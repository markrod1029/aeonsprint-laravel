
<script setup>
import axios from 'axios';
import { onMounted, ref, reactive } from 'vue';

let projects = ref([]);
let form = reactive({
    name: '',
    description: ''
});


let getProject = () => {
    axios.get('/api/projects')
        .then((response) => {
            projects.value = response.data;

        })
        .catch((error) => {
            console.error('Error fetching services:', error);
        });
};

let createProject = () => {
    axios.post('/api/projects', form)
    .then((response) => {
        projects.value.unshift(response.data);
        form.value.name = '',
        form.value.description = ''
        $('#exampleModal').modal('hide');
    });
}



onMounted(() => {
    getProject();
});
</script>


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
                <button type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="btn btn-primary bg-blue" >Create New User</button>
            </div>


        <div class="card">
  
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Services Name</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Your table rows here -->
                                    <tr v-for="project in projects" :key="project.id">
                                        <td>{{ project.id  }}</td>
                                        <td>{{ project.name  }}</td>
                                        <td>{{ project.description  }}</td>
                                    </tr>                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Services Name</th>
                                        <th>Description</th>
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



   

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Projects Name:</label>
            <input type="text"  name="name"  v-model="form.name" class="form-control" id="name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description:</label>
            <textarea  name="description" type="text" v-model="form.description" class="form-control" id="description" > </textarea>
          </div>
       
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  @click="createProject"   class="btn btn-primary bg-primary">Submit</button>
      </div>
    </div>
  </div>
</div>


</template>


<script>
// Import the Footer and MenuBar components
import AdminSideBar from '@/components/Organisms/adminSidebar.vue';
import AdminMenuBar from '@/components/Organisms/adminMenubar.vue';
import AdminFooter from '@/components/Organisms/adminFooter.vue';








export default {
  components: {
    // Register the Footer and MenuBar components
    AdminSideBar,
    AdminMenuBar,
    AdminFooter
  },


}
</script>
