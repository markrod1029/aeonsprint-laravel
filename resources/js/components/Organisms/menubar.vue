<template>
    <nav  class="relative z-50" >
        <div id="navigation" 
        :class="{ 'shadow-md-navigation': isScrolled }" 
        class="fixed top-0 left-0 right-0 z-50 bg-zinc-50" >
            <div class="px-4 md:px-0 md:max-w-5xl md:mx-auto bg-zinc-50" >
                <div class="flex items-center justify-between h-20 bg-zinc-50" >
    
                    <a href="/" class="router-link-active" to="/" native="true" >
    
                        <header class="flex items-center" >
    
                            <img id="logo" src="/storage/images/aeonsprint-logo1.png"  width="150" height="150" alt="Aeonsprint Solution" >
    
                        </header>
    
                    </a>
    
                    <div class="flex items-center justify-end h-full" >
                        <div class="flex items-center md:hidden" >
                            <button >
                                <img src="/_nuxt/menu.fe80d7c5.svg" alt="hamburger-menu" class="w-8 h-8 p-1 bg-gray-100 rounded-sm" >
                            </button>
                        </div>
                        <div class="items-center hidden h-full tracking-wider md:flex gap-x-14" >
    
                            <ul id="desktop-links" class="flex items-center h-full gap-x-12 " style="font-size:17px; font-weight:600" >
    
                                <li class="flex items-center h-full "  >
    
                                    <router-link  to="/about-us" class="flex items-center tracking-wide desktop-link text-decoration-none"   >
                                        <h3 style="font-size:14px;" class="text-xs font-bold uppercase tracking-whide">About Us </h3>
    
                                    </router-link>
                                </li>
    
                                   
                                <li class="relative" @mouseenter="showOptions = true" @mouseleave="hideOptions">
                                    <a class="flex items-center tracking-wide desktop-link text-decoration-none">
                                        <h3 style="font-size:14px;" class="text-xs font-bold uppercase tracking-whide">Services</h3>
                                        <svg class="w-4 h-4 ml-1 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="transform: rotate(180deg);">
                                            <path d="M10 3a.75.75 0 01.53.22l4.25 4.25a.75.75 0 11-1.06 1.06L11 5.06v9.69a.75.75 0 01-1.5 0V5.06L6.28 8.53a.75.75 0 11-1.06-1.06l4.25-4.25A.75.75 0 0110 3z"/>
                                        </svg>
                                    </a>
                                    <div v-show="showOptions" @mouseenter="cancelHideOptions" @mouseleave="hideOptions" class="absolute left-0 mt-2 bg-white border border-gray-200 rounded-md shadow-lg" style="width: max-content;">
                                        <ul class="border-t border-gray-200">
                                            <li><router-link to="/services/software-development" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white text-decoration-none  services-menu" style="white-space: nowrap;">Software Development</router-link></li>
                                            <hr class="border-gray-200"> <!-- Line between options -->
                                            <li><router-link to="/services/graphic-design" href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white text-decoration-none  services-menu" style="white-space: nowrap;"> Graphic Design</router-link></li>
                                            <hr class="border-gray-200"> <!-- Line between options -->
                                            <li><router-link to="/services/digital-business-card" href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white text-decoration-none  services-menu" style="white-space: nowrap;">Digital Business Card</router-link></li>
                                            <hr class="border-gray-200"> <!-- Line between options -->
                                            <li><router-link to="/services/chatbot-marketing" href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white text-decoration-none  services-menu" style="white-space: nowrap;">Chatbot Marketing</router-link></li>
                                            <hr class="border-gray-200"> <!-- Line between options -->
                                            <li><router-link to="/services/digital-marketing" href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white text-decoration-none  services-menu" style="white-space: nowrap;">Digital Marketing</router-link></li>
                                            <hr class="border-gray-200"> <!-- Line between options -->
                                            <li><router-link to="/services/seo-marketing" href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white text-decoration-none  services-menu" style="white-space: nowrap;"> Seo Marketing</router-link></li>
                                            <hr class="border-gray-200"> <!-- Line between options -->
                                            <li><router-link to="/services/conference-and-training-event-managment" href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white text-decoration-none  services-menu" style="white-space: nowrap;">Conporence and Training Event Managment</router-link></li>
                                            <hr class="border-gray-200"> <!-- Line between options -->
                                            <li><router-link to="/services/it-bpo-consultancy" href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white text-decoration-none  services-menu" style="white-space: nowrap;"> IT-BPO Consultancy</router-link></li>
                                            <hr class="border-gray-200"> <!-- Line between options -->
                                            <li><router-link to="/services/maintenance-support" href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white text-decoration-none  services-menu"  style="white-space: nowrap;">  Maintenance Support</router-link></li>

                                        </ul>
                                    </div>
                                </li>


                                <li class="flex items-center h-full" >
                                    <router-link to="/projects" class="flex items-center tracking-wide desktop-link text-decoration-none"   >
                                        <h3 style="font-size:14px;" class="text-xs font-bold uppercase tracking-whide">Projects</h3>
    
                                    </router-link>
    
                                </li>
                           



                                    
                            
                                    
                                <!-- <li class="flex items-center h-full">
                                    <router-link to="/team" class="flex items-center tracking-wide desktop-link text-decoration-none"   >
                                        <span class="relative  " >Team</span>
                                    </router-link>
                                </li>  -->
                            </ul>
                            <router-link to="/contact-us" class="px-2 py-1.5 rounded cta hover:text-blue-500  text-decoration-none "  >
                                <h3 style="font-size:14px;" class="text-xs font-bold uppercase tracking-whide">Contact Us </h3>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>  
    </template>
    

   
<script>
export default {
    data() {
        return {
            showOptions: false,
            timeout: null,
            isScrolled: false
        };
    },
    mounted() {
        window.addEventListener('scroll', this.handleScroll);
    },
    beforeDestroy() {
        window.removeEventListener('scroll', this.handleScroll);
    },
    methods: {
        hideOptions() {
            // Set a timeout to hide the options after 100 milliseconds
            this.timeout = setTimeout(() => {
                this.showOptions = false;
            }, 100);
        },
        cancelHideOptions() {
            // Cancel the hiding of options if mouse enters the options area
            clearTimeout(this.timeout);
        },
        handleScroll() {
            this.isScrolled = window.scrollY > 0;
        }
    }
}
</script>

<style>
/* Idagdag ang shadow style dito */
</style>

    <style>
    .shadow-md-navigation {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}
/* Style for the line between options */
hr {
    margin: 0;
    border: 0;
    border-top: 1px solid #E5E7EB; /* Gray border color */
}

/* Style for the list items */
li {
    list-style: none; /* Remove default list styles */
}
</style>
  