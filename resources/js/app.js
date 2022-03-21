import { createApp } from "vue";
import { createPinia } from 'pinia';

import App from './App.vue';
import AdminRouter from './routes/admin.js';

//Routes Configuration

//App Initialization
const app = createApp(App);
//Globals Configuration
app.config.globalProperties.$protocol = process.env.MIX_PROTOCOL;
app.config.globalProperties.$domain = process.env.MIX_DOMAIN;
app.config.globalProperties.$axios = window.axios;

app.use(AdminRouter);
app.use(createPinia());
app.mount('#app');