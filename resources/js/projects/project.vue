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
                       <p>Our Products & Services</p>
                   </h1>
                                   
               </div>

               <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >

         
                <div class="w-96 border border-gray-300 p-4 rounded-lg shadow-md">
                    <div class="relative">
                        <!-- Larawan sa itaas -->
                        <div class="mx-auto h-40 overflow-hidden grayscale hover:grayscale-0">
                        <img src="/storage/images/about.png" alt="Asia Manila Prime Properties" class="object-fill" width="400px" height="200px">
                        </div>
                        <!-- Title sa gitna -->
                        <div class="absolute top-0 right-0 z-20 mt-2 ml-auto mr-2 hidden">
                        <a href="https://manilaprimeproperties.com" class="hover:amber-500" target="_black">
                            
                        </a>
                        </div>
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
                        <div class="flex flex-row items-center mt-auto -space-x-3">
                        <div class="w-10 h-10 p-2 border rounded-full bg-zinc-50">
                            <!-- Icon 1 -->
                            <i alt="WordPress" title="WordPress" style="fill:#21759B;">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <!-- Iyong SVG code dito -->
                            </svg>
                            </i>
                        </div>
                        <div class="w-10 h-10 p-2 border rounded-full bg-zinc-50">
                            <!-- Icon 2 -->
                            <i alt="JavaScript" title="JavaScript" style="fill:#F7DF1E;">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <!-- Iyong SVG code dito -->
                            </svg>
                            </i>
                        </div>
                        <div class="w-10 h-10 p-2 border rounded-full bg-zinc-50">
                            <!-- Icon 3 -->
                            <i alt="Elementor" title="Elementor" style="fill:#92003B;">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <!-- Iyong SVG code dito -->
                            </svg>
                            </i>
                        </div>
                        </div>
                        <!-- Button -->
                        <div class="flex flex-1">
                        <a href="/projects/asia-manila-prime-properties" class="flex items-center ml-auto space-x-1 font-extrabold tracking-wide uppercase hover:text-amber-400 text-amber-500" to="/projects/asia-manila-prime-properties" native="true" data-v-c17953ac="">
                            <span>Discover</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        </div>
                    </div>
                    </div>


         


               </div>


                </section>
             


                  
   </div>
   
   
  
   <Footer />


</template>

<script>
// Import the Footer and MenuBar components
import Footer from '@/components/Organisms/footer.vue';
import MenuBar from '@/components/Organisms/menubar.vue';

export default {
  components: {
    // Register the Footer and MenuBar components
    Footer,
    MenuBar
  },
}
</script>
