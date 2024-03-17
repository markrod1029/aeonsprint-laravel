<template>
    <MenuBar />
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

        <section class="contact-us  ">
                    <div id="contact-us" class=" md:max-w-5xl md:mx-auto about-us-text " >
   
                        <div class="relative p-16 my-12 hover:shadow-xl:hover contact-us-form ">
                                            <form @submit.prevent="handleSubmit()" method="POST">
                                            
                                                <div class="mb-4 ">
                                                    <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
                                                    <input v-model="linkForm.name" type="text" id="name" name="name" required class="mt-1 focus:ring-blue-900 focus:border-blue-900  block w-full h-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                
                                                <div class="mb-4">
                                                    <label for="email" class="block text-sm font-medium text-gray-700">Email  *</label>
                                                    <input v-model="linkForm.email" type="email" id="email" name="email" required class="mt-1 focus:ring-blue-800 focus:border-blue-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                                </div>

                                                <div class="mb-4">
                                                    <label for="contact" class="block text-sm font-medium text-gray-700">Contact *</label>
                                                    <input v-model="linkForm.contact" type="text" id="contact" name="contact" required class="mt-1 focus:ring-blue-800 focus:border-blue-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                                </div>
                                                
                                                
                                                
                                                <div class="mb-4">
                                                    <label for="message" class="block text-sm font-medium text-gray-700">Description  *</label>
                                                    <textarea v-model="linkForm.description" id="description" name="description" rows="4" required class="mt-1 focus:ring-blue-500 focus:border-blue-500  block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                                </div>

                                                <button class="z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none " name="submit">Submit</button>

                                            </form>
                        </div>


                    </div>




                </section>



             
    <Footer />

</template>

<script setup>
import Footer from '@/components/Organisms/footer.vue';
import MenuBar from '@/components/Organisms/menubar.vue';
import { ref, reactive} from 'vue';
import { useToastr } from '@/toastr.js';
import axios from 'axios';

const toastr = useToastr();
const linkForm = reactive({
    name: '',
    email: '',
    contact: '',
    status: 'Link Form',
    description: '',

});


const handleSubmit = () => {

    axios.post('/api/business-card', linkForm)
    .then((response) => {
        toastr.success('Link Form Send Successfuly')
    })
};



</script>