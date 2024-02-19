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


                   
                 

                <section class="services-web-app">
                    
                    <div class="pt-2 md:pt-4 mt-4">
                        <h1 class="center flex flex-col text-grey mb-6 space-y-2 text-3xl  md:mb-4 highlight">
                            <p>Software Development </p>
                        </h1>
                                        
                    </div>


                    <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
                        <div name="submit" class="flex justify-center mb-2 md:ml-6 md:float-right not-prose">
                            <!-- <div class="relative w-[290px] h-[300px] aspect-w-3 aspect-h-3 sm:aspect-w-16 sm:aspect-h-9 bottom-4 left-3">
                                <img class="object-cover transform scale-150" src="/storage/about-us/3d-target.png">
                                <div class="absolute inset-0"></div>
                            </div> -->
                            </div>
                            <p>
                                In our service, we offer a simple and effective way to fulfill your software needs. 
                                From conceptualization to deployment and maintenance, we're here to guide you through 
                                every step of the software development process. With our expert developers, we can certainly
                                 bring your software vision to life, tailored to your requirements and objectives.
                            </p>

                            <p>
                                Through our fast communication and dynamic coordination, you can trust that your project is in good hands. 
                                We utilize the latest technologies and methodologies in software development to ensure that our products 
                                are of top quality and adhere to the latest industry standards.
                            </p>

                            <p>
                                Not only do we provide software development services, but we also continuously improve and adapt to changes
                                 to meet your future needs. By offering solutions tailored to you, we're ready to be your partner in the growth 
                                 and success of your business. Decide now and join us on the journey to enhance your software today!
                            </p>

                        </div>


 
                </section>
             
              

                    <section id="service-section" class="services">
                        <div class="pt-2 md:pt-4 mt-4">
                            <h1 class="center flex flex-col mb-6 space-y-2 text-3xl md:mb-4 highlight">
                                <p>Services</p>
                            </h1>
                        </div>
                        <div id="service" class="grid grid-cols-1 gap-1 my-5 md:grid-cols-4 md:max-w-5xl md:mx-auto" style="gap: 2.5rem; max-width: 74rem;">
                            <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" name="submit" 
                            @click="showDetails('wordpress')">
                           
                                Wordpress
                            </button>
                            <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" name="submit" 
                            
                            @click="showDetails('tailoredweb')">
                            Tailored Web
                            </button>

                            <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" name="submit" 
                            
                            @click="showDetails('lowcode')">
                            
    
                                No-code/Low Code
                            </button>

                            <button class="uppercase product-services  z-20 inline-flex items-center justify-center px-5 py-2 text-base font-medium leading-6 tracking-wide rounded shadow-sm hover:text-white text-white bg-gradient-to-b from-blue-400 to-blue-500 button whitespace-nowrap active:ring-2 active:ring-brand-600 focus:outline-none" name="submit" 
                            
                            @click="showDetails('startup')">

                                Startup 
                            </button>
                        </div>
                    </section>




                    <section class="wordpress" style="display: none;">
                        <div class="pt-2 md:pt-4 mt-4">
                            <h1 class="center flex flex-col text-grey mb-6 space-y-2 text-3xl md:mb-4 highlight">
                                <p>Wordpress Development</p>
                            </h1>
                        </div>
                        <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
                            <!-- Details in Wordpress -->
                            <p>
                                In our WordPress service, we specialize in providing efficient solutions to fulfill your software needs. 
                                Whether it's developing a custom theme, creating plugins, or optimizing your website, our team is dedicated
                                 to meeting your specific requirements and objectives. We ensure that your WordPress site not only has a visually 
                                 appealing design but also operates smoothly across different devices and browsers. From the initial consultation 
                                 to the final deployment and ongoing support, 
                                we offer comprehensive services to optimize your WordPress site for performance and user experience.
                            </p>

                            <p>
                                Furthermore, we are committed to staying updated with the latest WordPress trends and technologies. 
                                This allows us to deliver modern and innovative solutions tailored to your evolving needs. Let us
                                 be your partner in maximizing the potential of your WordPress website and achieving your online goals.
                                 Contact us today to start your journey towards WordPress excellence!
                            </p>

                        </div>



                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>CMS Development</span>
                            </div>
                            <p>
                                In our WordPress service, we specialize in providing efficient solutions to fulfill your software needs. 
                                Whether it's developing a custom theme, creating plugins, or optimizing your website, our team is dedicated
                                to meeting your specific requirements and objectives. We ensure that your WordPress site not only has a visually 
                                appealing design but also operates smoothly across different devices and browsers. From the initial consultation 
                                to the final deployment and ongoing support, 
                                we offer comprehensive services to optimize your WordPress site for performance and user experience.
                            </p>
                        </div>


                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>WordPress Theme Customization</span>
                            </div>
                            <p>
                                In our WordPress service, we specialize in providing efficient solutions to fulfill your software needs. 
                                Whether it's developing a custom theme, creating plugins, or optimizing your website, our team is dedicated
                                to meeting your specific requirements and objectives. We ensure that your WordPress site not only has a visually 
                                appealing design but also operates smoothly across different devices and browsers. From the initial consultation 
                                to the final deployment and ongoing support, 
                                we offer comprehensive services to optimize your WordPress site for performance and user experience.
                            </p>
                        </div>


                       

                        


                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Plugin Development</span>
                            </div>
                            <p>
                                In our WordPress service, we specialize in providing efficient solutions to fulfill your software needs. 
                                Whether it's developing a custom theme, creating plugins, or optimizing your website, our team is dedicated
                                to meeting your specific requirements and objectives. We ensure that your WordPress site not only has a visually 
                                appealing design but also operates smoothly across different devices and browsers. From the initial consultation 
                                to the final deployment and ongoing support, 
                                we offer comprehensive services to optimize your WordPress site for performance and user experience.
                            </p>
                        </div>

                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Blogging Solutions</span>
                            </div>
                            <p>
                                In our WordPress service, we specialize in providing efficient solutions to fulfill your software needs. 
                                Whether it's developing a custom theme, creating plugins, or optimizing your website, our team is dedicated
                                to meeting your specific requirements and objectives. We ensure that your WordPress site not only has a visually 
                                appealing design but also operates smoothly across different devices and browsers. From the initial consultation 
                                to the final deployment and ongoing support, 
                                we offer comprehensive services to optimize your WordPress site for performance and user experience.
                            </p>
                        </div>


                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Maintenance and Support</span>
                            </div>
                            <p>
                                In our WordPress service, we specialize in providing efficient solutions to fulfill your software needs. 
                                Whether it's developing a custom theme, creating plugins, or optimizing your website, our team is dedicated
                                to meeting your specific requirements and objectives. We ensure that your WordPress site not only has a visually 
                                appealing design but also operates smoothly across different devices and browsers. From the initial consultation 
                                to the final deployment and ongoing support, 
                                we offer comprehensive services to optimize your WordPress site for performance and user experience.
                            </p>
                        </div>
                    </section>


                    <!-- service Wordpress End -->

                    <!-- service Web App Start -->
                    <section class="tailoredweb" style="display: none;">
                        <div class="pt-2 md:pt-4 mt-4">
                            <h1 class="center flex flex-col text-grey mb-6 space-y-2 text-3xl md:mb-4 highlight">
                                <p>Tailored Web Development</p>
                            </h1>
                        </div>

                        <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
                            <!-- Details of Tailored Web -->
                            <p>
                                Experience tailored web solutions designed specifically for your business needs. 
                                Our expert team crafts customized websites that perfectly represent your brand and
                                 cater to your unique requirements, ensuring a seamless user experience that drives engagement
                                  and conversions. Stand out from the competition and make a lasting impression online with
                                   our personalized web design services
                            </p>

                        </div>

                  
                        
                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4">
                            <!-- Details in Tailored Web -->
                            <div class=" font-bold text-center text-2xl">
                                <span>laravel Vue</span>
                            </div>
                            <p>
                                Experience the seamless integration of Laravel with Tailwind CSS, offering a straightforward
                                 solution for crafting visually stunning web applications. With Laravel providing the robust
                                  backend framework and Tailwind CSS offering a comprehensive set of utility classes for 
                                  effortless styling, developers can create sleek and modern interfaces with ease. Say 
                                  goodbye to complex CSS frameworks and hello to streamlined development with Laravel and Tailwind CSS. 
                                Elevate your web projects today with the perfect combination of power and simplicity
                            </p>
                        </div>



                    </section>

                    <!-- Service Web App End -->

                    <!-- Service No-Code/low-code start -->

                    <section class="lowcode" style="display: none;">
                        <div class="pt-2 md:pt-4 mt-4">
                            <h1 class="center flex flex-col text-grey mb-6 space-y-2 text-3xl md:mb-4 highlight">
                                <p>No-Code/Low-Code Development</p>
                            </h1>
                        </div>
                        <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
                            <!-- Detalye ng No-Code/low-code -->
                            <p><!--[-->Low code/No-code Development is the software development approach used for fast development, 
                                which requires little to no coding to build web applications and processes.<!--]-->
                            </p>
                            
                                <p><!--[-->We determine the needs and objectives of our clients before defining the procedure and the
                                 information required to produce a structured flow. We assess the low-code/no-code platforms available 
                                 that suit the needs of our clients. Following an evaluation, we will present the selected low-code/no-code
                                  platform to our clients, explain how it functions, and discuss how it might improve their website or 
                                  web apps. We will cooperate and support them throughout the process to make sure that their needs are
                                   addressed.<!--]--></p>

                        </div>
                        



                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4">
                            <!-- Details in No-Code/low-code -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Wix Web</span>
                            </div>
                            <p>
                                Wix Web Wizardry empowers you to build a captivating online presence with ease. Whether you're
                                 a budding entrepreneur or seasoned professional, our intuitive platform and vast selection of
                                  templates make crafting your dream website a breeze. 
                                From sleek portfolios to dynamic e-commerce sites, unleash your creativity and 
                                let Wix elevate your brand to new heights
                            </p>
                        </div>


                    </section>

                    <!-- Service No-Code/low-code End -->


                    <!-- Startup Start -->


                    <section class="startup" style="display: none;">
                        <div class="pt-2 md:pt-4 mt-4">
                            <h1 class="center flex flex-col text-grey mb-6 space-y-2 text-3xl md:mb-4 highlight">
                                <p>Startup Development</p>
                            </h1>
                        </div>
                        <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
                            <!-- Detalye ng No-Code/low-code -->
                            <p><!--[-->Low code/No-code Development is the software development approach used for fast development, 
                                which requires little to no coding to build web applications and processes.<!--]-->
                            </p>
                            
                                <p><!--[-->We determine the needs and objectives of our clients before defining the procedure and the
                                 information required to produce a structured flow. We assess the low-code/no-code platforms available 
                                 that suit the needs of our clients. Following an evaluation, we will present the selected low-code/no-code
                                  platform to our clients, explain how it functions, and discuss how it might improve their website or 
                                  web apps. We will cooperate and support them throughout the process to make sure that their needs are
                                   addressed.<!--]--></p>

                        </div>
                        


                       

                    </section>

                    <!-- Startup End -->
                  
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


