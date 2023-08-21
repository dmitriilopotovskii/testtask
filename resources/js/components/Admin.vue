<script setup>
import {onMounted, ref} from 'vue'
import {initAccordions, initFlowbite,} from 'flowbite'
import AdminContent from "./AdminContent.vue";
import AdminDesign from "./AdminDesign.vue";
import AddNewQuestion from "./AddNewQuestion.vue";

const props = defineProps({
    qas: Array,
    // Multiple possible types
    settings: Array,
})
const localQas = ref(props.qas)
const content = ref(true)
const add = ref(false)
const create = ( Question,Answer,id) => {
    id = localQas.value.length + 1
    localQas.value.push({Question,Answer ,id})

}
onMounted(() => {
    initFlowbite()
    initAccordions()
})
</script>

<template>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" @click="content = true"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                           aria-current="page">Content</a>
                    </li>
                    <li>
                        <a href="#" @click="content = false"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Design</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div v-if="content">
        <div class="flex flex-col items-center">
            <h2 class="font-bold text-5xl mt-5 tracking-tight">
                Content
            </h2>
            <p class="text-neutral-500 text-xl mt-3">
            </p>
        </div>
        <div v-for="qa in localQas" :key="qa.id">
            <AdminContent :question="qa.Question" :answer="qa.Answer" :id="qa.id"/>
        </div>
        <button @click="add = !add" type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Add
        </button>
        <div v-if="add">
            <AddNewQuestion  @update="create"/>
        </div>
    </div>
    <div v-else class="flex flex-col items-center">
        <h2 class="font-bold text-5xl mt-5 tracking-tight">
            Design
        </h2>
        <p class="text-neutral-500 text-xl mt-3">
        </p>
        <AdminDesign :settings="settings"/>
    </div>


</template>
