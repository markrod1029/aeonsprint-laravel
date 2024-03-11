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
      
          <div class="row">
              <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                      <div class="inner">
                          <div class="d-flex justify-content-between">
                              <h3>{{ totalAppointmentCount }}</h3>
                              <select @change="getAppointmentCount()" v-model="selectedAppointmentStatus"
                                  style="height: 2.4rem; outline: 2px solid transparent;" class="px-4 rounded border-0 text-black">
                                  <option value="all">All</option>
                                  <option value="scheduled">Scheduled</option>
                                  <option value="confirmed">Confirmed</option>
                                  <option value="cancelled">Cancelled</option>
                              </select>
                          </div>
                          <p class="text-black">Appointments</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-bag"></i>
                      </div>
                      <route-link to="/admin/appointments" class="small-box-footer">
                          View Appointments
                          <i class="fas fa-arrow-circle-right"></i>
                      </route-link>
                  </div>
              </div>

              <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                      <div class="inner">
                          <div class="d-flex justify-content-between">
                              <h3>0</h3>
                              <select
                                  style="height: 2.4%; outline: 2px solid transparent;" class="px-4 rounded border-0 text-black">
                                  <option value="TODAY">Today</option>
                                  <option value="30">30 days</option>
                                  <option value="60">60 days</option>
                                  <option value="360">360 days</option>
                                  <option value="MTD">Month to Date</option>
                                  <option value="YTD">Year to Date</option>
                              </select>
                          </div>
                          <p>Users</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-bag"></i>
                      </div>
                      <route-link to="/admin/users" class="small-box-footer">
                          View Users
                          <i class="fas fa-arrow-circle-right"></i>
                      </route-link>
                  </div>
              </div>
          </div>

      </div>
    </div>

  </div>


   <AdminFooter />

</template>

<script setup>


// Import the Footer and MenuBar components
import AdminSideBar from '@/components/Organisms/adminSidebar.vue';
import AdminMenuBar from '@/components/Organisms/adminMenubar.vue';
import AdminFooter from '@/components/Organisms/adminFooter.vue';
import {ref} from 'vue';
import axios from 'axios';


const selectedAppointmentStatus = ref('all');
const totalAppointmentCount = ref(0);
const appointments = ref();
const getAppointmentCount = () => {
  axios.get('/api/stats/appointments', {
    params: {
      status: selectedAppointmentStatus.value,
    }
  })
  .then((response) => {
    totalAppointmentCount.value = response.data.totalAppointmentCount;
  })
  .catch((error) => {
    console.error('Error fetching appointment count:', error);
  });
}


</script>
