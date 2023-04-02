<template>
    <nav class="flex flex-grow flex-col gap-4 tracking-wider font-medium">
        <ul>
            <li class="px-4 py-2 text-gray-800 ">
                <Link href="/" class="relative text-gray-800 hover:text-cerulean" :class="[{ 'active': $page.component === 'Welcome' }, {'active-link': $page.component === 'Welcome'}]">Home</Link>
            </li>
            <li class="px-4 py-2 text-gray-800 ">
                <Link href="/notifications" class="relative text-gray-800 hover:text-cerulean">Notifications</Link>
            </li>
            <li class="px-4 py-2 text-gray-800 ">
                <Link href="/news" class="relative text-gray-800 hover:text-cerulean" :class="[{ 'active': $page.url.startsWith('/news') }, {'active-link': $page.url.startsWith('/news')}]">News</Link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<style>
    a.active-link {
        text-transform: uppercase;
        color: #00B4D8;
        font-weight: bold;
    }
</style>
