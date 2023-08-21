<script setup>
import {onMounted, ref} from "vue";
import axios from "axios";
const props = defineProps({
    settings : Array,
})
const selectedPt = ref(props.settings.paddingTop)
const selectedPb = ref(props.settings.paddingBottom)
const update = () => {
    axios.post(
        '/qaSettings',
        {
            PaddingTop: selectedPt.value,
            PaddingBottom: selectedPb.value,
        }

    )
}

</script>
<template>
    <div>
    <label for="pt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PaddingTop {{ selectedPt }}</label>
    <select id="pt"
            v-model="selectedPt"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    >
        <option>1</option>
        <option>1.5</option>
        <option>1.75</option>
        <option>2</option>
    </select>
    <label for="pb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PaddingBottom {{ selectedPb }}</label>
    <select id="pb"
            v-model="selectedPb"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option>1</option>
        <option>1.5</option>
        <option>1.75</option>
        <option>2</option>>
    </select>
    </div>
    <br>
    <button @click="update"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Update
    </button>
</template>

