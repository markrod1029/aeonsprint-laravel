<template>
  <MenuBar/>

  <div id="main-wrapper">
                  <section id="hero" >
                     <div id="hero" class="relative h-48 " style="height:14rem">
                      <div class="absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-t from-zinc-50" ></div>
                         <div class="relative inset-0 md:top-[30%] z-30" >
                                 <div class="flex flex-col-reverse justify-center m-auto md:flex-row md:px-0 md:max-w-6xl md:m-auto" >
                                     <div class=" mx-auto md:w-4/2 md:mx-0" >
                                         <h6 class=" mt-5 text-2xl font-bold tracking-wide md:text-4xl md:text-left leading gap-y-2" >
                                          <span class=" text-center text-transparent bg-clip-text" style="color:#1D85BD;">
                                              Reliable Support Solutions for Seamless Operations
                                             </span>
                                         </h6>
                                        
                                     </div>
                                    
                                 </div>
                         </div>
                     
                         
                     </div>
                 </section>


                 
               

              <section class="services-web-app">
                  
                  <div class="pt-2 md:pt-4 mt-4">
                      <h1 class="center flex flex-col text-grey mb-6 space-y-2 text-3xl  md:mb-4 highlight">
                          <p>Maintenance Support</p>
                      </h1>
                                      
                  </div>


                  <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
                      <div name="submit" class="flex justify-center mb-2 md:ml-6 md:float-right not-prose">
                          <!-- <div class="relative w-[290px] h-[300px] aspect-w-3 aspect-h-3 sm:aspect-w-16 sm:aspect-h-9 bottom-4 left-3">
                              <img class="object-cover transform scale-150" src="/storage/serviceIcon/graphic-tablet-svgrepo-com.svg">
                              <div class="absolute inset-0"></div>
                          </div> -->
                          </div>
                          <p>
                            Maintenance support is a crucial component of ensuring the continued functionality and efficiency of various systems, equipment, and facilities within an organization. At our maintenance support service, we prioritize proactive measures to prevent disruptions and downtime, while also providing swift and effective solutions when issues arise. Our team is dedicated to implementing preventive maintenance schedules, conducting regular inspections, and utilizing advanced monitoring tools to detect and address potential problems before they impact operations.
                          </p>

                          <p>
                            In addition to preventive measures, our maintenance support service offers responsive assistance for corrective maintenance needs. Whether it's troubleshooting equipment malfunctions, resolving software glitches, or addressing infrastructure issues, our team is equipped with the expertise and resources to swiftly diagnose and resolve problems. We understand the importance of minimizing downtime and strive to provide timely and efficient solutions to keep our clients' operations running smoothly.
                          </p>
                          
                          <p>
                            Furthermore, our maintenance support service emphasizes continuous improvement and optimization to enhance the reliability and effectiveness of maintenance processes over time. By analyzing performance data, gathering feedback from clients and technicians, and implementing best practices, we continually refine our approach to deliver superior maintenance support. With our commitment to proactive maintenance, responsive assistance, and continuous improvement, clients can rely on our service to ensure the ongoing functionality and performance of their critical assets and systems.
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
