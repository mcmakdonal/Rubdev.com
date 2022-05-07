<template>
    <div class="flex justify-center mt-24">
        <h1 class="text-2xl font-bold text-gray-700">Vue 3 App</h1>
    </div>
  <Link href="/">Home</Link>
  <Link href="/contact">Contact</Link>
  <Link href="/port">Port</Link>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>