<template>
    <AdminMenuBar />
    <AdminSideBar />  
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Appointment Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Appointment Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between mb-2">

                        <div class="d-flex">
                            <div>
                            <router-link to="/admin/appointments/create" class="btn btn-primary" >
                            <i class="fa fa-plus-circle mr-1"></i> Add New Appointment </router-link>
                            </div>

                            <!-- <div>
                                <input type="text" name="" v-model="searchQuery" class="form-control" placeholder="Search..." id="">

                            </div> -->
                        </div>


                        <div class="btn-group">
                            <button type="button" class="btn "  @click="getAppointments()"  :class="[typeof selectedStatus === 'undefined' ? 'btn-secondary bg-secondary': 'btn-default']">
                                <span class="mr-1">All</span>
                                <span class="badge badge-pill badge-info">{{ appointmentsCounts}}</span>
                            </button>

                            <button v-for="status in appointmentStatus" @click="getAppointments(status.value)" :class="[selectedStatus === status.value ? 'btn-secondary' : 'btn-default']"  type="button" class="btn btn-default ">
                                <span class="mr-1">{{ status.name }}</span>
                                <span class="badge badge-pill badge-primary"  :class="`badge-${status.color}`" >{{ status.count }}</span>
                            </button>

                          
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Client Name</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(appointment, index) in appointments.data" :key="appointment.id">
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ appointment.client.first_name }} {{ appointment.client.last_name }}</td>
                                        <td>{{ appointment.description }}</td>
                                        <td>{{ appointment.start_time }}</td>
                                        <td>{{ appointment.end_time }}</td>
                                        <td>
                                            <span class="badge " :class="`badge-${appointment.status.color}`" >{{ appointment.status.name}}</span>
                                        </td>
                                        <td>
                                           
                                            <router-link  :to="`/admin/appointments/${appointment.id}/edit`" class="btn btn-primary btn-sm mr-2">
                                                <i class="fa fa-edit text-danger text-white"></i>
                                            </router-link>

                                            <a href="" @click.prevent="deleteAppointment(appointment.id)" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash text-danger text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>

                                <thead>
                                    <tr> 
                                        <th scope="col">#</th>
                                        <th scope="col">Client Name</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <AdminFooter />

</template>

<script setup>
  import AdminSideBar from '@/components/Organisms/adminSidebar.vue';
  import AdminMenuBar from '@/components/Organisms/adminMenubar.vue';
  import AdminFooter from '@/components/Organisms/adminFooter.vue';

  import Swal from 'sweetalert2';
  import { onMounted, ref, computed } from 'vue';

  const appointments = ref([]);
    // const appointmentStatus = {'scheduled': 1, 'confirmed': 2, 'cancel': 3};

    const appointmentStatus = ref([]);
    const selectedStatus = ref();

    const  getAppointmentStatus = () => {
        axios.get('/api/appointments-status')
        .then((response) => {
            appointmentStatus.value = response.data
        })
    }

let getAppointments = (status) => {
    selectedStatus.value = status;
    const params = {}
    if(status) {
        params.status = status
    }

    axios.get('/api/appointments', {
        params: params,
    })
    .then((response) => {
        appointments.value = response.data;

    })
}


const updateAppointmentStatusCount = (id) => {
    // Kunin ang status ng appointment na burahin
    const deletedAppointmentStatus = appointments.value.data.find(appointment => appointment.id === id)?.status;
    const statusToUpdate = appointmentStatus.value.find(status => status.name === deletedAppointmentStatus); 
    statusToUpdate.count--;
    
    
}


const deleteAppointment = (id) => {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {

        if (result.isConfirmed) {

            axios.delete(`/api/appointments/${id}`)
            .then((response) => {
                updateAppointmentStatusCount(id);
                appointments.value.data = appointments.value.data.filter(appointment => appointment.id !== id); 
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                    });

            });
        
    }
})
} 

const appointmentsCounts = computed (() => {
    return appointmentStatus.value.map(status => status.count).reduce((acc, value) => acc + value, 0);
});

onMounted (() => {
    getAppointments();
    getAppointmentStatus();
})

</script>