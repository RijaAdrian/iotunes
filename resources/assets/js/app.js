
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue'
import VueRouter from 'vue-router'

import Blog from './components/BlogComponent.vue'
import Jobs from './components/JobsComponent.vue'
import Artwork from './components/ArtworkComponent.vue'
import Home from './components/HomeComponent.vue'
import Login from './components/LoginComponent.vue'
import Register from './components/RegisterComponent.vue'
import Search from './components/SearchComponent.vue'
import Work from './components/WorkComponent.vue'

import axios from 'axios'

/*
* Child component
* */

import BlogChildCategory from './components/Blog/BlogChildCategoryComponent.vue'
import ViewBlogContent from './components/Blog/ViewBlogContentComponent.vue'
import BlogHome from './components/Blog/BlogHomeComponent.vue'

/* End child component */


import uploader from 'vue-simple-uploader'
import store from './store'

Vue.use(uploader)
Vue.use(VueRouter)

init()

const routes = [
    {path: '/', name:'Home', component: Home},
    {path: '/artwork', name:'Artwork', component: Artwork},
    {path: '/jobs', name:'Jobs', component: Jobs},
    {path: '/login', name:'Login', component: Login, beforeEnter: (to, from, next) => {
        if(store.getters.user) {
            next({
                path: '/'
            })
        } else {
            next()
        }
    }},
    {path: '/register', name:'Register', component: Register},
    {path: '/search', name:'Search', component: Search},
    {path: '/notifications', name:'Notifications', component: Home},
    {path: '/profile', name:'Profile', component: Home},
    {path: '/work', name:'Work', component:Work},
    {path: '/blog', component: Blog ,name:'Blog', children: [
        {
            path: '/:category',
            component: BlogChildCategory,
            name: 'Lastest blog'
        },
        {
            path: '/:category/:title',
            component: ViewBlogContent,
            name: 'Content'
        }
    ]},
]

const router = new VueRouter({
    mode: 'history', //mode history du navigateur,
    routes
})

router.beforeEach(async (to, from, next) => {
    document.title = to.name
    document.body.classList.add('render')
    store.dispatch('blogIsNotLoaded', false)
    /*
    if(store.getters.user === null && (from.name != to.name)) {
        await store.dispatch('isLoggedIn')
    }
    */
    //document.head.querySelector('meta[name="dir"]').setAttribute('content', store.getters.user ? store.getters.user.slug : '')
    next()
})

router.afterEach((to, from, next) => {
    document.body.classList.remove('render')
})

new Vue({
    el: '#app',
    store,
    router,
});


//  Activate the tooltips
$('[data-toggle="tooltip"]').tooltip();

$(document).on('scroll', function() {
    var $menu = $('.expend-nav-menu')
    var content = $('#site-content')
    if( Math.ceil($(this).scrollTop()) >= 240 ) {
        $menu.addClass('expend-nav-menu-fixed')
        content.addClass('mt400')
    } else {
        $menu.removeClass('expend-nav-menu-fixed')
        content.removeClass('mt400')
    }
})

function statusChangeCallback(response) {
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
        // Logged into your app and Facebook.
        fetchResponse();
    }
}

function init() {

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1008274552637920',
            cookie     : true,
            xfbml      : true,
            version    : 'v2.12'
        });

        FB.AppEvents.logPageView();
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response)
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

}

function fetchResponse() {
    FB.api('/me?fields=email,first_name,last_name,id', function(response) {
        logginAppFromFacebook(response)
    });
}

function logWithFacebook() {
    FB.login(function(response) {
        if (response.authResponse) {
            FB.api('/me?fields=email,id,first_name,last_name', function(response) {
                logginAppFromFacebook(response)
            });
        }
    });
}

function logginAppFromFacebook(response) {

    if(!response.error) {

        axios.post('/facebook/auth', {
            first_name: response.first_name,
            last_name: response.last_name,
            id: response.id,
            email: response.email,
            location: response.user_location,
            birthday: response.user_birthday
        }, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
                'Content-Type' : 'application/json'
            },
        }).then(response => {
            if(response.data) {
                if(!store.getters.user || store.getters.user.fbid != response.data.fbid) {
                    store.dispatch('pushUser', response.data)
                    store.dispatch('pushFacebookData', response.data)
                }
            }
        }).catch(err => {
            FB.logout()
        })
    } else {
        FB.logout()
    }

}

init()

if(document.getElementById('facebook') !== null) {
    document.getElementById('facebook').addEventListener('click', function(e) {
        e.preventDefault()
        logWithFacebook()
    })
}

document.getElementById('logoutForm').addEventListener('submit', async function(e) {

    e.preventDefault()

    let self = this
    store.dispatch('logout')
    if(store.getters.facebook !== null) {
        await FB.logout(function(response) {
            self.submit()
        })
    } else {
        self.submit()
    }
})

document.body.classList.add('js-loading');

window.addEventListener("load", showPage);

function showPage() {
    document.body.classList.remove('js-loading');
}