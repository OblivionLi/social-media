<template>
    <Layout>
        <template #main>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="header">
                    <img class="w-full h-64 object-cover transform hover:scale-105 transition-all duration-300" :src="news.image" alt="Article image" />
                    <div class="info">
                        <h2>{{ news.title }}</h2>
                        <p>Author: {{ news.user.name }}</p>
                        <p>Read Time: {{ news.reading_time }}</p>
                        <p>Views: {{ news.views }}</p>
                    </div>
                </div>
                <div>
                    <p>{{ news.content }}</p>
                </div>
            </div>
        </template>
    </Layout>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
    import Layout from '@/Layouts/Public/Layout.vue';
    import Pagination from '@/Components/Pagination.vue';
    import SearchNewsResults from '@/Components/SearchNewsResults.vue';

    const props = defineProps({
        news: Object
    });
</script>
