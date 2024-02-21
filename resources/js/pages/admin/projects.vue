<template>
    <AdminMenuBar/>

   <AdminSideBar />

   <div class="content-wrapper">

        
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                
                <div class="col-sm-6">
                    <h1 class="m-0">Projects Page</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projects Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        
        <div class="container-fluid">

        <div class=" mb-4">
                <button type="button" @click="addUser" class="btn btn-primary" >Create New User</button>
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
                                        <th>Browser</th>
                                        <th>Browser</th>
                                        <th>Browser</th>
                                        <th>Browser</th>
                                        <th>Browser</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Your table rows here -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Rendering engine</th>
                                        <th rowspan="1" colspan="1">Browser</th>
                                        <th rowspan="1" colspan="1">Platform(s)</th>
                                        <th rowspan="1" colspan="1">Engine version</th>
                                        <th rowspan="1" colspan="1">CSS grade</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                <ul class="pagination">
                                    <!-- Pagination buttons here -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        
    </div>


   </div>


   <AdminFooter />

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
