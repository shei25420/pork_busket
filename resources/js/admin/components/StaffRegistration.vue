<template>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Staff Management</h4>
        </div>
        <div class="card-body">
            <div class="row" v-if="resError">
                <ErrorAlert :message="resError"/>
            </div>
            <div class="basic-form">
                <form>
                    <div class="mb-3">
                        <label for="name">Enter Name</label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="icofont-user"></i>
                            </div>
                            <input type="text" v-model="formData.name" class="form-control input-default " placeholder="John Doe">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name">Enter Phone No.</label>
                        <div class="input-group">
                            <div class="input-group-text">254</div>
                            <input type="text" v-model="formData.phone" class="form-control input-default " placeholder="78765676">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name">Enter Password</label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="icofont-lock"></i>
                            </div>
                            <input type="password" v-model="formData.password" class="form-control input-default " placeholder="********">
                        </div>
                    </div>
                    <button @click.prevent="register" class="btn btn-sm btn-primary">Add Staff</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import ErrorAlert from '../../components/ErrorAlert.vue';

export default {
    props: ['resError'],
    components: {
        ErrorAlert
    },
    data: function () {
        return { 
            formData: {
                name: '',
                phone: '',
                password: ''
            }
        };
    },
    methods: {
        register: function (e) {
            const btn = e.target;
            btn.innerText = "Adding Staff...";
            this.$emit('register', btn, this.formData);
        }
    }
}
</script>

<style>

</style>