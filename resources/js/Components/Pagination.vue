<template>
    <div v-if="links.length > 3" class="flex items-center justify-center mt-4 space-x-4">
        <Link
            v-for="(link, k) in limitedLinks"
            :key="k"
            class="px-4 py-3 text-sm leading-4 bg-cerulean rounded hover:bg-indigo-400 focus:text-indigo-500 hover:shadow text-white"
            :class="{'bg-indigo-400 text-white': link.active}"
            :href="link.url"
            v-html="link.label"
        />
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';

    const props = defineProps({
        links: Array
    });

    const currentPage = props.links.findIndex(link => link.active);
    const numLinksToShow = 2;
    const startIndex = Math.max(1, currentPage - numLinksToShow);
    const endIndex = Math.min(startIndex + numLinksToShow * 2, props.links.length - 1);
    const limitedLinks = props.links.slice(startIndex, endIndex);
</script>
