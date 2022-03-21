<template>
    <div class="authincation front-end h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-12 h-100 d-flex align-items-center">
                    <div class="authincation-content style-1">
                        <div class="row h-100">
							<div class="col-md-6 h-100">
								<div class="img-bx">
									<img src="/front_end_assets/images/login.jpg" alt="" class="img-fluid">
								</div>
							</div>
                            <div class="col-md-6">
                                <div class="auth-form">
                                    <h4 class="main-title">Sign in</h4>
                                    <form>
                                        <div class="form-group mb-3 pb-3">
                                            <label class="font-w600">Phone Number</label>
                                            <input v-model="formData.phone" type="text" class="form-control solid" placeholder="Enter Phone No.">
                                        </div>
                                        <div class="form-group mb-3 pb-3">
                                            <label class="font-w600">Password</label>
                                            <input v-model="formData.password" type="password" class="form-control solid" placeholder="*********">
                                        </div>
                                        <!-- <div class="form-group mb-3 pb-3">
                                            <label class="font-w600">OTP send on above number</label>
                                            <input v-model="formData.otp" type="number" class="form-control solid" placeholder="Enter OTP">
                                        </div> -->
                                        <div class="text-center">
                                            <button @click.prevent="authenticate" type="submit" class="btn btn-primary btn-block rounded">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
                                    </div>
                                </div>
                                <div class="row" v-if="resError">
                                    <ErrorAlert :message="resError"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ErrorAlert from './ErrorAlert.vue';

export default {
    props: ['resError'],
    components: {
    ErrorAlert,
},
    data: function () {
        return {
            formData: {
                phone: '',
                password: '',
                otp: '',
            }
        }
    },
    methods: {
        authenticate: function (e) {
            const btn = e.target;
            btn.innerText = 'Signing In....';
            btn.setAttribute('disabled', true);
            this.$emit('authenticate', btn, this.formData);
        }
    }
}
</script>

<style>

</style>