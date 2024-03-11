<template>
    <MenuBar/>

    <div id="main-wrapper">

      <section id="hero-banner">
            <div id="hero" class="relative h-48" style="height:14rem">
                <div class="absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-t from-zinc-50"></div>
                <div class="relative inset-0 flex items-center justify-center z-30">
                    <div class="mx-auto max-w-6xl px-6 text-center  my-5 py-3"> <!-- Baguhin ang text-center class dito -->
                        <h6 class="mt-5 text-2xl font-bold md:text-4xl leading gap-y-2 text-transparent bg-clip-text hero-text" style="color:#1D85BD;">
                            Your Dynamic Digital Business Card Solution

                        </h6>
                    </div>
                </div>
            </div>


        </section>



      
                   
                 

                <section class="services-web-app">
                    
                    <div class="pt-2 md:pt-4 mt-4">
                        <h1 class="center flex flex-col text-grey mb-6 space-y-2 text-3xl  md:mb-4 highlight">
                            <p>Digital Business Card</p>
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
                              In today's fast-paced digital world, the traditional paper business card is evolving into its
                               sleek and efficient counterpart: the digital business card. Our digital business card service
                                offers you a modern and eco-friendly solution to networking and sharing your contact information. 
                                With a digital business card, you can effortlessly exchange contact details with a simple tap or scan,
                                 eliminating the hassle of carrying and collecting paper cards.
                               Our designs are customizable to reflect your brand identity, incorporating your logo, colors, 
                               and personal information in a visually appealing layout.
                            </p>
                            One of the key advantages of a digital business card is its versatility. Unlike traditional paper 
                            cards, which can easily get lost or damaged, digital business cards can be easily stored and accessed
                             on smartphones, tablets, or other digital devices. This ensures that your contact information is always
                              readily available to your contacts, whether they're at a networking event, conference, or meeting. Additionally, 
                              our digital business cards can be integrated with your 
                            existing digital platforms, such as email signatures or social media profiles,
                             to further enhance your online presence and accessibility.
                            <p>

                              <p>
                                Furthermore, digital business cards offer valuable insights and analytics that paper cards simply cannot provide. With our service, 
                                you can track how many times your card has been viewed or shared, allowing you to gauge the effectiveness of your 
                                networking efforts and follow up with potential leads accordingly. By harnessing the power of digital technology,
                                 our digital business card service empowers you to make a memorable impression, streamline your networking process,
                                  and stay ahead in today's digital age.
                              </p>


                            </p>
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
