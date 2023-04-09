<template>
    <form @submit.prevent="submitForm">
        <div class="flex justify-center">
            <div class="relative w-full max-w-xs">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg @click="submitForm" class="cursor-pointer w-5 h-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M21 21l-4.35-4.35M15.5 10.5a5 5 0 1 1-5-5 5 5 0 0 1 5 5z"></path>
                    </svg>
                </div>
                <input v-bind:title="tooltipText" v-model="form.search" @keydown.enter.prevent="submitForm" class="block w-full py-2 pl-10 pr-3 leading-5 text-gray-900 placeholder-gray-500 bg-white border border-gray-300 rounded-md appearance-none focus:outline-none focus:placeholder-gray-400 focus:border-blue-500 focus:ring-blue-500 focus:text-gray-900 sm:text-sm" placeholder="Search" type="search">
            </div>
        </div>
    </form>
</template>

<script setup>
    import { useForm } from '@inertiajs/vue3';

    const form = useForm({
        search: null
    });

    const submitForm = () => {
        form.get('/news', {
            preserveState: true
        });
    };

    const tooltipText = "Search by pressing `Enter` on your keyboard or by clicking the magnifying glass."

</script>