//   methods: {
//     showWordpressDetails() {
//       var wordpressSection = document.querySelector('.wordpress');
//       if (wordpressSection.style.display === 'none') {
//           wordpressSection.style.display = 'block';
//       } else {
//           wordpressSection.style.display = 'none';
//       }
//     },

//     showWebAppDetails() {
//         var webappSection = document.querySelector('.web-app');
//         if(webappSection.style.display ==='none')
//         {
//             webappSection.style.display = 'block';
//         } else {
//             webappSection.style.display = 'none';
            
//         }
//     },
//     showLowCodeDetails(){
//      var lowcodeSelection = document.querySelector('.low-code');

//      if(lowcodeSelection.style.display === 'none'){
//         lowcodeSelection.style.display = 'block';
//      } else {
//         lowcodeSelection.style.display = 'none';
//      }

//     },

//     showMaintenanceDetails() {
//         var maintenanceSelector = document.querySelector('.maintenance');
//         if(maintenanceSelector.style.display === 'none'){
//             maintenanceSelector.style.display = 'block';

//         } else {
//             maintenanceSelector.style.display = 'none';

//         }

//     }


//   }



methods: {
    showDetails(section) {
      const sections = ['wordpress', 'tailoredweb', 'lowcode', 'startup'];
      for (const sec of sections) {
        const el = document.querySelector('.' + sec);
        if (el) {
          if (sec === section) {
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
