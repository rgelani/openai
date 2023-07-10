<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

const host = document.body.dataset.url;

</script>

<template>
                <Head title="Welcome" />

                <div
                    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
                >
                    <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            >Dashboard</Link
                        >

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                >Log in</Link
                            >

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                >Register</Link
                            >
                        </template>
                    </div>

                    <div class="max-w-7xl mx-auto p-6 lg:p-8">
                        <div class="flex justify-center">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" version="1.1" width="200" height="50" viewBox="0 0 1000 303"><g transform="matrix(1,0,0,1,-0.6060516206076159,0.45617553896553886)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 396 120" data-background-color="#ffffff" preserveAspectRatio="xMidYMid meet" height="303" width="1000"><g id="tight-bounds" transform="matrix(1,0,0,1,0.23999644176060997,-0.18043635988314577)"><svg viewBox="0 0 395.5199999999999 120.3610781356474" height="120.3610781356474" width="395.5199999999999"><g><svg viewBox="0 0 602.4191506753912 183.32276108629426" height="120.3610781356474" width="395.5199999999999"><g transform="matrix(1,0,0,1,206.89915067539116,41.72909035822538)"><svg viewBox="0 0 395.52 99.86458036984351" height="99.86458036984351" width="395.52"><g id="textblocktransform"><svg viewBox="0 0 395.52 99.86458036984351" height="99.86458036984351" width="395.52" id="textblock"><g><svg viewBox="0 0 395.52 99.86458036984351" height="99.86458036984351" width="395.52"><g transform="matrix(1,0,0,1,0,0)"><svg width="395.52" viewBox="4.199999809265137 -34.900001525878906 140.58999633789062 35.5" height="99.86458036984351" data-palette-color="#a85f3b"><path d="M15.75-34.9L15.75-34.9Q20.05-34.9 22.58-34.13 25.1-33.35 26.23-31.4 27.35-29.45 27.35-25.9L27.35-25.9Q27.35-22.2 25.98-20.25 24.6-18.3 21.5-18L21.5-18 21.5-17.8Q25.35-17.45 26.9-15.1 28.45-12.75 28.45-8.6L28.45-8.6Q28.45-5.05 27.33-3.1 26.2-1.15 23.75-0.38 21.3 0.4 17.3 0.4L17.3 0.4Q14.25 0.4 12.08 0.38 9.9 0.35 8.05 0.25 6.2 0.15 4.2 0L4.2 0 4.9-3.85Q6-3.8 9.15-3.75 12.3-3.7 16.5-3.7L16.5-3.7Q19.1-3.7 20.6-4.15 22.1-4.6 22.75-5.85 23.4-7.1 23.4-9.5L23.4-9.5Q23.4-12.1 22.73-13.48 22.05-14.85 20.5-15.43 18.95-16 16.2-16.05L16.2-16.05 4.85-16.05 4.85-19.7 16.15-19.7Q18.55-19.75 19.95-20.2 21.35-20.65 21.95-21.88 22.55-23.1 22.55-25.3L22.55-25.3Q22.55-27.55 21.9-28.75 21.25-29.95 19.7-30.38 18.15-30.8 15.5-30.8L15.5-30.8Q13-30.8 11-30.8 9-30.8 7.5-30.78 6-30.75 4.9-30.65L4.9-30.65 4.2-34.5Q6-34.7 7.63-34.77 9.25-34.85 11.18-34.88 13.1-34.9 15.75-34.9ZM4.2-34.5L9.1-34.5 9.1 0 4.2 0 4.2-34.5ZM46.7-25L46.7-25Q49.5-25 51.42-24.28 53.35-23.55 54.32-21.8 55.3-20.05 55.3-17L55.3-17 55.3 0 51.5 0 50.75-5.3 50.45-5.9 50.45-17Q50.45-19.15 49.45-20.1 48.45-21.05 45.65-21.05L45.65-21.05Q43.75-21.05 40.87-20.85 38-20.65 35.2-20.45L35.2-20.45 34.75-23.9Q36.45-24.2 38.52-24.45 40.6-24.7 42.75-24.85 44.9-25 46.7-25ZM40.5-15.05L53.1-15.05 53.05-11.65 41.55-11.6Q39.85-11.55 39.17-10.73 38.5-9.9 38.5-8.45L38.5-8.45 38.5-6.95Q38.5-5.15 39.37-4.33 40.25-3.5 42.15-3.5L42.15-3.5Q43.55-3.5 45.27-4.03 47-4.55 48.75-5.63 50.5-6.7 51.9-8.35L51.9-8.35 51.9-5.2Q51.4-4.5 50.4-3.53 49.4-2.55 47.97-1.65 46.55-0.75 44.82-0.15 43.1 0.45 41.05 0.45L41.05 0.45Q38.85 0.45 37.17-0.33 35.5-1.1 34.55-2.63 33.6-4.15 33.6-6.35L33.6-6.35 33.6-9Q33.6-11.85 35.42-13.45 37.25-15.05 40.5-15.05L40.5-15.05ZM72.9-25L72.9-25Q78.55-25 81.07-22.98 83.59-20.95 83.59-17L83.59-17Q83.65-13.7 82.17-11.9 80.7-10.1 77.4-10.1L77.4-10.1 63.3-10.1 63.3-13.55 76.15-13.55Q77.8-13.55 78.3-14.6 78.8-15.65 78.8-17L78.8-17Q78.75-19.25 77.47-20.2 76.2-21.15 73.09-21.15L73.09-21.15Q70.55-21.15 69.09-20.4 67.65-19.65 67.07-17.8 66.5-15.95 66.5-12.6L66.5-12.6Q66.5-8.85 67.22-6.88 67.95-4.9 69.57-4.15 71.2-3.4 73.9-3.4L73.9-3.4Q75.8-3.4 78.17-3.58 80.55-3.75 82.5-4L82.5-4 83-0.85Q81.8-0.35 80.09-0.03 78.4 0.3 76.59 0.45 74.8 0.6 73.3 0.6L73.3 0.6Q69 0.6 66.4-0.7 63.8-2 62.6-4.83 61.4-7.65 61.4-12.25L61.4-12.25Q61.4-17.05 62.6-19.85 63.8-22.65 66.34-23.83 68.9-25 72.9-25ZM89.69-24.4L93.44-24.4 94.04-19.7 94.49-19 94.49 0 89.69 0 89.69-24.4ZM104.29-25L105.39-25 104.89-20.5 103.34-20.5Q101.29-20.5 99.17-19.7 97.04-18.9 93.99-17.4L93.99-17.4 93.64-20.35Q96.29-22.55 99.02-23.78 101.74-25 104.29-25L104.29-25ZM117.34-34.5L122.44-34.5Q123.09-34.5 123.59-34.13 124.09-33.75 124.29-33.15L124.29-33.15 135.19 0 129.99 0 121.39-27.75Q121.19-28.5 120.99-29.25 120.79-30 120.59-30.65L120.59-30.65 119.19-30.65Q118.99-30 118.79-29.25 118.59-28.5 118.34-27.75L118.34-27.75 109.74 0 104.59 0 115.49-33.15Q115.69-33.75 116.19-34.13 116.69-34.5 117.34-34.5L117.34-34.5ZM111.04-14.65L128.64-14.65 128.64-10.5 111.04-10.5 111.04-14.65ZM139.79-34.5L144.79-34.5 144.79 0 139.79 0 139.79-34.5Z" opacity="1" transform="matrix(1,0,0,1,0,0)" fill="#a85f3b" class="wordmark-text-0" data-fill-palette-color="primary" id="text-0"/></svg></g></svg></g></svg></g></svg></g><g><svg viewBox="0 0 183.32351999999997 183.32276108629426" height="183.32276108629426" width="183.32351999999997"><g><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0" y="0" viewBox="4.667734146118164 4.6859588623046875 90.3050308227539 90.30465698242188" enable-background="new 0 0 100 100" xml:space="preserve" height="183.32276108629426" width="183.32351999999997" class="icon-icon-0" data-fill-palette-color="accent" id="icon-0"><path d="M17.504 35.743c-1.334 8.611 0.522 17.134 5.093 23.382 3.514 4.801 8.413 7.905 13.796 8.739 5.677 0.88 11.253-0.429 15.703-3.685 1.248-0.912 2.36-1.946 3.326-3.076-2.222 0.978-4.814 1.267-7.626 0.831-11.717-1.816-19.673-13.464-17.735-25.964 0.934-6.03 4.384-11.497 9.713-15.397 6.768-4.952 15.953-6.97 25.201-5.537 7.474 1.158 17.67 5.964 25.56 15.213 0 0-22.835-39.421-56.115-20.356C23.689 16.04 18.653 28.323 17.504 35.743z" fill="#99592a" data-fill-palette-color="accent"/><path d="M82.544 65.256c1.659-8.555 0.125-17.141-4.207-23.557-3.331-4.931-8.109-8.217-13.457-9.253-5.639-1.094-11.261 0.004-15.83 3.091-1.282 0.863-2.431 1.854-3.44 2.947 2.257-0.894 4.859-1.084 7.652-0.543 11.64 2.257 19.151 14.196 16.744 26.616-1.161 5.989-4.815 11.324-10.288 15.019-6.949 4.692-16.205 6.364-25.393 4.582C26.902 82.719 16.894 77.532 9.358 67.992c0 0 21.331 40.255 55.307 22.457C75.621 84.712 81.115 72.628 82.544 65.256z" fill="#99592a" data-fill-palette-color="accent"/><path d="M35.726 82.88c8.611 1.334 17.133-0.522 23.381-5.094 4.801-3.514 7.905-8.413 8.74-13.796 0.879-5.676-0.429-11.253-3.686-15.702-0.912-1.248-1.946-2.36-3.076-3.327 0.979 2.222 1.267 4.815 0.831 7.626-1.816 11.717-13.463 19.673-25.965 17.736-6.029-0.934-11.497-4.385-15.395-9.713-4.952-6.768-6.971-15.954-5.538-25.202 1.158-7.474 5.964-17.67 15.213-25.559 0 0-39.421 22.835-20.356 56.115C16.022 76.695 28.305 81.73 35.726 82.88z" fill="#99592a" data-fill-palette-color="accent"/><path d="M90.432 35.718c-5.738-10.955-17.822-16.45-25.194-17.879-8.554-1.659-17.141-0.125-23.557 4.208-4.931 3.331-8.217 8.108-9.254 13.456-1.094 5.64 0.004 11.261 3.092 15.83 0.863 1.282 1.854 2.431 2.946 3.441-0.894-2.257-1.084-4.859-0.542-7.652 2.257-11.64 14.196-19.151 26.615-16.744 5.99 1.161 11.324 4.816 15.019 10.289 4.693 6.949 6.363 16.204 4.583 25.392-1.44 7.423-6.626 17.431-16.167 24.966C67.973 91.025 108.228 69.694 90.432 35.718z" fill="#99592a" data-fill-palette-color="accent"/></svg></g></svg></g></svg></g><defs/></svg><rect width="395.5199999999999" height="120.3610781356474" fill="none" stroke="none" visibility="hidden"/></g></svg></g></svg>
                                                                                                    </div>

                                                                                                    <div class="mt-16">
                                                                                                        <div>
                                                                                                            <h1 class="text-xl font-semibold text-gray-900 dark:text-white text-center my-8 text-lg">Welcome to OpenAI free tool</h1>

                                                                                                        </div>

                                                                                                        <!-- tools redirection -->
                                                                                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                                                                                                            <!-- Code explanation -->
                                                                                                                <!-- <Link
                        :href="route('generate-text')"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                        >
                        <div class="dark:bg-red-800/20">
                            <div
                                class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    class="w-7 h-7 stroke-red-500"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"
                                    />
                                </svg>
                            </div>

                            <div class="flex justify-between">
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Code Explainer</h2>
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                            />
                        </svg>
