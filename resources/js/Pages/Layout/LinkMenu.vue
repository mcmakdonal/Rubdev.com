<template>
    <Link :href="path">
        <span class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">{{ name }}</span>
    </Link>
</template>

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    path: String,
    name: String
});
</script>