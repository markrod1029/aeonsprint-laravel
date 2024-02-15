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


                   
                 

                <section class="contact-us">
                    <div id="contact-us" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-2 md:max-w-5xl md:mx-auto about-us-text" style="gap: 2.5rem;  max-width: 74rem;" >
   
                        <div class="relative p-16 my-12 hover:shadow-xl:hover">
                            <h2 class="text-2xl font-bold mb-4">We're Ready, Let's Talk.</h2>
                                            <form action="submit_form.php" method="POST">
                                            
                                                <div class="mb-4">
                                                    <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
                                                    <input type="text" id="name" name="name" required class="mt-1 focus:ring-blue-900 focus:border-blue-900  block w-full h-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                
                                                <div class="mb-4">
                                                    <label for="email" class="block text-sm font-medium text-gray-700">Email  *</label>
                                                    <input type="email" id="email" name="email" required class="mt-1 focus:ring-blue-800 focus:border-blue-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="mb-4">
                                                    <label for="email" class="block text-sm font-medium text-gray-700">Information about the services we offer *</label>
                                                    <select type="email" id="email" name="email" required class="mt-1 focus:ring-blue-500 focus:border-blue-500  block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <option value="" hidden>Please Select</option>
                                                    <option value="Web App Development">Web App Development</option>
                                                    <option value="Graphic Design">Graphic Design</option>
                                                    <option value="Digital Business Card">Digital Business Card</option>
                                                    <option value="Chatbot Marketing">Chatbot Marketing</option>
                                                    <option value="SEO marketing">SEO marketing</option>
                                                    <option value="Conference and Training Event Managment">Conference and Training Event Managment</option>
                                                    <option value="IT-BPO Consultancy">IT-BPO Consultancy</option>
                                                    <option value="Startup Development">Startup Development</option>

                                                    </select>
                                                </div>
                                                
                                                
                                                
                                                <div class="mb-4">
                                                    <label for="message" class="block text-sm font-medium text-gray-700">Description  *</label>
                                                    <textarea id="message" name="message" rows="4" required class="mt-1 focus:ring-blue-500 focus:border-blue-500  block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                                </div>

                                                <button class="z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" name="submit"><!--[-->Submit<!--]--></button>

                                            </form>
                        </div>


                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl about-us-image">
                            <div class="flex justify-center mt-5"> <!-- Bagong linya -->
                                <img src="/storage/images/contact.png" width="500px" alt="Web App Development">
                            </div> <!-- Bagong linya -->
                            
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
