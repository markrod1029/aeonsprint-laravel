<!-- <script setup>
// import { useAuthUserStore } from '../../stores/AuthUserStore';
import { useRouter } from 'vue-router';
import { useSettingStore } from '../../stores/SettingStore';

const router = useRouter();
// const authUserStore = useAuthUserStore();
const settingStore = useSettingStore();

</script> -->

<template>
     <aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index3.html" class="brand-link">
    <!-- <img  src="/storage/images/aeonsprint-logo1.png" alt="Aeonsprint Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light"> Aeonsprint Solution</span>
</a>

<div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="image">
            <img src="{{ auth()->user()->avatar }}" width="200" class="img-circle elevation-2" alt="User Image">
            </div>

<!-- https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg -->
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
                <router-link to="/admin/setting" active-class="active" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                        <p class="text-white" >Setting</p>
                </router-link>
            </li>

            
            <li class="nav-item">
                <router-link to="/admin/profile" active-class="active" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                        <p class="text-white" >Profile</p>
                </router-link>
            </li>

            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" class="nav-link">
                    <!-- @csrf -->
                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p class="text-white">Logout</p>
                    </a>
                </form>

            </li>
        </ul>
    </nav>

</div>

</aside>    

</template>