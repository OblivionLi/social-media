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

        <!-- <div class="border-l border-gray-400 absolute inset-y-0 left-0 transform -translate-x-full transition duration-200 ease-in-out md:relative md:translate-x-0"></div> -->

        <main class="flex flex-grow shadow-2xl rounded-lg">
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
</script>

<script>
    export default {
        methods: {
            toggleSidebar(event) {
                this.$refs.sidebar.classList.toggle("-translate-x-full");
            }
        }
    }
</script>

<style>
    .navigation {
        background-color: #F1FAEE;
    }
</style>
