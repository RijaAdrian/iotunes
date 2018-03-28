<!doctype html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Barlow:400,500,800" rel="stylesheet">

    <title>IOTunes Dev</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/all.css') }}">

    <meta name="dir" content="{{ \Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->slug : '' }}">
</head>

<body>
<!--div-- class="loading">
    <svg width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-pacman" style="background: none;"><g style="display:block"><circle cx="45.8" cy="50" r="4" fill="#9d8074"><animate attributeName="cx" calcMode="linear" values="95;35" keyTimes="0;1" dur="1" begin="-0.67s" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" calcMode="linear" values="0;1;1" keyTimes="0;0.2;1" dur="1" begin="-0.67s" repeatCount="indefinite"></animate></circle><circle cx="66.2" cy="50" r="4" fill="#9d8074"><animate attributeName="cx" calcMode="linear" values="95;35" keyTimes="0;1" dur="1" begin="-0.33s" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" calcMode="linear" values="0;1;1" keyTimes="0;0.2;1" dur="1" begin="-0.33s" repeatCount="indefinite"></animate></circle><circle cx="86" cy="50" r="4" fill="#9d8074"><animate attributeName="cx" calcMode="linear" values="95;35" keyTimes="0;1" dur="1" begin="0s" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" calcMode="linear" values="0;1;1" keyTimes="0;0.2;1" dur="1" begin="0s" repeatCount="indefinite"></animate></circle></g><g transform="translate(-15 0)"><path d="M50 50L20 50A30 30 0 0 0 80 50Z" fill="#6d4e3e" transform="rotate(13.5 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;45 50 50;0 50 50" keyTimes="0;0.5;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></path><path d="M50 50L20 50A30 30 0 0 1 80 50Z" fill="#6d4e3e" transform="rotate(-13.5 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;-45 50 50;0 50 50" keyTimes="0;0.5;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></path></g></svg>
