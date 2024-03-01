<template>
    <MenuBar/>

    <div id="main-wrapper">
        <section id="hero-banner">
            <div id="hero" class="relative h-48" style="height:14rem">
                <div class="absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-t from-zinc-50"></div>
                <div class="relative inset-0 flex items-center justify-center z-30">
                    <div class="mx-auto max-w-6xl px-6 text-center  my-5 py-3"> <!-- Baguhin ang text-center class dito -->
                        <h6 class="mt-5 text-2xl font-bold md:text-4xl leading gap-y-2 text-transparent bg-clip-text hero-text" style="color:#1D85BD;">
                            Connect With Us, Let's Start a Conversation
                        </h6>
                    </div>
                </div>
            </div>

        </section>
                   
        <div id="service" class="grid grid-cols-1 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 1.5rem; max-width: 74rem;">
    <div class="bg-white rounded-md">
        <div class="relative my-6 text-center md:my-12 hover:shadow-xl:hover">
            <h2 class="text-lg md:text-2xl font-bold leading">
                Address
            </h2>
            <p class="pt-2 md:pt-4 text-sm md:text-lg text-gray">Perez Blvd, Dagupan, Pangasinan</p>
        </div>
    </div>

    <div class="bg-white rounded-md">
        <div class="relative my-6 text-center md:my-12 hover:shadow-xl">
            <h2 class="text-lg md:text-2xl font-bold leading">
                Email Us
            </h2>
            <p class="pt-2 md:pt-4 text-sm md:text-lg text-gray">aeon.redstone@gmail.com</p>
            <p class="text-sm md:text-lg text-gray">info@tripidkard.com</p>
        </div>
    </div>

    <div class="bg-white rounded-md">
        <div class="relative my-6 text-center md:my-12 hover:shadow-xl">
            <h2 class="text-lg md:text-2xl font-bold leading">
                Call Us
            </h2>
            <p class="pt-2 md:pt-4 text-sm md:text-lg">09569908000</p>
        </div>
    </div>
</div>



                <section class="contact-us">
                    <div id="contact-us" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-2 md:max-w-5xl md:mx-auto about-us-text" >
   
                        <div class="relative p-16 my-12 hover:shadow-xl:hover contact-us-form">
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
                                                    <select type="email" id="email" name="email" required class="mt-1 focus:ring-blue-500 focus:border-blue-500  block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                    <option value="" hidden>Please Select</option>
                                                    <option value="Web App Development">Software Development</option>
                                                    <option value="Graphic Design">Graphic Design</option>
                                                    <option value="Digital Business Card">Digital Business Card</option>
                                                    <option value="Chatbot Marketing">Chatbot Marketing</option>
                                                    <option value="SEO marketing">SEO marketing</option>
                                                    <option value="Conference and Training Event Managment">Conference and Training Event Managment</option>
                                                    <option value="IT-BPO Consultancy">IT-BPO Consultancy</option>
                                                    <option value="Startup Development">Maintenance & Support</option>

                                                    </select>
                                                </div>
                                                
                                                
                                                
                                                <div class="mb-4">
                                                    <label for="message" class="block text-sm font-medium text-gray-700">Description  *</label>
                                                    <textarea id="message" name="message" rows="4" required class="mt-1 focus:ring-blue-500 focus:border-blue-500  block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                                </div>

                                                <button class="z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" name="submit"><!--[-->Submit<!--]--></button>

                                            </form>
                        </div>


                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl contact-us-image">
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
