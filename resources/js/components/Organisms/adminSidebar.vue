<template>
     <aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index3.html" class="brand-link">
    <!-- <img  src="/storage/images/aeonsprint-logo1.png" alt="Aeonsprint Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light">Aeonsaprint Solution</span>
</a>

<div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        
    
        <div class="image">
            <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" width="200" class="img-circle elevation-2" alt="User Image">
            </div>


        <div class="info">
            <a href="#" class="d-block">Mark Rod Cadayong</a>
        </div>

    </div>



    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <router-link to="/admin/dashboard" active-class="active" class="nav-link"> 
                    <i class="nav-icon fas fa-home"></i>
                        <p class="text-white">Dashboard</p>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link to="/admin/projects" active-class="active" class="nav-link ">
                    <i class="nav-icon fas fa-calendar"></i>
                        <p class="text-white">Projects</p>
                </router-link>
            </li>


            <li class="nav-item">
                <router-link to="/admin/services" active-class="active" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                        <p class="text-white" >Services</p>
                </router-link>
            </li>


            <li class="nav-item">
                <router-link to="/admin/users" active-class="active" class="nav-link">
                    <i class="nav-icon fas fa-cog"></i>
                        <p class="text-white" >Users </p>
                </router-link>
            </li>



            <li class="nav-item">
                <router-link to="/admin/appointments" :class="$route.path.startsWith('/admin/appointments' )? 'active' : '' " class="nav-link">
                    <i class="nav-icon fas fa-cog"></i>
                        <p class="text-white" >Appointments </p>
                </router-link>
            </li>


            <li class="nav-item">
                <router-link to="/admin/profile" active-class="active" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                        <p class="text-white" >Profile</p>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link to="/admin/logout" active-class="active" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p class="text-white">Logout</p>
                </router-link>
            </li>

        
        </ul>
    </nav>

</div>

</aside>    

</template>