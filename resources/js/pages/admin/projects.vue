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
          <div class="mb-4">
            <button type="button" data-toggle="modal" data-target="#projectFormModal" data-whatever="@mdo" class="btn btn-primary bg-blue">Create New User</button>
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
                          <th>Description</th>
                          <th>Control</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="project in projects" :key="project.id">
                          <td>{{ project.id }}</td>
                          <td>{{ project.name }}</td>
                          <td>{{ project.description }}</td>
                          <td>
                            <a href="#" @click.prevent="editProject(project)" class="btn btn-primary btn-sm" style="margin-right: 5px;"><i class="fa fa-edit"></i> </a>
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Services Name</th>
                          <th>Description</th>
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
    <div class="modal fade" id="projectFormModal" tabindex="-1" role="dialog" aria-labelledby="projectFormModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="projectFormModalLabel">Add New Service</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <Form @submit="createProject" :validation-schema="schema" v-slot="{ errors }" :initial-values="formValues">
            <div class="modal-body">
              <div class="form-group">
                <label for="name" class="col-form-label">Projects Name:</label>
                <Field type="text" name="name" v-model="formValues.name" class="form-control" :class="{'is-invalid': errors.name }" id="name" required />
                <span class="invalid-feedback">{{ errors.name }}</span>
              </div>
              <div class="form-group">
                <label for="description" class="col-form-label">Description:</label>
                <textarea v-model="formValues.description" class="form-control" id="description" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary bg-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary bg-primary">Submit</button>
            </div>
          </Form>
        </div>
      </div>
    </div>
  </template>
  <script setup>
  import axios from 'axios';
  import { onMounted, ref, reactive } from 'vue';
  import { Form, Field } from 'vee-validate';
  import * as yup from 'yup';
  // Import the Footer and MenuBar components
  import AdminSideBar from '@/components/Organisms/adminSidebar.vue';
  import AdminMenuBar from '@/components/Organisms/adminMenubar.vue';
  import AdminFooter from '@/components/Organisms/adminFooter.vue';
  
  let projects = ref([]);
  let formValues = reactive({
    id: '',
    name: '',
    description: ''
  });
  
  let schema = yup.object({
    name: yup.string().required(),
    description: yup.string()
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
  
  let createProject = (values) => {
    axios.post('/api/projects', values)
      .then((response) => {
        projects.value.unshift(response.data);
        $('#projectFormModal').modal('hide');

      })
      .catch((error) => {
        console.error('Error creating project:', error);
      });
  };
  
  let editProject = () => {
    $('#projectFormModal').modal('show');
  };
  
  
  onMounted(() => {
    getProject();
  });
  </script>
  