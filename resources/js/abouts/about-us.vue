<template>
    <MenuBar/>


    <div id="main-wrapper">
                    <section id="hero" >
                       <div id="hero" class="relative h-48 " style="height:14rem">
                        <div class="absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-t from-zinc-50" ></div>
                           <div class="relative inset-0 md:top-[30%] z-30" >
                                   <div class="flex flex-col-reverse justify-center m-auto md:flex-row md:px-0 md:max-w-6xl md:m-auto" >
                                       <div class=" mx-auto md:w-4/2 md:mx-0" >
                                           <h6 class=" mt-5 text-2xl font-bold tracking-wide md:text-4xl md:text-left leading gap-y-2" >
                                            <span class=" text-center text-transparent bg-clip-text" style="color:#1D85BD;">
                                                Our Journey to Excellence and Client Satisfaction
                                               </span>
                                           </h6>
                                          
                                       </div>
                                      
                                   </div>
                           </div>
                       
                           
                       </div>
                   </section>
   
          
                   <article id="article">


                    <div id="vission" class="w-full h-67">
                        <div id="hero-wrapper" class="relative inset-0 z-10"></div>
                        <div class="relative inset-0 md:top-[30%] z-30">
                            <div class="h-full my-auto">
                                <div class="flex flex-col-reverse justify-center h-full md:flex-row md:px-0 md:max-w-5xl md:m-auto">

                                   

                                    <div class="flex flex-col mx-auto md:w-1/2 md:mx-0">
                                        <h1 class="flex flex-col text-4xl font-bold tracking-wide md:text-2xl leading gap-y-5">
                                            <span class="my-3 mt-4 " style="color:#1D85BD;">
                                                Our Mision
                                            </span>
                                        </h1>
                                        <span>
                                            Digicorp Solutions is a software house that offers great quality with reliable and good communication in each of our projects. As experts in software development and technology solutions, we strive to continuously engage, advance, grow and improve in what we do, to always deliver the best. Guided by these principles, our goal is to achieve the maximum satisfaction of our clients and users, through a work approach based on reason, common sense, sustainability, efficiency, high added value, and continuous improvement.
                                        </span>
                                    </div>

                                    <div class="flex flex-col  my-5 mx-auto md:w-1/3 md:mx-0">
                                        <img src="/storage/about-us/3d-target.png" class="object-fill" width="160px" height="200px" alt="launch application">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


        
                    
                    

                    <div id="vission" class="w-full h-67">
                        <div id="hero-wrapper" class="relative inset-0 z-10"></div>
                        <div class="relative inset-0 md:top-[30%] z-30">
                            <div class="h-full my-auto">
                                <div class="flex flex-col-reverse justify-center h-full md:flex-row md:px-0 md:max-w-5xl md:m-auto">

                                    <div class="flex flex-col  my-5 mx-auto md:w-1/3 md:mx-0">
                                        <img src="/storage/about-us/visionary.png" class="object-fill" width="160px" height="200px" alt="launch application">
                                    </div>

                                    <div class="flex flex-col mx-auto md:w-1/2 md:mx-0">
                                        <h1 class="flex flex-col text-4xl font-bold tracking-wide md:text-2xl leading gap-y-5">
                                            <span class="my-3 " style="color:#1D85BD;">
                                                Our Vision
                                            </span>
                                        </h1>
                                        <span>
                                            Digicorp Solutions is a software house that offers great quality with reliable and good communication in each of our projects. As experts in software development and technology solutions, we strive to continuously engage, advance, grow and improve in what we do, to always deliver the best. Guided by these principles, our goal is to achieve the maximum satisfaction of our clients and users, through a work approach based on reason, common sense, sustainability, efficiency, high added value, and continuous improvement.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="mission" class="relative w-full h-67">
                        <div id="hero-wrapper" class="relative inset-0 z-10"></div>
                        <div class="relative inset-0 md:top-[30%] z-30">
                            <div class="h-full my-auto">
                                <div class="flex flex-col-reverse justify-center h-full md:flex-row md:px-0 md:max-w-5xl md:m-auto">
                                    <div class="flex flex-col mx-auto md:w-1/2 md:mx-0">
                                        <h1 class="flex flex-col text-4xl font-bold tracking-wide md:text-2xl md:text-left leading gap-y-5">
                                            <span class="my-3 " style="color:#1D85BD;">
                                                Core Values
                                            </span>
                                        </h1>
                                        <span class="mb-5">
                                            Digicorp Solutions is a software house that offers great quality with reliable and good communication in each of our projects. As experts in software development and technology solutions, we strive to continuously engage, advance, grow and improve in what we do, to always deliver the best. Guided by these principles, our goal is to achieve the maximum satisfaction of our clients and users, through a work approach based on reason, common sense, sustainability, efficiency, high added value, and continuous improvement.
                                        </span>
                                    </div>
                                    <div class="flex flex-col my-5 mx-auto md:w-1/3 md:mx-0">
                                        <img src="/storage/about-us/core.png" class="object-fill" width="160px" height="200px" alt="launch application">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
 
   
                  
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
