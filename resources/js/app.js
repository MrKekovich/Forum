import './bootstrap';
import { createApp } from 'vue';

import router from "./router";

const app = createApp({});

import Index from './components/Layouts/Index.vue';

import MenuFull from "./components/Includes/LteAdmin/LeftMenu/MenuFull.vue";
import Menu from "./components/Includes/LteAdmin/LeftMenu/Menu.vue";

app.component('index-component', Index);

app.component('menu-full-component', MenuFull);
app.component('menu-component', Menu)

app.use(router);


app.mount('#app');
