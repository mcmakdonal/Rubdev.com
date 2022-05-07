<template>
    <Head>
        <title>{{ title }}</title>
        <meta name="description" content="Your page description">
    </Head>
    <div id="main" class="relative">
        <slot></slot>
    </div>
</template>

<script setup>
import { Head , Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    title: String
});
</script>