<template>
    <MenuBar />
    <section id="hero-banner" class="flex items-center justify-center mt-auto" style="position: relative; top: 10px;">
    <div class=" mx-auto">
      <img src="/storage/error/404.jpg" class="object-fill tranzinc-x-4  animate-horizontal" width="600px" height="500px" alt="launch application">
    </div>
  </section>


    <contactButton />


    <Footer />
  </template>
  
  <script setup>
 import Footer from '@/components/Organisms/footer.vue';
import MenuBar from '@/components/Organisms/menubar.vue';
import contactButton from '@/components/Atoms/button.vue';

  </script>
  
  <style scoped>
  /* Dito mo maaaring idagdag ang iyong mga estilo */
  #hero-banner {
    margin-top: auto; /* I-adjust ang margin-top para ilagay sa ibaba */

    top:30px
  }
  </style>
  