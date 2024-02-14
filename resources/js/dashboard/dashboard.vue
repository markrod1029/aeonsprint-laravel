<template>
    <MenuBar />
    <div id="">
                <section id="hero">
                    <div id="hero" class="relative w-full h-screen" >
                        <div class="absolute inset-0 z-20 bg-gradient-to-b from-zinc-50" ></div>
                        <div class="absolute inset-x-0 bottom-0 z-20 h-32 bg-gradient-to-t from-zinc-50" ></div>
                        <div id="hero-wrapper" class="absolute inset-0 z-10" ></div>
                        <div class="absolute inset-0 md:top-[30%] z-30" >
                            <div class="h-full my-auto" >
                                <div class="flex flex-col-reverse justify-center h-full  m-auto md:flex-row md:px-0 md:max-w-5xl md:m-auto" >
                                    <div class="flex flex-col mx-auto md:w-1/2 md:mx-0" >
                                        <h1 class="flex flex-col text-5xl font-bold tracking-wide md:text-5xl md:text-left leading gap-y-5 banner-text" >
                                         
                                         <span class="mt-5 text-center" >
                                            Empowering Events, IT, Software Marketing Solutions
                                            </span>
                                            
                                            <!-- <span >
                                                Building <span class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-500" data-v-82c46f51>Better</span>
                                            </span>
                                            <span class="py-1 text-4xl md:text-5xl" >Web &amp;Mobile Apps</span>
                                            <span >
                                                that <span class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-500" data-v-82c46f51>soars</span>
                                            </span> -->
                                        </h1>
                                        <div class="mx-auto mt-8 md:mx-0 grid grid-cols-1 md:grid-cols-2 gap-4 banner-button">
                                            <router-link to="/contact-us" class="text-decoration-none z-20 inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none block uppercase ">
                                                Inquire Now
                                            </router-link> 
                                            <button href="#" @click="scrollToServiceSection" class="z-20 inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none block uppercase ">
                                                Our Service
                                            </button>
                                        </div>

                                        
                                    </div>
                                    <div class="md:w-5/2" >
                                        <img src="/storage/svg/progressive_app.svg" class="object-fill tranzinc-x-4  animate-horizontal banner-images" width="500px" height="500px" alt="launch application" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </section>


                <section class="about-us">
                    <div id="about-us" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-2 md:max-w-5xl md:mx-auto about-us-text" style="gap: 2.5rem;  max-width: 74rem;" >
   
                        <div class="relative p-16 my-12 hover:shadow-xl:hover">
                        <h2 class="text-4xl  leading">We Are Aeonsprint Solution</h2>
                        <p class="pt-4 text-lg text-gray">
                        {{ showFullText ? fullText : shortText }}
                        <span @click="showFullText = !showFullText" class="text-blue-500 " style="cursor: pointer;">
                            {{ showFullText ? 'Read Less' : 'Read More' }}
                        </span>
                        </p>
                        </div>


                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl about-us-image">
                            <div class="flex justify-center"> <!-- Bagong linya -->
                                <img src="/storage/images/about.png" width="500px" alt="Web App Development">
                            </div> <!-- Bagong linya -->
                            
                        </div>

                    </div>

                </section>
             

                <section id="service-section" class="services">
               
                    <div class="pt-2 md:pt-4 mt-4">
                        <h1 class="center flex flex-col mb-6 space-y-2 text-3xl  md:mb-4 highlight">
                            <p>Our Products & Services</p>
                        </h1>
                                        
                    </div>

                    <div id="service" class="grid grid-cols-1 gap-5 my-10 md:grid-cols-3 md:max-w-5xl md:mx-auto" style="gap: 2.5rem;  max-width: 74rem;" >
   
              
                        <div class="bg-white shadow-lg rounded-md product-services" >
                            <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl:hover">
                                <div class="flex justify-center">
                                    <img src="/storage/serviceIcon/581062-200.png" width="100px" alt="Web App Development">
                                </div>
                                <h2 class="text-2xl font-bold leading">
                                    Web App Development
                                </h2>
                                <p class="pt-4 text-2lg text-gray">Gather information to understand your present situation and goals
                                    Gather information to understand your present situation and goals
                                    Gather information to understand your present situation and goals
                                </p>
                            </div>
                        </div>

                        <div class=" bg-white shadow-lg rounded-md  product-services" >
                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl">
                            <div class="flex justify-center"> <!-- Bagong linya -->
                                <img src="/storage/serviceIcon/graphic-tablet-svgrepo-com.svg" width="100px" alt="Web App Development">
                            </div> <!-- Bagong linya -->
                            <h2 class="text-2xl font-bold leading">
                               Graphic Design
                            </h2>
                            <p class="pt-4 text-2lg text-gray" >Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                            </p>
                        </div>
                    </div>

                    <div class=" bg-white shadow-lg rounded-md product-services">
                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl ">
                            <div class="flex justify-center"> <!-- Bagong linya -->
                                <img src="/storage/serviceIcon/card-holder-svgrepo-com.svg"  width="100px" alt="Web App Development">
                            </div> <!-- Bagong linya -->
                            <h2 class="text-2xl font-bold leading">
                               Digital Business Card
                            </h2>
                            <p class="pt-4 text-2lg" >Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                            </p>
                        </div>
                    </div>



                    <div class=" bg-white shadow-lg rounded-md product-services" >
                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl ">
                            <div class="flex justify-center"> <!-- Bagong linya -->
                                <img src="/storage/serviceIcon/chat-svgrepo-com.svg"  width="100px" alt="Web App Development">
                            </div> <!-- Bagong linya -->
                            <h2 class="text-2xl font-bold leading ">
                                Chatbot Marketing
                            </h2>
                            <p class="pt-4 text-2lg" >Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                            </p>
                        </div>
                    </div>


                    <div class=" bg-white shadow-lg rounded-md product-services"  >
                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl ">
                            <div class="flex justify-center"> <!-- Bagong linya -->
                                <img src="/storage/serviceIcon/analytics-svgrepo-com.svg"  width="100px" alt="Web App Development">
                            </div> <!-- Bagong linya -->
                            <h2 class="text-2xl font-bold leading">
                               Digital Marketing
                            </h2>
                            <p class="pt-4 text-2lg text-gray" >Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                            </p>
                        </div>
                    </div>


                    <div class=" bg-white shadow-lg rounded-md product-services" >
                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl ">
                            <div class="flex justify-center"> <!-- Bagong linya -->
                                <img src="/storage/serviceIcon/marketing-target-seo-focus-archery-svgrepo-com.svg"  width="100px" alt="Web App Development">
                            </div> <!-- Bagong linya -->
                            <h2 class="text-2xl font-bold leading">
                                SEO Marketing
                            </h2>
                            <p class="pt-4 text-2lg text-gray" >Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                            </p>
                        </div>
                    </div>


                    <div class=" bg-white shadow-lg rounded-md product-services " >
                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl ">
                            <div class="flex justify-center"> <!-- Bagong linya -->
                                <img src="/storage/serviceIcon/training-achievement-medal-svgrepo-com.svg"  width="100px" alt="Web App Development">
                            </div> <!-- Bagong linya -->
                            <h2 class="text-2xl font-bold leading">
                                Conference and Training Event Managment
                            </h2>
                            <p class="pt-4 text-2lg text-gray" >Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                            </p>
                        </div>
                    </div>

                    

                    <div class=" bg-white shadow-lg rounded-md  product-services" >
                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl">
                            <div class="flex justify-center"> <!-- Bagong linya -->
                                <img src="/storage/serviceIcon/consultant-consult-business-consultant-document-review-svgrepo-com.svg"  width="100px" alt="Web App Development">
                            </div> <!-- Bagong linya -->
                            <h2 class="text-2xl font-bold leading">
                                IT-BPO Consultancy
                            </h2>
                            <p class="pt-4 text-2lg text-gray" >Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                            </p>
                        </div>
                    </div>



                    <div class=" bg-white shadow-lg rounded-md  product-services" >
                        <div class="relative p-16 mx-8 my-12 text-center hover:shadow-xl">
                            <div class="flex justify-center"> <!-- Bagong linya -->
                                <img src="/storage/serviceIcon/startup-rocket-svgrepo-com.svg"  width="100px" alt="Web App Development">
                            </div> <!-- Bagong linya -->
                            <h2 class="text-2xl font-bold leading">
                                Startup Development
                            </h2>
                            <p class="pt-4 text-2lg text-gray" >Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                                Gather information to understand your present situation and goals
                            </p>
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
    Footer,
    MenuBar
  },

  methods: {
        scrollToServiceSection() {
            const serviceSection = document.getElementById('service-section');
            if(serviceSection){
                serviceSection.scrollIntoView({behavior: 'smooth'});
            }
        }
        
    },

    data() {
    return {
      showFullText: false,

      shortText: `
      Aeonsprint Solution stands at the forefront of event management, information technology, and software marketing solutions.
    With a focus on innovation and efficiency, we provide tailored services to empower businesses across various industries.
    Our commitment to excellence drives us to develop cutting-edge solutions that streamline event planning, 
    enhance IT infrastructure, and optimize software marketing strategies. Through a combination of industry 
    expertise and technological prowess, we empower our clients to achieve their goals and surpass expectations. `, // Add the shortened version of your text here
      fullText: `

      Aeonsprint Solution stands at the forefront of event management, information technology, and software marketing solutions.
    With a focus on innovation and efficiency, we provide tailored services to empower businesses across various industries.
    Our commitment to excellence drives us to develop cutting-edge solutions that streamline event planning, 
    enhance IT infrastructure, and optimize software marketing strategies. Through a combination of industry 
    expertise and technological prowess, we empower our clients to achieve their goals and surpass expectations. 

      At Aeonsprint Solution, we understand the evolving landscape of modern business and the importance of staying ahead of the curve. That
      's why we offer comprehensive services designed to address the unique needs of each client. 
      From event management software to IT consultancy and digital marketing solutions, we provide end-to-end support 
      to help businesses thrive in today's competitive market. With Aeonsprint Solution as your partner, you can unlock new 
      opportunities, drive growth, and achieve sustainable success in the digital age.
    
      `
    };
  }
    
}


</script>


<style>
@media (max-width: 767px) {
    #service .product-services {
        width: 80%;
        margin: 0 auto;
        max-width: none;
    }
    .banner-images{

        width:350px;
        margin: 0 auto;

    }
    .banner-text{
        font-size: 2.5rem;
    }

    .banner-button {
        display: flex;
        flex-direction: row; /* Baguhin ang flex direction papunta sa row */
        justify-content: space-between; /* I-align ang mga item sa magkabilang gilid */
    }

    .banner-button button,
    .banner-button a {
        width: calc(50% - 5px); /* Gamitin ang calc() para may space sa pagitan ng mga button */
    }
    .about-us-text{
        margin: 0 auto;
        text-align: center;
        width: 90%;
    }
    .about-us-image{
        display: none;
    }
}
</style>
