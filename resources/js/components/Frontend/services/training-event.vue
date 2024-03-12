<template>
  <MenuBar/>

  <div id="main-wrapper">

    <section id="hero-banner">
            <div id="hero" class="relative h-48" style="height:14rem">
                <div class="absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-t from-zinc-50"></div>
                <div class="relative inset-0 flex items-center justify-center z-30">
                    <div class="mx-auto max-w-6xl px-6 text-center  my-5 py-3"> <!-- Baguhin ang text-center class dito -->
                        <h6 class="mt-5 text-2xl font-bold md:text-4xl leading gap-y-2 text-transparent bg-clip-text hero-text" style="color:#1D85BD;">
                            Streamlining Conference and Training Management

                        </h6>
                    </div>
                </div>
            </div>


        </section>



               

              <section class="services-web-app">
                  
                  <div class="pt-2 md:pt-4 mt-4">
                      <h1 class="center flex  flex-col text-grey mb-6 space-y-2 text-3xl  md:mb-4 highlight">
                          <p>Conference and Training Event Management</p>
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
                            Conference and training management is a complex endeavor requiring meticulous planning, attention to detail, and seamless execution. At our agency, we specialize in simplifying this process for businesses and organizations, ensuring that every aspect of your event is meticulously coordinated and flawlessly executed. From strategic planning and venue selection to program development and attendee management, we handle all aspects of conference and training logistics, allowing you to focus on delivering valuable content and engaging experiences for your attendees.
                          </p>

                          <p>
                            Our approach to conference and training management is rooted in collaboration and customization. We work closely with you to understand your unique goals, audience demographics, and budgetary considerations, tailoring our services to meet your specific needs and objectives. Whether you're hosting a large-scale conference, a series of training workshops, or a corporate retreat, our team is committed to delivering personalized solutions that align with your vision and exceed your expectations.
                          </p>

                          <p>
                            With our comprehensive conference and training management services, you can rest assured that every detail of your event is expertly managed and executed. From venue logistics and program development to marketing promotion and attendee engagement, we handle every aspect of the planning process with professionalism and precision, ensuring a seamless and successful event that leaves a lasting impression on your attendees. Let us be your trusted partner in bringing your conference or training vision to life, delivering an exceptional experience that drives results for your organization.
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
