<script setup>
import QuestionContent from "./QuestionContent.vue";
import {onMounted} from "vue";
const props = defineProps( {
    qas: Array,
    // Multiple possible types
    settings: Array ,
})
const pTop = props.settings.paddingTop
const pBottom = props.settings.paddingBottom

</script>

<template>

    <div class="flex flex-col items-center">
        <h2 class="font-bold text-5xl mt-5 tracking-tight">
            FAQ
        </h2>
        <p class="text-neutral-500 text-xl mt-3">
            Frequenty asked questions
        </p>
    </div>
    <div v-for="qa in qas" :key="qa.id" class="grid divide-y divide-neutral-200 max-w-xl mx-auto mt-8">
        <QuestionContent :question="qa.Question" :answer="qa.Answer" :pt="pTop" :pb="pBottom"/>
    </div>
</template>

