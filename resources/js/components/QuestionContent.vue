<script setup>
defineProps({
    question: String,
    answer: String,
    pt: Number,
    pb: Number,
})
</script>
<template>
    <div :style="{ paddingTop: pt + 'rem', paddingBottom: pb + 'rem'}">
        <details class="group">
            <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                <span> {{ question }}</span>
                <span class="transition group-open:rotate-180">
                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                     stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path
                    d="M6 9l6 6 6-6"></path>
</svg>
              </span>
            </summary>
            <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                {{ answer }}
            </p>
        </details>
    </div>
</template>
