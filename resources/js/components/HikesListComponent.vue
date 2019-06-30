<template>
    <section v-if="hikes.length">
        <div class="container">
            <div class="row" id="hikes-list-title">
                <h2 class="col-md-12 hike-list-title font-title">Discovers all hikes of Arbizon</h2>
            </div>
        </div>
        <div class="container" id="hikes-list-container">
            <div class="row hikes-list">
                <article class="col-md-4 hike" v-for="(hike, index) in hikes" :key="index">
                    <router-link :to="'/Hikes/' + hike.hike_path_router">
                        <div class="hike-bg" :style='{ backgroundImage: "url(images/" + hike.hike_thumbnail_name + ")"}'>
                            <div class="hike-alpha-on">
                            </div>
                            <div class="hike-labels">
                                <h4 class="font-text-small">{{ hike.hike_difficulty }}</h4>
                                <h3 class="hike-title">{{ hike.hike_title }}</h3>
                            </div>
                        </div>
                    </router-link>
                </article>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "hikes-list-component",
        props: {
            hikes: Array,
        },
        methods: {
        }
    }
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    #hikes-list-title {
        margin-top: 42px;
        padding-bottom: 59px;
    }

    .hike-bg {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 6px;
        color: $white;
        height: 472px;
        margin-bottom: 43px;
    }

    .hike-alpha-on {
        background-color: $black;
        border-radius: 6px;
        height: 100%;
        left: 0;
        opacity: 0.3;
        position: relative;
        top: 0;
        width: 100%;
    }

    .hike-labels {
        left: 20%;
        position: absolute;
        top: 39px;
        width: 70%;
        word-wrap: break-word;
    }

    .hike-title {
        font-size: 32px;
        font-weight: 900;
        letter-spacing: 0.81px;
        line-height: 38px;
    }

    // Responsive
    @media (max-width: $breakpoint-smartphone) {
        #hikes-list-title {
            margin-top: 42px;
            padding-bottom: 30px;
        }
        
        .hike-list-title {
            font-size: 42px;
            font-weight: 900;
            line-height: 40px;
            letter-spacing: 0.4px;
        }

        #hikes-list-container {
            padding-right: 0;
            // padding-left: 55px;
            overflow: hidden;
        }

        .hike-alpha-on {
            width: 60vw;
        }

        .hikes-list {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
                    flex-direction: row !important;
            flex-wrap: nowrap !important;
            overflow: scroll;
        }

        .hike-bg {
            height: 350px;
        }
    }
</style>