import './bootstrap';
import { createApp } from 'vue';


const app = createApp({});

import Index from './components/Index.vue';
app.component('index-component', Index);


app.mount('#app');
