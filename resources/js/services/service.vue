<template>
    <div id="main-wrapper">
        <section id="hero">
            <div id="hero" class="relative h-48" :style="{ height: dynamicHeight }">
                <div class="absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-t from-zinc-50"></div>
                <div class="relative inset-0 md:top-[30%] z-30">
                    <div class="">
                        <div class="flex flex-col-reverse justify-center m-auto md:flex-row md:px-0 md:max-w-5xl md:m-auto">
                            <div class="flex flex-col mx-auto md:w-2/2 md:mx-0">
                                <h5 class="flex flex-col text-4xl font-bold tracking-wide md:text-5xl md:text-left leading gap-y-2">
                                    <span class="mt-5 text-center" style="color:#1D85BD;">Our Projects</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>



<script>
export default {
    data() {
        return {
            dynamicHeight: '14rem' // Initial width value
        };
    }
    // You can define methods to change the value of dynamicHeight based on some condition or event
}
</script>
