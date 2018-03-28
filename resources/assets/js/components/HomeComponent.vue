<template>
    <div>
        <div class="header-wrapper">
            <h1 class="header-title">
                See around & enjoy your visits
            </h1>
        </div>

        <Category v-if="!isLoading"></Category>

        <SiteContentLoading v-if="isLoading"></SiteContentLoading>
        <SiteContent v-if="!isLoading" from="bestof"></SiteContent>

    </div>
</template>

<script>
    import Header from './Permanent/HeaderComponent.vue'
    import Category from './Partials/CategoryComponent.vue'
    import SiteContent from './Partials/SiteContentComponent.vue'
    import SiteContentLoading from './Partials/SiteContentLoadingComponent.vue'

    export default {
        data() {
            return {
                isLoading: false
            }
        },
        components: {Category, SiteContent, SiteContentLoading},
        mounted() {
            //setTimeout(() => this.isLoading = false, 2000)
        }
    }

</script>