</div-->
<noscript>Please enable JavaScript to view the Page</noscript>
<div id="app" data-base="{{ url('/') }}">
    <nav class="navbar navbar-expand-md fixed-top extend-top-menu" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right navbar-burger z-7" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                <router-link class="navbar-brand" to="/">
                <!--svg-- xmlns="http://www.w3.org/2000/svg" viewBox="0 0 404.31 88.02" style="width:80px;fill: #d88d16;">
                    <title>IOTunes</title>
                    <g id="Calque_2" data-name="Calque 2">
                        <g id="Calque_1-2" data-name="Calque 1">
                            <path class="cls-1" d="M0,86.53Q1.22,65.1,2,42.58T2.74,8.16L2.69,1.5l8.53.12L19,1.5q-2.09,32.76-2.65,85l-7.5-.13C7.63,86.4,4.66,86.45,0,86.53Z"/><path class="cls-1" d="M70.23,0A42.23,42.23,0,0,1,84.82,2.55a32,32,0,0,1,12.41,8.32,38.45,38.45,0,0,1,8.16,13.43,52.62,52.62,0,0,1,2.76,17.87,63.84,63.84,0,0,1-2.61,18.35A40.25,40.25,0,0,1,97.48,75.6,33.24,33.24,0,0,1,84.19,85,45.68,45.68,0,0,1,52,85.22a32.73,32.73,0,0,1-13-8.78A35.45,35.45,0,0,1,31.29,62.7a57.55,57.55,0,0,1-2.35-16.79A61.16,61.16,0,0,1,31.87,27,38.23,38.23,0,0,1,40.5,12a37.77,37.77,0,0,1,13.32-9A43.82,43.82,0,0,1,70.23,0Zm-.82,13.27A21.57,21.57,0,0,0,56,17.6a26.24,26.24,0,0,0-8.6,11.83A45,45,0,0,0,44.5,45.66a39,39,0,0,0,2.79,14.92A21.31,21.31,0,0,0,55.83,71a23.27,23.27,0,0,0,12.46,3.58,22.77,22.77,0,0,0,9.64-2.12A21.09,21.09,0,0,0,85.87,66a29.88,29.88,0,0,0,5-10.43,47.71,47.71,0,0,0,1.68-12.71A46.12,46.12,0,0,0,91.08,31a27.28,27.28,0,0,0-4.67-9.75,19.56,19.56,0,0,0-7.63-6A23,23,0,0,0,69.41,13.27Z"/><path class="cls-1" d="M132.7,86.53l1.11-18.19,1.12-27.1.71-26.66h-3.56l-3.32.06-3.16.06-11.77.44q.4-9,.46-13.64,14.7.12,30.77.12l18.31-.06,9.8-.06q-.51,8.87-.51,13.64-9.24-.57-17.71-.56H151L150.41,26l-1.47,43.78-.1,7.34c0,3-.05,6.18-.05,9.45L141,86.4C140.17,86.4,137.4,86.45,132.7,86.53Z"/><path class="cls-1" d="M229.83,86.53c-3-.08-5.3-.13-6.9-.13-2,0-4.29,0-6.84.13l.09-10.34q-1.43,2.61-2.5,4.2a16.57,16.57,0,0,1-2.8,3.12,14.67,14.67,0,0,1-3.78,2.43A25.88,25.88,0,0,1,196.84,88a22.86,22.86,0,0,1-10-2,15.53,15.53,0,0,1-6.71-6.14q-2.48-4.11-2.47-11.77V66.78l.83-16.07.77-21.18c0-1.7.05-3.82.05-6.36q4.84.13,7.6.13c1.93,0,4.28,0,7-.13l-1.7,28.41c-.1,2.2-.18,4.06-.23,5.58s-.07,2.6-.07,3.27a21.65,21.65,0,0,0,1.09,7.44,8.43,8.43,0,0,0,3.83,4.52A11.53,11.53,0,0,0,202.74,74a12,12,0,0,0,5.61-1.38,12.22,12.22,0,0,0,4.11-3.48A19.38,19.38,0,0,0,215.34,63a37.67,37.67,0,0,0,1.32-7.6q.36-3.42.67-11.77.42-10.1.58-20.5,5.06.13,7.72.13,3,0,6.79-.13-.61,8.91-1.27,22.28t-.92,22Q230,76.19,229.83,86.53Z"/><path class="cls-1" d="M242.12,86.53q1.17-14.15,1.95-31.77T245,23.17c3.13.09,5.64.13,7.51.13,2.21,0,4.57,0,7-.13L259,33.76a49.08,49.08,0,0,1,2.79-4.36,18.81,18.81,0,0,1,3.06-3.17,16.91,16.91,0,0,1,4-2.5,24.09,24.09,0,0,1,4.75-1.49,26.48,26.48,0,0,1,5.49-.56,27.24,27.24,0,0,1,8.7,1.4,14.68,14.68,0,0,1,6.71,4.45,15.7,15.7,0,0,1,3.37,6.67,34.93,34.93,0,0,1,.82,7.66c0,1.12-.05,2.91-.16,5.36l-1,27.22q-.2,5.67-.25,12.09c-2.69-.08-5-.13-6.9-.13-2.59,0-5.2,0-7.82.13q.4-5.41,1-18.91t.62-17.85a20.48,20.48,0,0,0-1.28-7.91,9.31,9.31,0,0,0-3.95-4.54,11.3,11.3,0,0,0-5.79-1.56,11.89,11.89,0,0,0-5.71,1.43,13.53,13.53,0,0,0-4.59,4.17,21.17,21.17,0,0,0-3.16,6.92q-1.17,4.36-1.73,14.39-.53,8.91-.83,23.86c-2.62-.08-5-.13-7.1-.13S245.19,86.45,242.12,86.53Z"/><path class="cls-1" d="M355.73,72.39q-.68,3.67-1.89,13.2a80.45,80.45,0,0,1-9.29,1.94,58.47,58.47,0,0,1-7.61.49,41.11,41.11,0,0,1-12-1.61,20.71,20.71,0,0,1-9.27-6,26.81,26.81,0,0,1-5.87-10.61A45.91,45.91,0,0,1,308,56.66a50.7,50.7,0,0,1,2.19-14.85,32,32,0,0,1,6.15-11.76,22.15,22.15,0,0,1,9-6.47,29.69,29.69,0,0,1,10.56-1.9,30.92,30.92,0,0,1,9.9,1.58,18.06,18.06,0,0,1,7.89,5.2,24.83,24.83,0,0,1,4.9,8.67,35.16,35.16,0,0,1,1.71,11.29,37.38,37.38,0,0,1-.51,6l-37.41.06c-.07,1.54-.1,2.76-.1,3.67a24,24,0,0,0,1.17,7.67,16.17,16.17,0,0,0,3.42,5.92,13.76,13.76,0,0,0,5.36,3.58,17.51,17.51,0,0,0,6.12,1.15,34.69,34.69,0,0,0,7.63-.93A70.54,70.54,0,0,0,355.73,72.39Zm-33-25.17,23.88.06c0-2-.05-3.45-.15-4.4a18.59,18.59,0,0,0-.69-3.26,12.24,12.24,0,0,0-1.45-3.23,9.39,9.39,0,0,0-2.15-2.32,9,9,0,0,0-2.83-1.43,11.65,11.65,0,0,0-3.45-.5,11.12,11.12,0,0,0-4.16.81,12.3,12.3,0,0,0-3.7,2.36,13.5,13.5,0,0,0-2.73,3.47,19.15,19.15,0,0,0-1.55,3.7A45.33,45.33,0,0,0,322.76,47.22Z"/><path class="cls-1" d="M366.6,85.35l-1.13-13.71A50.36,50.36,0,0,0,374,75.1a24.05,24.05,0,0,0,6.38,1,12.63,12.63,0,0,0,4.9-.84,6.06,6.06,0,0,0,3-2.49,6.78,6.78,0,0,0,1-3.46,8.61,8.61,0,0,0-.13-1.49,6.58,6.58,0,0,0-.46-1.43,9.55,9.55,0,0,0-.77-1.41,13.48,13.48,0,0,0-1.2-1.49c-.51-.56-1.24-1.28-2.19-2.15l-2.76-2.68q-4-3.79-6.07-6a27.55,27.55,0,0,1-3.52-4.45,19.16,19.16,0,0,1-2.17-4.8,18.31,18.31,0,0,1-.74-5.14,17.7,17.7,0,0,1,2.27-8.66,13.57,13.57,0,0,1,6.61-6,25.21,25.21,0,0,1,10.21-1.9,72.27,72.27,0,0,1,15.41,1.93l.66,13a25.66,25.66,0,0,0-11.38-2.93,16.84,16.84,0,0,0-5.18.72,5.78,5.78,0,0,0-3.19,2.18,5.86,5.86,0,0,0-1,3.27A7.1,7.1,0,0,0,383.9,42,7.82,7.82,0,0,0,385,44.11a15.15,15.15,0,0,0,1.76,2.11q1,1,4.16,3.93c2.11,2,4,3.72,5.54,5.29a28.4,28.4,0,0,1,3.9,4.77,20.11,20.11,0,0,1,2.35,5.14,19.46,19.46,0,0,1,.82,5.54,16.81,16.81,0,0,1-2.35,8.66,15.74,15.74,0,0,1-7.09,6.23A24.52,24.52,0,0,1,383.44,88a56.13,56.13,0,0,1-7.45-.59A61.75,61.75,0,0,1,366.6,85.35Z"/>
                        </g>
                    </g>
                </svg-->
                <img src="{{ asset('img/dadigo.png') }}" alt="Dadigo">
            </router-link>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto ">
                    @if(\Illuminate\Support\Facades\Auth::guest())
                    <li class="nav-item" v-if="!$store.getters.user">
                        <router-link to="/artwork" class="nav-link">Artwork</router-link>
                    </li>
                    <li class="nav-item" v-if="!$store.getters.user">
                        <router-link to="/jobs" class="nav-link">Jobs</router-link>
                    </li>
                    <li class="nav-item" v-if="!$store.getters.user">
                        <router-link to="/blog" class="nav-link">Blog</router-link>
                    </li>
                    <li class="nav-item" v-if="!$store.getters.user">
                        <router-link to="/forum" class="nav-link">Communauté</router-link>
                    </li>
                    <li class="nav-item" v-if="!$store.getters.user">
                        <router-link to="/register" class="btn btn-outline-primary btn-round">Inscrivez-vous !</router-link>
                    </li>
                    <li class="nav-item" v-if="!$store.getters.user">
                        <router-link to="/login" class="nav-link">Connexion !</router-link>
                    </li>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item">
                            <router-link to="/work" class="nav-link">Vos oeuvres</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/jobs" class="nav-link">Offre d'emploi</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/blog" class="nav-link">Actus</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/forum" class="nav-link">Communauté</router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link mt7" to="/search" data-toggle="tooltip" data-placement="bottom" data-original-title="Search and filter content"><i class="nc-icon nc-zoom-split" aria-hidden="true"></i></router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link mt7" to="/notifications"><i class="nc-icon nc-email-85" aria-hidden="true"></i></router-link>
                        </li>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mt7" data-toggle="dropdown" href="#pk" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-single-02" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                <?php
                                $position = Location::get();
                                ?>
                                <li class="dropdown-header" href="#pk">
                                    Welcome <?php echo \Illuminate\Support\Facades\Auth::user()->firstname ?>
                                </li>
                                <router-link :to="{ path: 'profile', query: { id: '<?php echo \Illuminate\Support\Facades\Auth::id() ?>' } }" class="dropdown-item">Profile</router-link>
                                <router-link :to="{ path: 'settings', query: { id: '<?php echo \Illuminate\Support\Facades\Auth::id() ?>' } }" class="dropdown-item">Settings</router-link>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                    {{ csrf_field() }}
                                    <button class="dropdown-item" class="btn btn-neutral" type="submit">
                                        <i class="nc-icon nc-user-run"></i> Loggout
                                    </button>
                                </form>
                            </ul>
                        </div>
                    @else

                        <li class="nav-item" v-show="$store.getters.user">
                            <router-link to="/jobs" class="nav-link">Offre d'emploi</router-link>
                        </li>
                        <li class="nav-item" v-show="$store.getters.user">
                            <router-link to="/work" class="nav-link">Vos oeuvres</router-link>
                        </li>
                        <li class="nav-item" v-show="$store.getters.user">
                            <router-link to="/blog" class="nav-link">Actus</router-link>
                        </li>
                        <li class="nav-item" v-show="$store.getters.user">
                            <router-link to="/forum" class="nav-link">Communauté</router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link mt7" to="/search" data-toggle="tooltip" data-placement="bottom" data-original-title="Search and filter content"><i class="nc-icon nc-zoom-split" aria-hidden="true"></i></router-link>
                        </li>
                        <li class="nav-item active" v-show="$store.getters.user">
                            <router-link class="nav-link mt7" to="/notifications"><i class="nc-icon nc-email-85" aria-hidden="true"></i></router-link>
                        </li>
                        <div class="nav-item dropdown" v-show="$store.getters.user">
                            <a class="nav-link dropdown-toggle mt7" data-toggle="dropdown" href="#pk" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-single-02" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                <?php
                                $position = Location::get();
                                ?>
                                <li class="dropdown-header" href="#pk" >
                                    Welcome
                                    <span :bind="$store.getters.user ? $store.getters.user.firstname : ''"></span>
                                </li>
                                <router-link :to="{ path: 'profile', query: { id: $store.getters.user ? $store.getters.user.id : '' } }" class="dropdown-item">Profile</router-link>
                                <router-link :to="{ path: 'settings', query: { id: $store.getters.user ? $store.getters.user.id : '' } }" class="dropdown-item">Settings</router-link>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                    {{ csrf_field() }}
                                    <button class="dropdown-item" class="btn btn-neutral" type="submit">
                                        <i class="nc-icon nc-user-run"></i> Loggout
                                    </button>
                                </form>
                            </ul>
                        </div>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div id="wrapper">
        <transition name="fade" mode="out-in">
            <router-view></router-view>
        </transition>
    </div>

    <!--div id="disqus_thread"></div-->

    <footer class="footer z-7">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li><router-link to="{{ url('/') }}">IOTunes Dev</router-link></li>
                        <li><router-link to="{{ url('/blog') }}">Blog</router-link></li>
                        <li><router-link to="{{ url('/jobs') }}">Jobs</router-link></li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                        © 2018, All right reserved by IOTunes Dev
                    </span>
                </div>
            </div>
        </div>
    </footer>

</div>

</body>

<script src="{{ mix('js/all.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>

<script>

    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    /*
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://ddc-1.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
    */
</script>

<!-- Social plugins -->
