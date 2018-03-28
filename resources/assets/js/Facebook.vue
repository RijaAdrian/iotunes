<template>
    <a id="facebook" class="btn btn-neutral btn-facebook btn-just-icon">
        <i class="fa fa-facebook-f"></i>
    </a>
</template>

<script>

    import axios from 'axios'

    export default {
        mounted() {
            let self = this
            document.getElementById('facebook').addEventListener('click', function(e) {
                FB.login(function(response) {
                    if (response.authResponse) {
                        FB.api('/me?fields=email,id,first_name,last_name', function(response) {
                            if(!response.error) {

                                axios.post('/facebook/auth', {
                                    first_name: response.first_name,
                                    last_name: response.last_name,
                                    id: response.id,
                                    email: response.email,
                                    location: response.user_location,
                                    birthday: response.user_birthday,
                                    type: 'facebook'
                                }, {
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest',
                                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                        'Accept': 'application/json',
                                        'Content-Type' : 'application/json'
                                    },
                                }).then(response => {
                                    if(response.data) {
                                        self.$store.dispatch('pushUser', response.data)
                                        self.$store.dispatch('pushFacebookData', response.data)
                                        window.location.href = '/'
                                    }
                                }).catch(err => {
                                    FB.logout()
                                })
                            } else {
                                FB.logout()
                            }
                        });
                    }
                });
            })
        }
    }
</script>