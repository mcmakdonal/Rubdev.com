<template>
    <Layout title="Contact">
        <div>

            <div class="container py-16 md:py-20" id="contact">
                <h2
                    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                    Here's a contact form
                </h2>
                <h4 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                    Have Any Questions?
                </h4>
                <div class="mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6">
                    <p class="font-body text-grey-10">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit
                        condimentum turpis nisl sem, viverra habitasse urna ante lobortis
                        fermentum accumsan. Viverra habitasse urna ante lobortis fermentum
                        accumsan.
                    </p>
                </div>
                <form class="mx-auto w-full pt-10 sm:w-3/4 bg-grey-50 p-10">
                    <div class="flex flex-col md:flex-row">
                        <input
                            class="mr-3 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
                            placeholder="Name" type="text" id="name" />
                        <input
                            class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
                            placeholder="Email" type="text" id="email" />
                    </div>
                    <textarea class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8"
                        placeholder="Message" id="message" cols="30" rows="10"></textarea>
                    <button
                        class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20">
                        Send
                        <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
                    </button>
                </form>
                <div class="flex flex-col pt-16 lg:flex-row">
                    <div
                        class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/4">
                        <div class="flex items-center">
                            <i class="bx bx-phone text-2xl text-grey-40"></i>
                            <p class="font-body font-bold uppercase text-grey-40 lg:text-lg">
                                Facebook
                            </p>
                        </div>
                        <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                            <a href="https://www.facebook.com/rubdev.xyz/" target="_blank" >rubdev.xyz</a>
                        </p>
                    </div>
                    <div
                        class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/4 lg:border-l-0 lg:border-t-2">
                        <div class="flex items-center">
                            <i class="bx bx-envelope text-2xl text-grey-40"></i>
                            <p class="font-body font-bold uppercase text-grey-40 lg:text-lg">
                                My Email
                            </p>
                        </div>
                        <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                            natdanai.opt@gmail.com
                        </p>
                    </div>
                    <div
                        class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/4 lg:border-l-0 lg:border-t-2">
                        <div class="flex items-center">
                            <i class="bx bx-map text-2xl text-grey-40"></i>
                            <p class="font-body font-bold uppercase text-grey-40 lg:text-lg">
                                Linkedin
                            </p>
                        </div>
                        <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                            <a href="https://www.linkedin.com/in/natdanai-opt" target="_blank">Natdanai</a>
                        </p>
                    </div>
                    <div
                        class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/4 lg:border-l-0 lg:border-t-2">
                        <div class="flex items-center">
                            <i class="bx bx-map text-2xl text-grey-40"></i>
                            <p class="font-body font-bold uppercase text-grey-40 lg:text-lg">
                                Fastwork
                            </p>
                        </div>
                        <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                            <a href="https://fastwork.co/user/mcmakdonal" target="_blank">Natdanai</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </Layout>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import Layout from "./Layout/Theme";
</script>