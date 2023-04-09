<template>
    <div class="md:flex md:flex-row md:gap-x-12 md:m-8">
        <div class="flex justify-between md:hidden border-b">
            <Link href="/" class="block p-4 font-bold">Social-Media</Link>

            <button class="p-4 focus:outline-none" @click="toggleSidebar">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <header ref="sidebar" class="navigation border-r py-36 px-10 flex justify-center absolute inset-y-0 left-0 transform -translate-x-full transition duration-200 ease-in-out md:relative md:translate-x-0">
            <Navigation />
        </header>

        <main class="flex flex-grow rounded-lg md:ml-72">
            <slot name="main" />
        </main>
    </div>
    <footer class="">
        <slot name="footer" />
    </footer>
</template>

<script setup>
    import Navigation from '@/Components/Navigation.vue';
    import { Link } from '@inertiajs/vue3';

    function toggleSidebar(event) {
        this.$refs.sidebar.classList.toggle("-translate-x-full");
    }
</script>

<style scoped>
    .navigation {
        background-color: #F1FAEE;
        position: fixed;
        z-index: 1;
        top: 0;
        bottom: 0;
        overflow-y: auto;
    }
</style>
