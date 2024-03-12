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
                                           Aeonsprint Tripidkard
                                             </span>
                                         </h6>
                                        
                                     </div>
                                    
                                 </div>
                         </div>
                     
                         
                     </div>
                 </section>
                 
                 <section class="project-tripidkard max-w-5xl mx-auto">
    <div class="md:pt-4">
        <h1 class="center flex flex-col space-y-2 text-2xl md:mb-4">
            <p>Tripidkard Description</p>
        </h1>                                      
    </div>

    <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
        <p>
            Tripidkard, an innovative platform reshaping the dynamics of online commerce. Serving as a vibrant hub for affiliate merchants, Tripidkard connects businesses with influencers and marketers to expand their reach and drive sales. On the customer front, Tripidkard takes loyalty to new heights by rewarding every purchase with valuable points that can be redeemed for exciting perks. The synergy within Tripidkard creates a unique ecosystem where merchants thrive through affiliation, customers enjoy exclusive benefits, and both parties are immersed in a rewarding and engaging experience. Join us on this journey where success meets partnership, and loyalty is celebrated.
        </p>
    </div>

    <div class="md:pt-4">
        <h1 class="center flex flex-col space-y-2 text-2xl md:mb-4">
            <p>Challenge</p>
        </h1>                                      
    </div>

    <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
        <p>
            <!--[-->We determine the needs and objectives of our clients before defining the procedure and the information required to produce a structured flow. We assess the low-code/no-code platforms available that suit the needs of our clients. Following an evaluation, we will present the selected low-code/no-code platform to our clients, explain how it functions, and discuss how it might improve their website or web apps. We will cooperate and support them throughout the process to make sure that their needs are addressed.<!--[]-->
        </p>
        <ul class="list-disc ml-6">
            <li>Determine the needs and objectives of clients.</li>
            <li>Define the procedure and required information.</li>
            <li>Assess low-code/no-code platforms.</li>
            <li>Present the selected platform.</li>
            <li>Cooperate and support throughout the process.</li>
        </ul>
    </div>

    <div class="md:pt-4">
        <h1 class="center flex flex-col space-y-2 text-2xl md:mb-4">
            <p>Solution</p>
        </h1>                                      
    </div>

    <div class="md:h-96 max-w-5xl md:prose-lg prose mx-auto mb-5">
        <p>
            <!--[-->We determine the needs and objectives of our clients before defining the procedure and the information required to produce a structured flow. We assess the low-code/no-code platforms available that suit the needs of our clients. Following an evaluation, we will present the selected low-code/no-code platform to our clients, explain how it functions, and discuss how it might improve their website or web apps. We will cooperate and support them throughout the process to make sure that their needs are addressed.<!--[]-->
        </p>
        <ul class="list-disc ml-6">
            <li>Determine the needs and objectives of clients.</li>
            <li>Define the procedure and required information.</li>
            <li>Assess low-code/no-code platforms.</li>
            <li>Present the selected platform.</li>
            <li>Cooperate and support throughout the process.</li>
        </ul>
    </div>

    <div class="not-prose">
        <h1 class="center flex flex-col space-y-2 text-2xl md:mb-4">
        <span>Techologies</span>
    </h1>
    <div class="grid grid-cols-3 gap-3 mt-2 ml-5">
        <div class="flex flex-row items-center  space-x-2">
            <span class="text-zinc-600">Laravel</span>
        </div>
        <div class="flex flex-row items-center space-x-2">
            <span class="text-zinc-600">Tailwind CSS</span>
        </div>
        <div class="flex flex-row items-center space-x-2">
            <span class="text-zinc-600">Amazon AWS</span>
        </div>
        <div class="flex flex-row items-center space-x-2">
            <span class="text-zinc-600">Alpine.js</span>
        </div>
        <div class="flex flex-row items-center space-x-2">
            <span class="text-zinc-600">Socket.io</span>
        </div>
    </div>
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

}



</script>
