import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler.js';
import Question from "./components/Question.vue";
import Admin from "./components/Admin.vue";
const app = createApp({
    components: {
        Question,
        Admin,
    }
})
app.mount('#app')
