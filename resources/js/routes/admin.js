import { createRouter, createWebHistory } from "vue-router";

import Authentication from '../admin/Authentication.vue';
import AdminDashboard from '../admin/Dashboard.vue';
import Chefs from '../admin/Chefs.vue';

const routes = [
    {
        path: '/auth/login',
        name: 'Authentication',
        component: Authentication   
    },
    {
        path: '/o/dashboard',
        name: 'AdminDashboard',
        component: AdminDashboard
    },
    {
        path: '/o/dashboard/chefs',
        name: 'DashboardChefs',
        component: Chefs
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes
});

router.beforeEach((to, from) => { 
    console.log(window.Laravel);    
    if((!window.Laravel.isLoggedIn || window.Laravel.type !== 1) && to.name !== "Authentication") return { name: 'Authentication' }
    else if(window.Laravel.isLoggedIn && window.Laravel.type === 1 && to.name === 'Authentication') return { name: 'AdminDashboard' };
    return true;
});

export default router;