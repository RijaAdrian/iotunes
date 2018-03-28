<template>
    <nav class="navbar navbar-expand-md expend-nav-menu">
        <div class="container">
            <div class="">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item">
                        <router-link to="/blog/graphic-design" class="nav-link active">Graphic Design</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/blog/illustration" class="nav-link active">Illustration</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/blog/web" class="nav-link active">Web</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/blog/photography" class="nav-link active">Photography</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    //TODO: fetch api to get all category
    //TODO: faire une boucle sur les category avec v-for pour pouvoir faire une comparaison class sur leur valeur
    export default {
        props: {
            params: String
        }
    }
</script>