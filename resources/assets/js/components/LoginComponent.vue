<template>
    <div class="page-header" style="background-image: url('/img/antoine-barres.jpg');background-attachment: fixed;">
        <div class="filter"></div>
        <div class="container">

            <div class="row">
                <div class="col-lg-4 ml-auto mr-auto">

                    <div class="card card-register ext-card-login" style="position:relative;">
                        <div class="alert alert-danger alert-with-icon ext-popup-login" data-notify="container" v-show="hasError">
                            <div class="container">
                                <div class="alert-wrapper">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <div class="message">
                                        <p v-for="err in error">
                                            {{ err }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="title">Welcome</h3>
                        <div class="social-line text-center">
                            <!--div-- class="fb-login-button" data-scope="public_profile,email" data-max-rows="1" data-size="small" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true"></div-->
                            <facebookButton></facebookButton>
                            <a href="#" class="btn btn-neutral btn-google btn-just-icon">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="btn btn-neutral btn-twitter btn-just-icon">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                        <form class="register-form" id="login" v-on:submit.prevent="submitLogin">
                            <label>Email</label>
                            <input type="text" autocomplete="username" class="form-control" placeholder="Email" v-model="email">
                            <label>Password</label>
                            <input type="password" autocomplete="current-password" class="form-control" placeholder="Password" v-model="passwrd">
                            <button class="btn btn-danger btn-block btn-round" id="submit">Register</button>
                        </form>
                        <div class="forgot">
                            <router-link to="/password-reset" class="btn btn-link btn-danger">Forgot password?</router-link>
                            <router-link to="/register" class="btn btn-link btn-danger">Create account</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

    import axios from 'axios'
    import facebookButton from '../Facebook.vue'

    export default {
        data() {
          return {
              email: 'cloud0@mail.com',
              passwrd: 'password',
              error: {},
              hasError: false
          }
        },
        components: {facebookButton},
        computed: {
            year() {
                return new Date().getFullYear()
            }
        },
        methods: {
            async submitLogin() {
                this.hasError = false
                document.querySelector('.ext-popup-login').classList.remove('hide')
                document.getElementById('submit').setAttribute('disabled','')
                await axios.post('/login', {
                    email: this.email,
                    password: this.passwrd
                }, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json',
                        'Content-Type' : 'application/json'
                    },
                }).then(response => {
                    this.successLogin(response)
                    document.getElementById('submit').removeAttribute('disabled')
                })
                .catch(err => {
                    this.openErrorPopup(err.response.data)
                    document.getElementById('submit').removeAttribute('disabled')
                })
            },
            openErrorPopup(data) {
                this.error = {
                    email:  (data.email !== undefined) ? (data.email.length > 1) ? data.email : data.email[0] : null,
                    password: (data.password !== undefined) ? data.password[0] : null
                }
                this.hasError = true
                setTimeout(() => {
                    document.querySelector('.ext-popup-login').classList.add('hide')
                }, 4500)
            },
            successLogin(response) {
                this.$store.dispatch('pushUser',response.data)
                window.location.href = '/'
            }
        }
    }
</script>