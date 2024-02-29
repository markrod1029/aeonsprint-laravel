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
                                              Amplifying Your Presence with SEO Marketing Magic
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
                          <p>SEO Marketing</p>
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

                            SEO marketing is the cornerstone of any successful online strategy, and our agency excels in delivering tailored solutions to elevate your digital presence. Through meticulous keyword research and strategic optimization techniques, we ensure that your website ranks prominently in search engine results, driving valuable organic traffic to your pages. Our approach extends beyond mere keyword placement; we focus on crafting compelling, user-centric content that resonates with your audience while adhering to search engine algorithms.
                          </p>

                          <p>
                            With a keen eye on technical aspects, our team ensures that your website is not only visually appealing but also structured to meet search engine requirements. From optimizing site speed and mobile responsiveness to implementing schema markup, we lay a solid foundation for your SEO success. Additionally, our comprehensive link-building strategies forge valuable connections with authoritative websites, further bolstering your site's credibility and visibility in search results.
                          </p>

                          <p>
                            Through continuous monitoring and analysis, we refine our strategies to adapt to evolving search trends and algorithms, ensuring that your SEO efforts deliver sustainable results. Our transparent reporting keeps you informed of your campaign's performance, providing actionable insights to drive ongoing optimization efforts. With our expertise in SEO marketing, we empower your business to achieve higher search engine rankings, increased organic traffic, and ultimately, greater online success.
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
