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
                                           Aeonsprint Tripidkard
                                             </span>
                                         </h6>
                                        
                                     </div>
                                    
                                 </div>
                         </div>
                     
                         
                     </div>
                 </section>
                 

              <section class="project-tripidkard max-w-5xl mx-auto">
                  
                  <div class=" md:pt-4">
                      <h1 class="center flex flex-col  space-y-2 text-2xl  md:mb-4 ">
                          <p>Chatbot Marketing</p>
                      </h1>
                                      
                  </div>

                  <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
                      <div name="submit" class="flex justify-center mb-2 md:ml-6 md:float-right not-prose">
                          <!-- <div class="relative w-[290px] h-[300px] aspect-w-3 aspect-h-3 sm:aspect-w-16 sm:aspect-h-9 bottom-4 left-3">
                              <img class="object-cover transform scale-150" src="/storage/serviceIcon/graphic-tablet-svgrepo-com.svg">
                              <div class="absolute inset-0"></div>
                          </div> -->
                          </div>
                          <p><!--[-->We determine the needs and objectives of our clients before defining the procedure and the information required to produce a structured flow. We assess the low-code/no-code platforms available that suit the needs of our clients. Following an evaluation, we will present the selected low-code/no-code platform to our clients, explain how it functions, and discuss how it might improve their website or web apps. We will cooperate and support them throughout the process to make sure that their needs are addressed.<!--]--></p>
                      </div>


                      <div class=" md:pt-4">
                      <h1 class="center flex flex-col  space-y-2 text-2xl  md:mb-4 ">
                          <p>Chatbot Marketing</p>
                      </h1>
                                      
                  </div>

                  <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
                      <div name="submit" class="flex justify-center mb-2 md:ml-6 md:float-right not-prose">
                          <!-- <div class="relative w-[290px] h-[300px] aspect-w-3 aspect-h-3 sm:aspect-w-16 sm:aspect-h-9 bottom-4 left-3">
                              <img class="object-cover transform scale-150" src="/storage/serviceIcon/graphic-tablet-svgrepo-com.svg">
                              <div class="absolute inset-0"></div>
                          </div> -->
                          </div>
                          <p><!--[-->We determine the needs and objectives of our clients before defining the procedure and the information required to produce a structured flow. We assess the low-code/no-code platforms available that suit the needs of our clients. Following an evaluation, we will present the selected low-code/no-code platform to our clients, explain how it functions, and discuss how it might improve their website or web apps. We will cooperate and support them throughout the process to make sure that their needs are addressed.<!--]--></p>
                      </div>



              </section>
           
            


              <contactButton />       
 
                
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

}



</script>
