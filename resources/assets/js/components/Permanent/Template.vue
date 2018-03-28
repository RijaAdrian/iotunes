<template>
    <div>
        <headr></headr>
        <div id="wrapper">
            <transition name="fade" mode="out-in">
                <router-view></router-view>
            </transition>
        </div>
        <footr></footr>
    </div>
</template>
<script>
    import headr from './HeaderComponent.vue'
    import footr from './FooterComponent.vue'
    export default {
        components: {headr,footr}
    }
</script>