<template>
    <!-- <MenuBar/> -->

    <div>
    <!-- Button -->
    <button @click="openModal" class="bg-black text-white font-bold py-2 px-4 rounded border border-blue-500 hover:bg-blue-500 hover:text-black">
      Buksan ang Modal
    </button>

    <!-- Modal -->
    <div v-if="isModalOpen" class="fixed inset-0 flex items-center justify-center z-50 shadow-lg">
      <div class="fixed inset-0 bg-black opacity-50"></div>

      <div class="absolute top-1/4 left-1/4 right-1/4 bottom-1/4 bg-white p-8 rounded shadow-xl">
        <h2 class="text-xl font-bold mb-4">Modal Title</h2>
        <p class="mb-4">Ito ay ang laman ng modal. Maaari mong lagyan ito ng anumang nilalaman na nais mo.</p>

        <!-- Close button -->
        <button @click="closeModal" class="absolute top-0 right-0 m-2 text-black hover:text-blue-500 focus:outline-none">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>



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

  data() {
    return {
      isModalOpen: false
    };
  },
  methods: {
    openModal() {
      this.isModalOpen = true;
    },
    closeModal() {
      this.isModalOpen = false;
    }
  }

}

</script>

