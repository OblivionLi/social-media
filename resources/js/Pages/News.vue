<template>
    <Layout>
        <template #main>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-between">
                    <SearchNewsResults />
                    <Pagination :links="news.links" class="mt-0"/>
                </div>
                <div class="flex flex-wrap gap-4 lg:gap-8 xl:gap-12 py-6">
                    <div v-for="item in news.data" :key="item.id" class="max-w-sm mx-auto">
                        <div class="shadow-md rounded-md overflow-hidden hover:shadow-lg transition-all duration-300">
                            <div class="relative">
                                <img class="w-full h-48 object-cover transform hover:scale-105 transition-all duration-300" src="https://placehold.co/300x200" alt="Article image" />
                                <!-- <img class="w-full h-48 object-cover transform hover:scale-105 transition-all duration-300" :src="item.image_url" alt="Article image" /> -->
                                <a href="#" class="absolute inset-0 border-2 border-gradient-r-purple-blue hover:bg-gradient-r-purple-blue hover:text-white transition-all duration-300"></a>
                            </div>
                            <div class="p-4">
                                <a href="#" class="block mt-1 text-lg leading-tight font-medium text-gray-800 hover:text-cerulean transition-colors duration-300 truncate h-12 overflow-hidden">{{ item.title }}</a>
                                <p class="mt-2 text-gray-500 overflow-hidden h-24">{{ item.content }}</p>
                                <div class="flex justify-between items-center mt-2">
                                    <p class="text-gray-600 text-sm">Read time: {{ item.reading_time }}</p>
                                    <p class="text-gray-600 text-sm">Author: {{ item.user.name }}</p>
                                </div>
                                <div class="mt-4 flex justify-between items-center">
                                    <p class="text-gray-600 text-sm">Views: {{ item.views }}</p>
                                    <a href="#" class="bg-cerulean hover:bg-opacity-90 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-300">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <Pagination :links="news.links" class="flex justify-center pagination" />
            </div>
        </template>
    </Layout>
</template>

<script setup>
    import Layout from '@/Layouts/Public/Layout.vue';
    import Pagination from '@/Components/Pagination.vue';
    import SearchNewsResults from '@/Components/SearchNewsResults.vue';

    const props = defineProps({
        news: Object
    });
</script>

<style scoped>
  @media (max-width: 640px) {
        .flex-wrap > * {
            width: 100%;
        }
        .pagination {
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 1rem;
        }
        .pagination > * {
            margin: 0.25rem;
        }
  }
</style>
