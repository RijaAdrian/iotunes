<script>
    import BlogCategory from './Blog/BlogCategoryComponent.vue'

    export default {
        components: {BlogCategory},
        data() {
            return {
                currentParams : '',
                isLoading: true
            }
        },
        mounted() {

        }
    }
</script>

<template>
    <div>
        <div class="header-wrapper bg-blog" v-if="!$store.getters.blogIsLoaded">
            <h1 class="header-title">
                We are sharing a lot of thing
            </h1>
        </div>
        <div class="top240 mt-20 pt-4 z-7 section-white">
            <router-view></router-view>
        </div>
    </div>
</template>