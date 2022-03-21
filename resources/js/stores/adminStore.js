import { defineStore } from "pinia";

import axios from "axios";
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['Accept'] = 'application/json';
axios.defaults.headers.common['Content-Type'] = 'application/json';
axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

export const useAdminStore = defineStore('admin-store', {
    state: () => {
        return {
            user: null,   
            chefs: null,
            waiters: null,
            _type: null,
            _tk: null
        }
    },
    getters: {
        getUser: (state) => state.user
    },
    actions: {
        async authenticate(btn, formData) {
            try {
                // return await axios.get('http://management.porkbusket.test/auth/csrf_token');
                return await axios.post(`http://management.porkbusket.test/auth/login`, formData);
            } catch (err) {
                return err;
            }          
        },
        async fetchChefs() {
            try {
                return await axios.get(`http://management.porkbusket.test/chefs`);
            } catch (err) {
                return err;
            }
        },
        async addChef(btn, formData) {
            try {
                // return await axios.get('http://management.porkbusket.test/auth/csrf_token');
                return await axios.post(`http://management.porkbusket.test/chefs/store`, formData);
            } catch (err) {
                return err;
            }
        }
    }
})