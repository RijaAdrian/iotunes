<template>
    <div class="page-header" style="background-image: url('/img/antoine-barres.jpg');">
        <div class="filter"></div>
        <div class="container">

            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto card-animated">

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
                        <!--svg v-if="countryList === null" width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-pacman" style="background: none;"><g style="display:block"><circle cx="45.8" cy="50" r="4" fill="#9d8074"><animate attributeName="cx" calcMode="linear" values="95;35" keyTimes="0;1" dur="1" begin="-0.67s" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" calcMode="linear" values="0;1;1" keyTimes="0;0.2;1" dur="1" begin="-0.67s" repeatCount="indefinite"></animate></circle><circle cx="66.2" cy="50" r="4" fill="#9d8074"><animate attributeName="cx" calcMode="linear" values="95;35" keyTimes="0;1" dur="1" begin="-0.33s" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" calcMode="linear" values="0;1;1" keyTimes="0;0.2;1" dur="1" begin="-0.33s" repeatCount="indefinite"></animate></circle><circle cx="86" cy="50" r="4" fill="#9d8074"><animate attributeName="cx" calcMode="linear" values="95;35" keyTimes="0;1" dur="1" begin="0s" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" calcMode="linear" values="0;1;1" keyTimes="0;0.2;1" dur="1" begin="0s" repeatCount="indefinite"></animate></circle></g><g transform="translate(-15 0)"><path d="M50 50L20 50A30 30 0 0 0 80 50Z" fill="#6d4e3e" transform="rotate(13.5 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;45 50 50;0 50 50" keyTimes="0;0.5;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></path><path d="M50 50L20 50A30 30 0 0 1 80 50Z" fill="#6d4e3e" transform="rotate(-13.5 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;-45 50 50;0 50 50" keyTimes="0;0.5;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></path></g></svg-->
                        <h3 class="title" v-if="countryList">Welcome</h3>
                        <form class="register-form form-row" id="login" v-on:submit.prevent="submitLogin" v-if="countryList">
                            <div class="col-md-6 col-xs-12 col-lg-6">
                                <div class="input-group form-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                    <input type="text" id="firstname" class="form-control" placeholder="Prénom" v-model="firstname">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-email-85"></i>
                                    </span>
                                    <input type="email" autocomplete="email" class="form-control" placeholder="Email" v-model="email">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-key-25"></i>
                                    </span>
                                    <input type="password" id="password" class="form-control" placeholder="Mot de passe" v-model="password">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-time-alarm"></i>
                                    </span>
                                    <datepicker v-model=birthdate inputClass="form-control"></datepicker>
                                </div>

                                <div class="input-group form-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-circle-10"></i>
                                    </span>
                                    <select name="genre" id="genre" class="form-control" v-model="sex">
                                        <option value="">Genre</option>
                                        <option value="male">Homme</option>
                                        <option value="female">Femme</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-lg-6">
                                <div class="input-group form-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                    <input type="text" autocomplete="username" class="form-control" placeholder="Nom" v-model="lastname">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-planet"></i>
                                    </span>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Nom d'utilisateur" v-model="username">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-mobile"></i>
                                    </span>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Téléphone" v-model="phone">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-key-25"></i>
                                    </span>
                                    <input type="password" id="password_confirmation" class="form-control" placeholder="Confirmation mot de passe" v-model="password_confirmation">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-globe"></i>
                                    </span>
                                    <select name="country" id="country" class="form-control" v-model="country">
                                        <option value="">Pays</option>
                                        <option :value="c.code" :key="c.code" v-for="c in countryList">{{ c.nom_fr_fr }}</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-block btn-round" id="submit">Inscription</button>
                        </form>
                        <div class="social-line text-center">
                            <h5> Ou ?</h5>
                            <!--div-- class="fb-login-button" data-scope="public_profile,email" data-max-rows="1" data-size="small" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true"></div-->
                            <facebookButton></facebookButton>
                            <a href="#" class="btn btn-neutral btn-google btn-just-icon">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="btn btn-neutral btn-twitter btn-just-icon">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import facebookButton from '../Facebook.vue'
    import datepicker from 'vuejs-datepicker'
    import axios from 'axios'

    export default {
        data() {
            return {
                email: 'cloud0@mail.com',
                password: 'password',
                firstname: 'Rija',
                lastname: 'Andrianaivo',
                phone: '+2610342154380',
                country: '1',
                birthdate: new Date(),
                sex: '',
                password_confirmation: 'password',
                error: {},
                hasError: false,
                username: '',
                countryList: null
            }
        },
        components: {facebookButton, datepicker},
        mounted() {
            this.loadCountry();
        },
        methods: {
            async submitLogin() {
                this.hasError = false
                document.querySelector('.ext-popup-login').classList.remove('hide')
                document.getElementById('submit').setAttribute('disabled','')
                await axios.post('/register', {
                    email: this.email,
                    password: this.password,
                    firstname: this.firstname,
                    lastname: this.lastname,
                    password_confirmation: this.password_confirmation,
                    phone: this.phone,
                    country: this.country,
                    genre: this.sex,
                    username: this.username
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
                    password: (data.password !== undefined) ? data.password[0] : null,
                    firstname: (data.firstname !== undefined) ? data.firstname[0] : null,
                    lastname: (data.lastname !== undefined) ? data.lastname[0] : null,
                    phone: (data.phone !== undefined) ? data.phone[0] : null,
                    sex: (data.genre !== undefined) ? data.genre[0] : null,
                    country: (data.country !== undefined) ? data.country[0] : null,
                    username: (data.username !== undefined) ? data.username[0] : null,
                }
                this.hasError = true
                setTimeout(() => {
                    document.querySelector('.ext-popup-login').classList.add('hide')
                }, 4500)
            },
            async loadCountry() {
                await axios.get('/country', {
                    email: this.email,
                    password: this.password,
                    firstname: this.firstname,
                    lastname: this.lastname,
                    password_confirmation: this.password_confirmation,
                    phone: this.phone,
                    country: this.country,
                    genre: this.sex,
                    username: this.username
                }, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json',
                        'Content-Type' : 'application/json'
                    },
                }).then(response => {
                    this.countryList = response.data
                })
                .catch(err => {

                })
            },
            successLogin(response) {
                this.$store.dispatch('pushUser',response.data)
                window.location.href = '/'
            }
        }

    }
</script>