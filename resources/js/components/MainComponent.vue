<template>
    <div id="main">
        <header-component
            v-bind:hikes="hikes">
        </header-component>
        <div id="current-view"><router-view/></div>
        <hikes-list-component
            v-bind:hikes="hikes">
        </hikes-list-component>
        <footer-component></footer-component>
    </div>
</template>

<script>
    import HeaderComponent from './HeaderComponent.vue';
    import FooterComponent from './FooterComponent.vue';
    import HikesListComponent from './HikesListComponent.vue';

    export default {
        props: {
            hikes: Array,
        },
        components: {
            HeaderComponent,
            FooterComponent,
            HikesListComponent
        },
    }
</script>

<style lang="scss">
    @import '~@/_variables.scss';

    #main {
        height: 100%;
        font-family: $mainFont;
    }

    #current-view {
        margin-top: -$nav-heigth;
    }

</style>