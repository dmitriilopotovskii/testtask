<script setup>
import {ref} from "vue";
import axios from "axios";

const localAnswer = ref('')
const localQuestion = ref('')
const create = () => {
    axios.post(
        '/qas/',
        {
            Question: localQuestion.value,
            Answer: localAnswer.value,
        }

    ).then()
}


</script>
<template>
    <div class="py-5">

            <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                <form @submit.prevent="create()">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="grid gap-6 mb-6 ">
                        <div>

                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Question
                            </label>
                            <textarea id="message" rows="4" v-model="localQuestion"
                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="Write your thoughts here...">

                </textarea>

                        </div>

                        <div>

                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Answer</label>
                            <textarea id="message" rows="4" v-model="localAnswer"
                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="Write your thoughts here...">

                </textarea>

                        </div>
                    </div>
                    <button type="submit"
                            @click="$emit('update',localAnswer,localQuestion)"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Create
                    </button>
                </form>

            </p>
    </div>
</template>
