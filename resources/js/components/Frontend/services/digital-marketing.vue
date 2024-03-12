<template>
    <MenuBar/>

    <div id="main-wrapper">

      <section id="hero-banner">
            <div id="hero" class="relative h-48" style="height:14rem">
                <div class="absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-t from-zinc-50"></div>
                <div class="relative inset-0 flex items-center justify-center z-30">
                    <div class="mx-auto max-w-6xl px-6 text-center  my-5 py-3"> <!-- Baguhin ang text-center class dito -->
                        <h6 class="mt-5 text-2xl font-bold md:text-4xl leading gap-y-2 text-transparent bg-clip-text hero-text" style="color:#1D85BD;">
                            Elevating Brands through Digital Marketing Mastery
                        </h6>
                    </div>
                </div>
            </div>


        </section>

      
                 



                   
                 

                <section class="services-web-app">
                    
                    <div class="pt-2 md:pt-4 mt-4">
                        <h1 class="center flex  flex-col text-grey mb-6 space-y-2 text-3xl  md:mb-4 highlight">
                            <p>Digital Marketing</p>
                        </h1>
                                        
                    </div>


                    <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 services-description">
                        <div name="submit" class="flex justify-center mb-2 md:ml-6 md:float-right not-prose">
                            <!-- <div class="relative w-[290px] h-[300px] aspect-w-3 aspect-h-3 sm:aspect-w-16 sm:aspect-h-9 bottom-4 left-3">
                                <img class="object-cover transform scale-150" src="/storage/serviceIcon/graphic-tablet-svgrepo-com.svg">
                                <div class="absolute inset-0"></div>
                            </div> -->
                            </div>
                            <p>
                              Digital marketing encompasses a broad range of strategies and tactics aimed at promoting products, services, or brands using digital channels. At our agency, we offer comprehensive digital marketing services designed to help businesses thrive in the ever-evolving online landscape. Our approach combines creativity, data-driven insights, and cutting-edge technologies to deliver measurable results and drive business growth.
                            </p>

                            
                        </div>

                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Social Media Marketing</span>
                            </div>
                            <p>
                              We develop and execute social media strategies tailored to your brand objectives, audience demographics, and industry trends. From content creation and community management to paid advertising and influencer partnerships, we leverage social media channels to build brand awareness, engage with your audience, and drive meaningful interactions.
                            </p>
                        </div>

                        
                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Content Marketing</span>
                            </div>
                            <p>
                              We craft compelling and relevant content that resonates with your target audience and aligns with your brand messaging. Whether it's blog posts, videos, infographics, or whitepapers, our content marketing strategies aim to educate, entertain, and inspire action, ultimately driving traffic, leads, and conversions.
                            </p>
                        </div>


                        
                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Email Marketing</span>
                            </div>
                            <p>
                              We design and implement email campaigns to nurture leads, promote products or services, and strengthen customer relationships. Our email marketing strategies leverage segmentation, personalization, and automation to deliver targeted messages that drive engagement and drive revenue.
                            </p>
                        </div>


                        



 
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
      const sections = ['wordpress', 'webapp', 'lowcode', 'maintenance'];
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
