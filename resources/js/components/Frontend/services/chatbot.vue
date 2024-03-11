<template>
    <MenuBar/>

    <div id="main-wrapper">


      <section id="hero-banner">
            <div id="hero" class="relative h-48" style="height:14rem">
                <div class="absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-t from-zinc-50"></div>
                <div class="relative inset-0 flex items-center justify-center z-30">
                    <div class="mx-auto max-w-6xl px-6 text-center  my-5 py-3"> <!-- Baguhin ang text-center class dito -->
                        <h6 class="mt-5 text-2xl font-bold md:text-4xl leading gap-y-2 text-transparent bg-clip-text hero-text" style="color:#1D85BD;">
                            Revolutionizing Marketing with Chatbot Solutions

                        </h6>
                    </div>
                </div>
            </div>


        </section>


                    

                   
                 

                <section class="services-web-app">
                    
                    <div class="pt-2 md:pt-4 mt-4">
                        <h1 class="center flex flex-col  text-grey mb-6 space-y-2 text-3xl  md:mb-4 highlight">
                            <p>Chatbot Marketing</p>
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
                              Chatbot marketing leverages artificial intelligence and conversational interfaces to engage with customers, provide personalized experiences, and drive business outcomes. At our agency, we specialize in creating innovative chatbot marketing strategies tailored to your business objectives. Our approach begins with understanding your target audience, brand voice, and goals, allowing us to develop chatbots that resonate with your customers and enhance their overall experience.
                            </p>

                            <p>
                              Through chatbots, we facilitate seamless interactions between your brand and customers across various digital channels, including websites, social media platforms, and messaging apps. These chatbots serve as virtual assistants, guiding users through product inquiries, offering recommendations, and even facilitating transactions. By providing immediate and personalized assistance, chatbots help increase customer satisfaction, drive conversions, and foster long-term loyalty.
                            </p>

                            <p>
                              Moreover, our chatbot marketing strategies are data-driven, enabling us to continuously optimize performance and enhance user engagement. We analyze user interactions, gather valuable insights, and refine chatbot responses to better meet customer needs and preferences. Whether it's automating customer support, qualifying leads, or delivering targeted marketing messages, our chatbot solutions empower your business to deliver timely and relevant experiences that drive results.
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
