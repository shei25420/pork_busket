<template>
    <AuthenticationComponent :resError="error" @authenticate="login"/>
</template>

<script>
import { useRouter } from 'vue-router';

import AuthenticationComponent from '../components/AuthenticationComponent.vue';
import { useAdminStore } from "../stores/adminStore.js";
export default {
    setup: function() {        
        const store = useAdminStore();
        const router = useRouter();
        store.$onAction(({name, store, args, after, onError}) => {
            console.log(`Start "${name}" with params [${args.join(', ')}].`)
            after((result) => {
                if(result.status) {
                    args[0].innerText = 'Approved. Redirecting...';
                    window.Laravel.isLoggedIn = true;
                    window.Laravel.type = 1;         
                    router.push({name: 'AdminDashboard'});
                } else if(result.response.status === 401){
                    error = result.response.data.message;   
                    args[0].innerText = 'Failed';
                    args[0].removeAttribute('disabled');                   
                } else {
                    error = "Something went wrong. Please try again"
                    args[0].innerText = 'Failed';
                    args[0].removeAttribute('disabled');
                }
            });
 
            onError((err) => { 
                console.log("OnError: ", err);
            });
        });
        return { store };
    },
    components: {
        AuthenticationComponent
    },
    data: function () {
        return { 
            error: null
        };
    },
    methods: {
        login: function (btn, formData) {
            this.error = null;
            this.store.authenticate(btn, formData);
        }
    }
}

</script>