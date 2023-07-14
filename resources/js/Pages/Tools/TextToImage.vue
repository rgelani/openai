<script setup>
import OpenAiLayout from '@/Layouts/OpenAiLayout.vue';
import ImageGeneraterLayout from "@/Layouts/ImageGeneraterLayout.vue";
import { useForm, Link } from "@inertiajs/vue3";

const props = defineProps({
    images: null | Array,
})

const form = useForm({
    prompt: "",
    size: "256x256",
})

const submit = () => {
    form.post('text-to-image', {
        // onFinish: () => clear(),
    });
}
</script>
<template>
                <!-- <Head title="Image Generator" /> -->
                <OpenAiLayout>
                <ImageGeneraterLayout>
                <template #form>
                <div class="">
                    <p class="text-center text-2xl font-semibold">AI-Powered Image Generator</p>

                    <div class="mx-auto pt-10">
                    <input
                        type="text"
                        class="w-full text-gray-900 rounded-lg mr-3 w-[70%]"
                        placeholder="A blue sky with birds..."
                        ref="promtInput"
                        v-model="form.prompt"
                    />

                    <label
                        for="image-size"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Select size</label>
                    <select
                        id="image-size"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        v-model="form.size"
                    >
                        <option value="256x256">Small (256x256)</option>
                        <option value="512x512">Medium (512x512)</option>
                        <option value="1024x1024">Large (1024x1024)</option>
                </select>


                    <button 
                        class="" 
                        :class="[(form.prompt) ?
                            'bg-blue-400' :
                            'bg-blue-200',
                            'text-white p-2 rounded-lg w-70 mt-30'
                        ]"
                        @click="submit" :disabled="!form.prompt">Generate</button>
                    </div>
                </div>
                </template>
                <template #images v-if="images">
                    <div class="grid grid-cols-4 gap-4">
                        <a  target="_blank" v-for="( image, i ) in  images " :key="i" :href=image.url><img :src=    image.url      /></a>
                    </div>
                </template>
                </ImageGeneraterLayout>
                                                                                                                                                                                                                                        </OpenAiLayout>
</template>


