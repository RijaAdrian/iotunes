import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
    strict: true,
    state: {
        user: localStorage.getItem('user') !== "null" ? localStorage.getItem('user') : null,
        facebook: null,
        blogIsLoaded: true
    },
    getters: {
        user(state) {
            return state.user
        },
        facebook(state) {
            return state.facebook
        },
        blogIsLoaded(state) {
            return state.blogIsLoaded
        }
    },
    actions: {
        pushUser(context, user) {
            context.commit('addUser', user)
        },
        async isLoggedIn(context) {
            let response = await axios.get('/isLoggedIn',{}, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                    'Content-Type' : 'application/json'
                },
            })
            if(response.status == 200 && response.data) {
                let user = response.data.length ? response.data : null
                localStorage.setItem('user', user)
                context.commit('addUser', localStorage.getItem('user'))
            }
        },
        pushFacebookData(context, user) {
            context.commit('addFacebookUser', user)
        },
        blogContentLoaded(context, isLoaded) {
            context.commit('blogContentIsLoaded', isLoaded)
        },
        blogIsNotLoaded(context, notLoaded) {
            context.commit('blogContentIsNotLoaded', notLoaded)
        },
        logout(context) {
            localStorage.removeItem('user')
            context.commit('loggout')
        }
    },
    mutations: {
        addUser(state, user) {
            state.user = user
        },
        addFacebookUser(state, user) {
            state.facebook = user
        },
        blogContentIsLoaded(state, isLoaded) {
            state.blogIsLoaded = isLoaded
        },
        blogContentIsNotLoaded(state, isNotLoaded) {
            state.blogIsLoaded = isNotLoaded
        },
        logout(state) {
            state.user = null
        }
    }
})