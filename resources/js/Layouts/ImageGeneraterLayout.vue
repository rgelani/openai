<script setup></script>
<template>
    <div class="shadow-lg w-[80%] mx-auto p-10">
        <slot name="form" />
    </div>
    <div class="ml-auto">
        <div class="pt-6">
                    <main class="w-[80%] m-auto">
                <slot name="images" />
            </main>
        </div>
    </div>
</template>