<template>
    <MenuBar/>

    <div id="main-wrapper">
                   <section id="hero" >
                       <div id="hero" class="relative h-48 " style="height:14rem">
                        <div class="absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-t from-zinc-50" ></div>
                           <div class="relative inset-0 md:top-[30%] z-30" >
                               <div class=" " >
                                   <div class="flex flex-col-reverse justify-center m-auto md:flex-row md:px-0 md:max-w-5xl md:m-auto" >
                                       <div class=" mx-auto md:w-2/2 md:mx-0" >
                                           <h6 class=" mt-5 text-3xl font-bold tracking-wide md:text-4xl md:text-left leading gap-y-2" >
                                            <span class=" text-center text-transparent bg-clip-text" style="color:#1D85BD;">
                                                Ascend touch us. Get in  touch
                                               </span>
                                           </h6>
                                          
                                       </div>
                                      
                                   </div>
                               </div>
                           </div>
                       
                           
                       </div>
                   </section>
        
                <section class="project">

               
                    <div class="pt-2 md:pt-4 mt-4">
                        <h1 class="center flex flex-col mb-6 space-y-2 text-3xl  md:mb-4 highlight">
                            <p>Our Project</p>
                        </h1>


                        <div id="service" class="grid grid-cols-1 gap-1 my-5 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 1.5rem; max-width: 74rem;">
                                    <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" 
                                    name="submit" 
                                    @click="showProject('software')">
                                        Software Development
                                    </button>

                                    <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" 
                                    name="submit" 
                                    @click="showProject('graphic')">
                                        Graphic Design
                                    </button>

                                    
                                    <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" 
                                    name="submit" 
                                    @click="showProject('card')">
                                    Digital Business Card
                                    </button>

                               
                                    <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" 
                                    name="submit" 
                                    @click="showProject('chatbot')">
                                    
            
                                    Chatbot Marketing
                                    </button>

                                    <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" 
                                    name="submit" 
                                    @click="showProject('digital')">

                                    Digital Marketing
                                    </button>

                                    <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" 
                                    name="submit" 
                                    @click="showProject('seo')">

                                    SEO Marketing
                                    </button>

                                    <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" 
                                    name="submit" 
                                    @click="showProject('training')">

                                    Training & Event
                                    </button>

                                    <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" 
                                    name="submit" 
                                    @click="showProject('consultancy')">

                                    IT-BPO Consultancy
                                    </button>

                                    <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" 
                                    name="submit" 
                                    @click="showProject('maintenance')">

                                    Maintenance & Support
                                    </button>
                                    
                                    
                                </div>
                                        
                    </div>

                    
                    <!-- start Software Project -->

               <div class="software" style="display:/none">

                    <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >

                       
                        <div class="border border-gray-300 p-4 rounded-lg shadow-lg">
                        <div class=" ">
                            <!-- Larawan sa itaas -->
                            <img src="/storage/project/software/startup/tripidkard.png" alt="Asia Manila Prime Properties" class="object-cover w-full h-40 grayscale hover:grayscale-0" width="100%" height="200px">
                        </div>

                        <div class="flex flex-col p-6 space-y-2">
                            <!-- Title sa gitna -->
                            <a href="/projects/asia-manila-prime-properties" class="" to="/projects/asia-manila-prime-properties" native="true" data-v-c17953ac="">
                                <span class="text-xl font-extrabold leading highlight">
                                    <span class="relative line-clamp-1">Asia Manila Prime Properties</span>
                                </span>
                            </a>
                            <!-- Description sa ibaba -->
                            <p class="line-clamp-2">Increase a client's search engine visibility and website traffic by utilizing their proprietary technology and tools. Customers on one CRM platform that grows their business. Marketing Automation</p>
                            <!-- Icons -->
                            <div class="flex flex-row items-center mt-auto -space-x-3"></div>
                            <!-- Button -->
                            <div class="flex flex-1">
                                <a href="/projects/asia-manila-prime-properties" class="flex items-center ml-auto space-x-1 font-extrabold tracking-wide uppercase hover:text-amber-400 text-amber-500" to="/projects/asia-manila-prime-properties" native="true" data-v-c17953ac="">
                                    <span>Discover</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="border border-gray-300 p-4 rounded-lg shadow-lg">
                        <div class="relative overflow-hidden">
                            <!-- Larawan sa itaas -->
                            <img src="/storage/project/software/startup/tripidkard.png" alt="Asia Manila Prime Properties" class="object-cover w-full h-40 grayscale hover:grayscale-0" style="object-fit: cover;" width="400px" height="200px">
                        </div>

                        <div class="flex flex-col p-6 space-y-2">
                            <!-- Title sa gitna -->
                            <a href="/projects/asia-manila-prime-properties" class="" to="/projects/asia-manila-prime-properties" native="true" data-v-c17953ac="">
                                <span class="text-xl font-extrabold leading highlight">
                                    <span class="relative line-clamp-1">Asia Manila Prime Properties</span>
                                </span>
                            </a>
                            <!-- Description sa ibaba -->
                            <p class="line-clamp-2">Increase a client's search engine visibility and website traffic by utilizing their proprietary technology and tools. Customers on one CRM platform that grows their business. Marketing Automation</p>
                            <!-- Icons -->
                            <div class="flex flex-row items-center mt-auto -space-x-3"></div>
                            <!-- Button -->
                            <div class="flex flex-1">
                                <a href="/projects/asia-manila-prime-properties" class="flex items-center ml-auto space-x-1 font-extrabold tracking-wide uppercase hover:text-amber-400 text-amber-500" to="/projects/asia-manila-prime-properties" native="true" data-v-c17953ac="">
                                    <span>Discover</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>

                    <!-- End Software Project -->
                    
                    <!-- start Graphic Project -->


                <div class="graphic" style="display:none">

                    <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >

                        <div class="w-96 border border-gray-300 p-4 rounded-lg shadow-md">
                    
                        </div>

                    </div>
                </div>

                    <!-- End Graphic Project -->

                    <!-- start Business Card Project -->

                
                <div class="card" style="display:none">

                    <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >

                        <div class="w-96 border border-gray-300 p-4 rounded-lg shadow-md">

                        </div>

                    </div>
                </div>

                    <!-- End Business Card Project -->
                
                    <!-- start Chatbot Project -->


                <div class="chatbot" style="display: none;">

                    <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >

                        <div class="w-96 border border-gray-300 p-4 rounded-lg shadow-md">

                        </div>

                    </div>
                </div>

                    <!-- end Chatbot Project -->

                    <!-- start Digital Project -->



                    <div class="digital" style="display: none;">

                        <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >

                            <div class="w-96 border border-gray-300 p-4 rounded-lg shadow-md">

                            </div>

                        </div>
                    </div>


                    <!-- End Digital Project -->

                    <!-- start SEO Project -->

                    <div class="seo" style="display: none;">

                        <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >

                            <div class="w-96 border border-gray-300 p-4 rounded-lg shadow-md">

                            </div>

                        </div>
                    </div>

                    <!-- End SEO Project -->

                    <!-- start Training & Event Project -->



                    <div class="training" style="display: none;">

                        <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >

                            <div class="w-96 border border-gray-300 p-4 rounded-lg shadow-md">

                            </div>

                        </div>
                    </div>

                    <!-- start Training & Event Project -->

                    <!-- Start Consultancy Project -->

                    <div class="consultancy" style="display: none;">

                        <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >

                            <div class="w-96 border border-gray-300 p-4 rounded-lg shadow-md">

                            </div>

                        </div>
                    </div>

                    <!-- End Consultancy Project -->

                    <!-- Start maintenance Project -->


                    <div class="maintenance" style="display: none;">

                        <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >

                            <div class="w-96 border border-gray-300 p-4 rounded-lg shadow-md">

                            </div>

                        </div>
                    </div>

                    <!-- Start maintenance Project -->

                   







                
                </section>
             


        <contactButton/>

                  
   </div>
   
   
  
   <Footer />


</template>

<script>
// Import the Footer and MenuBar components
import Footer from '@/components/Organisms/footer.vue';
import MenuBar from '@/components/Organisms/menubar.vue';
import contactButton from '@/components/Atoms/button.vue';


export default {
  components: {
    // Register the Footer and MenuBar components
    Footer,
    MenuBar,
    contactButton
  },

  methods: {
    showProject(section) {
        const projectSection = ['software', 'graphic', 'card', 'chatbot', 'digital', 'seo', 'training', 'consultancy', 'maintenance'];
        for (const sec of projectSection){
            const el = document.querySelector('.' + sec);
            if(el){
                if(sec === section){
                     el.style.display = 'block';
                } else {
                    el.style.display = 'none';
                }
            }
        }

    }
  }
}
</script>
