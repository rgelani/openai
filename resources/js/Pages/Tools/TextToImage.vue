<script setup>
import { Head } from '@inertiajs/vue3';
import OpenAiLayout from '@/Layouts/OpenAiLayout.vue';
import ImageGeneraterLayout from '@/Layouts/ImageGeneraterLayout.vue';

</script>

<template>
        <Head title="Image Generator" />
        <OpenAiLayout>
        <ImageGeneraterLayout>
            <template #form>
                <div class="">
                    <p class="text-center text-2xl font-semibold">AI-Powered Image Generator</p>

                    <div class="flex justify-center mx-auto pt-10">
                        <input type="text" class="w-full bg-slate-700 text-white rounded-lg mr-3 w-[70%]"
                            placeholder="Ask Laravel AI" ref="promtInput" />
                        <button class="text-white p-2 bg-blue-400 rounded-lg w-70">Generate</button>
                    </div>
                </div>
            </template>
            <template #images>
                images
            </template>
        </ImageGeneraterLayout>
    </OpenAiLayout>
</template>

