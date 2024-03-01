<template>
    <MenuBar/>

    <div id="main-wrapper">

      <section id="hero-banner">
            <div id="hero" class="relative h-48" style="height:14rem">
                <div class="absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-t from-zinc-50"></div>
                <div class="relative inset-0 flex items-center justify-center z-30">
                    <div class="mx-auto max-w-6xl px-6 text-center  my-5 py-3"> <!-- Baguhin ang text-center class dito -->
                        <h6 class="mt-5 text-2xl font-bold md:text-4xl leading gap-y-2 text-transparent bg-clip-text hero-text" style="color:#1D85BD;">
                            Crafting Connections through Graphic Design

                        </h6>
                    </div>
                </div>
            </div>


        </section>


                  


                   
                 

                <section class="services-web-app">
                    
                    <div class="pt-2 md:pt-4 mt-4">
                        <h1 class="center flex flex-col text-grey mb-6 space-y-2 text-3xl  md:mb-4 highlight">
                            <p>Graphic Design</p>
                        </h1>
                                        
                    </div>


                    <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 services-description">
                        <div name="submit" class="flex justify-center mb-2 md:ml-6 md:float-right not-prose">
                            <!-- <div class="relative w-[290px] h-[300px] aspect-w-3 aspect-h-3 sm:aspect-w-16 sm:aspect-h-9 bottom-4 left-3">
                                <img class="object-cover transform scale-150" src="/storage/serviceIcon/graphic-tablet-svgrepo-com.svg">
                                <div class="absolute inset-0"></div>
                            </div> -->
                            </div>
                            <p><!--[-->
                              where creativity meets functionality! Our team of skilled designers is dedicated to bringing your visions to life
                              | through captivating visuals that resonate with your audience. With a perfect blend of artistic flair and strategic 
                              thinking, we craft designs that not only look stunning but also effectively communicate your message.
                            </p>
                        </div>


                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4 services-description">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Print  Design</span>
                            </div>
                            <p>
                              From business cards and brochures to posters and banners, we offer a wide range of print design
                              services to meet your marketing needs. Our designs are tailored to align with your brand 
                              guidelines and objectives, ensuring that every piece effectively communicates your message and captivates your audience.
                            </p>
                        </div>


                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4 services-description">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Logo Design</span>
                            </div>
                            <p>
                              Your logo is the cornerstone of your brand identity. Our designers specialize in creating unique, 
                              memorable logos that reflect your brand's personality and values. Whether you're starting from scratch or
                               looking to refresh your current logo, we're here to help you make a lasting impression.
                            </p>
                        </div>


                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4 services-description">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Digital Design</span>
                            </div>
                            <p>
                              In today's digital age, a strong online presence is essential for success.
                               Our digital design services cover everything from website design and social media graphics to email 
                               templates and digital ads. We combine creativity with user experience principles to deliver 
                               engaging digital experiences that drive results.
                            </p>
                        </div>



                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4 services-description">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Packaging  Design</span>
                            </div>
                            <p>
                              Packaging plays a crucial role in influencing purchasing decisions and shaping brand perception. 
                              Our designers are experts at creating eye-catching packaging designs that stand out on the shelf
                              and leave a lasting impression. Whether you're launching a new product or reimagining your packaging,
                               we'll help you make an impact.
                            </p>
                        </div>

                        
                        <div class="border border-gray-300 md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5 p-4 services-description">
                            <!-- Details in Wordpress -->
                            <div class=" font-bold text-center text-2xl">
                                <span>Illustration</span>
                            </div>
                            <p>
                              Illustrations add a unique and personal touch to your designs, helping you tell your story in a
                              visually compelling way. Whether you need custom illustrations for a website, book, or marketing
                              campaign, our talented illustrators can bring your ideas to life with creativity and precision.
                            </p>
                        </div>
 
                </section>
             
              


                <contactButton/>
   
                  
   </div>
   
   
  
   <Footer />


</template>

<script>
// Import the Footer and MenuBar components
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
