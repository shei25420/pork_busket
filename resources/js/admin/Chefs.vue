<template>
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <!-- <div class="welcome-text">
                <h4>Chefs</h4>
                <span>Staff Management</span>
            </div> -->
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Add Chef</button>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <DataTable v-if="store.chefs && store.chefs.length" :items="store.chefs" :headers="headers"/>
                <PrimaryAlert v-if="store.chefs && !store.chefs.length" message="You currently haven't added any chef yet"/>
                <ErrorAlert v-if="errorMsg" />
            </div>
        </div>
    </div>    
    <div class="modal fade" id="basicModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <StaffRegistration @register="store.addChef"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue'

import StaffRegistration from './components/StaffRegistration.vue';
import DataTable from '../components/DataTable.vue';
import PrimaryAlert from '../components/PrimaryAlert.vue';
import ErrorAlert from '../components/ErrorAlert.vue';
import { useAdminStore } from '../stores/adminStore.js';
export default {
    setup: function () {
        const store = useAdminStore();  

        let primaryMsg = ref(null);
        var errorMsg = ref(null);
        store.$onAction(({name, store, args, after, onError}) => { 
            console.log(name);
            after((result) => {
                if(result.status) {
                    if(name === "fetchChefs") {
                        store.chefs = result.data.data;
                        if(!store.chefs.length) primaryMsg = "You currently haven't added any chef yet";
                    } else if(name === "addChef") {
                       store.chefs.unshift(result.data.data); 
                    }
                } else if (result.response.status === 500) {
                    errorMsg = 'Something went wrong. If persits reload page';
                }
            });
            onError((err) => {
                 console.log("onError: ", err);
            });
        });
        return { store, errorMsg, primaryMsg };
    },
    components: {
        DataTable,
        PrimaryAlert, 
        ErrorAlert,
        StaffRegistration
    },
    data: function () {
        return {
            headers: ['name', 'phone', 'created_at'],
            actions: ['view']
        };
    },
    methods: {
        register: function (btn, formData) {

        }
    },
    mounted: function () {
        //Check if chefs had already been fetched
        if(!this.store.chefs) {
            this.store.fetchChefs();
        }
    }
}
</script>