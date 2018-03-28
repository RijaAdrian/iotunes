<template>
    <div>
        <div class="header-wrapper u-paddingTop60">
            <h1 class="header-title">
                <BigInput v-on:onTyping="search" v-on:doQuery="doQuery" :currentValue="currentQuery"></BigInput>
            </h1>
        </div>

        <Category></Category>

        <SiteContentLoading v-if="isLoading"></SiteContentLoading>
        <SiteContent v-if="!isLoading" from="bestof"></SiteContent>

    </div>
</template>

<script>
    import Category from './Partials/CategoryComponent.vue'
    import SiteContent from './Partials/SiteContentComponent.vue'
    import SiteContentLoading from './Partials/SiteContentLoadingComponent.vue'
    import BigInput from './Search/InputComponent.vue'

    export default {
        data() {
            return {
                isLoading: true,
                currentQuery: '',
                posts: null
            }
        },
        components: {Category, SiteContent, SiteContentLoading,BigInput},
        mounted() {
            this.currentQuery = this.$router.history.current.query.q ? this.$router.history.current.query.q : ''
            // should use an api
            setTimeout(() => this.isLoading = false, 1000)
        },
        methods: {
            search(value) {
                this.$router.push({
                    query: {
                        'q': value
                    }
                })
            },
            doQuery() {
                //fetch api to get api
            }
        }
    }

</script>
