import './bootstrap';
import { createApp } from 'vue';

import router from "./router";

const app = createApp({});

import Index from './components/Index.vue';
app.component('index-component', Index);

app.use(router);


app.mount('#app');
