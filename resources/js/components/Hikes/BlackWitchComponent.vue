<template>
    <section id="hike-raptor" class="container-fluid">
        <div class="row no-gutters row-full-height">
            <div class="col-md-12" id="hike-raptor-background">
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: {
        },
        mounted() {
        }
    }
</script>

<style lang="scss" scoped>

    @import '~@/_variables.scss';

    #hike-raptor {
        padding-right: 0;
        padding-left: 0;
        height: 100%;
    }

    #hike-raptor-background {
        height: 80%;
        background-image: url("/images/desktop_hike_raptor_background.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>