</div>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                A code explainer is an AI-powered tool that deconstructs and provides a detailed explanation of a code snippet, guiding users through each step in a comprehensible manner.
                            </p>
                        </div>
                    </Link> -->
                                                                                                                <!-- chatbot -->
                                                                                                                <Link
                                                                                                                    :href="route('chat')"
                                                                                                                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                                                                                                                    >
                                                                                                                    <div class="dark:bg-red-800/20">
                                                                                                                        <div
                                                                                                                            class="h-16 w-16 flex items-center justify-center rounded-full m-auto"
                                                                                                                        >
                                                                                                                        <img :src="`${host}/images/chat.gif`" />
                                                                                                                        </div>

                                                                                                                        <div class="flex justify-between">
                                                                                                                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Chat</h2>
                                                                
                                                                                                                        <svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        fill="none"
                                                                                                                        viewBox="0 0 24 24"
                                                                                                                        stroke-width="1.5"
                                                                                                                        class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6"
                                                                                                                    >
                                                                                                                        <path
                                                                                                                            stroke-linecap="round"
                                                                                                                            stroke-linejoin="round"
                                                                                                                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                                                                                                                        />
                                                                                                                    </svg>
                                                                                            </div>
                                                                                                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                                                                                                            Feel free to ask any question to this chatbot! It will provide you with a response that is well-formatted and easy to read. This chatbot is known for its helpfulness, creativity, cleverness, and friendly nature. If you'd like, you can even create your own version of a chatbot, similar to ChatGPT.
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </Link>

                                                                                                                <!-- text to image -->
                                                                                                                <Link
                                                                                                                    :href="route('text-to-image')"
                                                                                                                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                                                                                                                    >
                                                                                                                    <div>
                                                                                                                        <div
                                                                                                                            class="h-16 w-16 dark:bg-red-800/20 flex items-center justify-center rounded-full m-auto"
                                                                                                                        >
                                                                                                                        <img src="https://openai.test/images/generate-image.gif" />
                                                                                                                        </div>

                                                                                                                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Generate Image From Text</h2>

                                                                                                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                                                                                                            An AI image generator is an innovative tool powered by artificial intelligence that produces unique images based on a predefined set of input parameters. One notable example of such a tool is DALL·E, which allows users to create their own customized versions of images using advanced AI algorithms.
                                                                                                                        </p>
                                                                                                                    </div>

                                                                                                                    <svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        fill="none"
                                                                                                                        viewBox="0 0 24 24"
                                                                                                                        stroke-width="1.5"
                                                                                                                        class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6"
                                                                                                                    >
                                                                                                                        <path
                                                                                                                            stroke-linecap="round"
                                                                                                                            stroke-linejoin="round"
                                                                                                                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                                                                                                                        />
                                                                                                                    </svg>
                                                                                                                </Link>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                                                                                                            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                                                                                                                <div class="flex items-center gap-4">
                                                                                                                    <a
                                                                                                                        href="https://github.com/sponsors/taylorotwell"
                                                                                                                        class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                                                                                                    >
                                                                                                                        <svg
                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                            fill="none"
                                                                                                                            viewBox="0 0 24 24"
                                                                                                                            stroke-width="1.5"
                                                                                                                            class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400"
                                                                                                                        >
                                                                                                                            <path
                                                                                                                                stroke-linecap="round"
                                                                                                                                stroke-linejoin="round"
                                                                                                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                                                                                                                            />
                                                                                                                        </svg>
                                                                                                                        Sponsor
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                                                                                                                        BaerAI
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
