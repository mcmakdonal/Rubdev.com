<template>

    <Head>
        <title>{{ title }}</title>
        <meta name="description" content="Your page description">
    </Head>
    <div id="main" class="relative">
        <div class="w-full z-50 top-0 py-3 sm:py-5  absolute">
            <div class="container flex items-center justify-between">
                <div>
                    <a href="/">
                        <img src="/assets/img/rubdev.png" class="w-24 lg:w-48" alt="logo image" />
                    </a>
                </div>
                <div class="hidden lg:block">
                    <ul class="flex items-center">

                        <li class="group pl-6">
                            <LinkMenuVue path="services" name="Services"></LinkMenuVue>
                        </li>

                        <li class="group pl-6">
                            <LinkMenuVue path="portfolio" name="Portfolio"></LinkMenuVue>
                        </li>

                        <li class="group pl-6">
                            <LinkMenuVue path="clients" name="Clients"></LinkMenuVue>
                        </li>

                        <li class="group pl-6">
                            <LinkMenuVue path="work" name="Work"></LinkMenuVue>
                        </li>

                        <li class="group pl-6">
                            <LinkMenuVue path="blog" name="Blog"></LinkMenuVue>
                        </li>

                        <li class="group pl-6">
                            <LinkMenuVue path="contact" name="Contact"></LinkMenuVue>
                        </li>

                    </ul>
                </div>
                <div class="block lg:hidden">
                    <button @click="mobileMenu = true">
                        <i class="bx bx-menu text-4xl text-white"></i>
                        <img src="/assets/img/menu.png" class="h-5 w-auto" alt="" />
                    </button>
                </div>
            </div>
        </div>

        <div class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
            :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">

            <div class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3">

                <button class="absolute top-0 right-0 mt-4 mr-4" @click="mobileMenu = false">
                    <img src="/assets/img/icon-close.svg" class="h-10 w-auto" alt="" />
                </button>

                <ul class="mt-8 flex flex-col">

                    <li class="py-2">
                        <LinkMenuVue path="services" name="Services"></LinkMenuVue>
                    </li>

                    <li class="py-2">
                        <LinkMenuVue path="portfolio" name="Portfolio"></LinkMenuVue>
                    </li>

                    <li class="py-2">
                        <LinkMenuVue path="clients" name="Clients"></LinkMenuVue>
                    </li>

                    <li class="py-2">
                        <LinkMenuVue path="work" name="Work"></LinkMenuVue>
                    </li>

                    <li class="py-2">
                        <LinkMenuVue path="blog" name="Blog"></LinkMenuVue>
                    </li>

                    <li class="py-2">
                        <LinkMenuVue path="contact" name="Contact"></LinkMenuVue>
                    </li>

                </ul>
            </div>
        </div>

        <div class="relative bg-cover bg-center bg-no-repeat py-8 main-bg">
            <div class="absolute inset-0 z-20 bg-gradient-to-r bg-cover bg-center bg-no-repeat">
            </div>

            <div class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48">
                <div class="flex flex-col items-center justify-center lg:flex-row">
                    <div class="rounded-full border-8 border-primary shadow-xl">
                        <img src="/assets/img/blog-author.jpg" class="h-48 rounded-full sm:h-56" alt="author" />
                    </div>
                    <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
                        <h1 class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl">
                            Hello I'm Christy Smith!
                        </h1>
                        <div class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">
                            <div class="flex items-center justify-center pl-0 sm:justify-start md:pl-1">
                                <p class="font-body text-lg uppercase text-white">Let's connect</p>
                                <div class="hidden sm:block">
                                    <i class="bx bx-chevron-right text-3xl text-yellow"></i>
                                </div>
                            </div>
                            <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                                <a href="/">
                                    <i class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"></i>
                                </a>
                                <a href="/" class="pl-4">
                                    <i class="bx bxl-twitter text-2xl text-white hover:text-yellow"></i>
                                </a>
                                <a href="/" class="pl-4">
                                    <i class="bx bxl-dribbble text-2xl text-white hover:text-yellow"></i>
                                </a>
                                <a href="/" class="pl-4">
                                    <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
                                </a>
                                <a href="/" class="pl-4">
                                    <i class="bx bxl-instagram text-2xl text-white hover:text-yellow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <slot></slot>

        <div class="main-bg">
            <div class="container flex flex-col justify-between py-6 sm:flex-row">
                <p class="text-center font-body text-white md:text-left">
                    © Copyright 2022. All right reserved, ATOM.
                </p>
                <div class="flex items-center justify-center pt-5 sm:justify-start sm:pt-0">
                    <a href="/">
                        <i class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"></i>
                    </a>
                    <a href="/" class="pl-4">
                        <i class="bx bxl-twitter text-2xl text-white hover:text-yellow"></i>
                    </a>
                    <a href="/" class="pl-4">
                        <i class="bx bxl-dribbble text-2xl text-white hover:text-yellow"></i>
                    </a>
                    <a href="/" class="pl-4">
                        <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
                    </a>
                    <a href="/" class="pl-4">
                        <i class="bx bxl-instagram text-2xl text-white hover:text-yellow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import LinkMenuVue from './LinkMenu.vue';
const props = defineProps({
    title: String,
    mobileMenu: Boolean
});

const triggerNavItem = (Elemt) => {
    let element = document.getElementById(Elemt);
    element.scrollIntoView({ behavior: "smooth" });
}
</script>

<style>
.main-bg {
    background-color: rgba(96, 165, 250, var(--tw-bg-opacity));
    --tw-bg-opacity: 1;
}
</style>