import './bootstrap';
import { createApp } from 'vue';

import router from "./router";

const app = createApp({});

import LteAdmin from './components/Layouts/LteAdmin.vue';
app.component('admin-component', LteAdmin);

app.use(router);


app.mount('#app');
