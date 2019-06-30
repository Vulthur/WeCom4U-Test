<template>
    <section id="home">
        <!-- TOP -->
        <div id="home-hero">
            <div id="home-hero-content" class="container">
                <div id="home-hero-content_text" class="row font-text-small">
                    <div class="col-md-12">
                        Mountains worthy of Tolkien's stories
                    </div>
                </div>
                <div id="home-hero-content_title" class="row font-title-big">
                    <div class="col-md-12">
                        Discover Arbizon.
                    </div>
                </div>
                <div @click="scrollToArbizon" id="home-hero-content_link" class="row font-link">
                    <div class="col-md-12">
                        Interested? Let’s go!
                    </div>
                </div>
            </div>
        </div>
        <!-- INTRODUCTION -->
        <div id="home-arbizon" ref="arbizon">
            <div id="home-arbizon-content" class="container">
                <div id="home-arbizon-content_description" class="row font-text-medium">
                    <div class="col-md-5">
                        The Adour of Payolle is born on its northern slope.
                    </div>
                </div>
                <div id="home-arbizon-content_title" class="row font-title">
                    <div class="col-md-7">
                        The most beautiful view of the Pyrénées.
                    </div>
                </div>
                <div id="home-arbizon-content_text" class="row font-text-large">
                    <div class="col-md-6">
                        <p>
                            The Arbizon (2,831 m) is the highest point of the Arbizon massif in the Hautes-Pyrénées.
                            It is located east of the Néouvielle massif, between the Aure valley to the east,
                            and the Campan valley to the north.
                        </p>
                        <p>
                            From a geological point of view, the peak of the Arbizon lies at the contact between the
                            granitic massif of Neouvielle (pluton) and the various shales and marls of the Carboniferous.
                        </p>
                        <p>
                            Thus, it is located in the halo of metamorphism caused by the rise of magma within the continental
                            lithosphere, during the various movements of orogenesis that the region has known.
                            Its geological wealth is known to the greatest number: one can find there particular minerals,
                            resulting from the partial recrystallization of the schistose country, such as garnets, axinite,
                            vesuvianite, etc.
                        </p>               
                    </div>
                </div>
            </div>
        </div>
        <!-- PARALLAX -->
        <div id="home-parallax">
        </div>
        <!-- LAST HIKE -->
        <div v-if="lastHike" id="home-last-hike" class="container">
            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid" id="home-last-hike_image" 
                        v-bind:src="'images/' + lastHike.hike_thumbnail_name" alt="Last hike image">
                </div>
                <div class="col-md-7">
                    <div id="home-last-hike_difficulty" class="font-text-medium">
                        A {{ lastHike.hike_difficulty }} hike
                    </div>
                    <div id="home-last-hike_title" class="font-title">
                       {{ lastHike.hike_title }}
                    </div>
                    <div id="home-last-hike_text" class="font-text-large">
                        <p>
                            The normal route to the Arbizon summit is on the south side, the Aulon Valley.
                            The starting point is the barns of Lurgues, near the village of Aulon,
                            about 1400 m above sea level.
                        </p>
                        <p>
                            Another way of access exists: it takes the valley of the lake of Arou
                            and passes within the Arbizon-Montfaucon circus to climb on the crest by the breach of Aurey…
                        </p>
                    </div>  
                    <div class="font-link" id="home-last-hike_link">
                       <router-link to="/Hikes/HikeRaptor">Discover this hike !</router-link>
                    </div>
                </div>
            </div>
            <div id="home-text-image" class="row font-text-medium">
               <div class="col-md-12">
                   The most beautiful view of the Pyrénées
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: {
            lastHike: Object,
        },
        methods:  {
            scrollToArbizon: function() {
                $('html, body').animate(
                    {scrollTop: this.$refs.arbizon.offsetTop},
                    'slow'
                );
            },
        }
    }
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    // TOP
    #home-hero {
        background-image: url("/images/desktop_hero_background.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
        width: 100%;
    }

    #home-hero-content {
        color: $white;
        padding-top: $nav-heigth + 100px;
    }

    #home-hero-content_title {
        margin-top: 54px;
        width: 274px;
    }

    #home-hero-content_link {
        border-bottom: 4px solid $orange;
        margin-left: 0;
        margin-top: 54px;
        padding-bottom: 16px;
        padding-left: 0;
        padding-right: 0;
        width: 235px;
    }

    // INTRODUCTION
    #home-arbizon {
        background-image: url("/images/desktop_section1_background.svg");
        background-position: right top;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
    }

    #home-arbizon-content_description {
        color: $orange;
        padding-top: 177px;
    }

    #home-arbizon-content_title {
        color: $black;
        padding-right: 31px;
        padding-top: 40px;
    }

    #home-arbizon-content_text {
        color: $grey-dark;
        padding-top: 69px;
    }

    // PARALLAX
    #home-parallax {
        background-attachment: fixed;
        background-image: url("/images/desktop_parallax_background.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 70vh;
        margin-bottom: 82px;
        width: 100%;
    }

    // LAST HIKE
    #home-last-hike_difficulty {
        color: $orange;
        margin-top: 45px;
    }

    #home-last-hike_title {
        margin-top: 42px;
    }

    #home-last-hike_text {
        color: $grey-dark;
        margin-top: 33px;
    }

    #home-last-hike_link {
        border-bottom: 4px solid $orange;
        color: inherit;
        margin-top: 42px;
        padding-bottom: 16px;
        text-decoration: none !important;
        width: 217px;
    }

    #home-text-image {
        color: $orange;
        margin-top: 83px;
    }
    
    // Responsive
    @media (max-width: $breakpoint-smartphone) {
        #home-arbizon {
            background-image: url("/images/desktop_section1_background.svg");
            background-position: top -156px right 0;
            background-repeat: no-repeat;
            background-size: 320px 293px;
            height: auto;
            width: 100%;
        }
        #home-text-image {
            margin-top: 60px;
        }
        #home-last-hike_title {
            font-size: 38px;
            font-weight: 900;
            letter-spacing: 0.4px;
            line-height: 40px;
        }
    }

    @media (max-height: $breakpoint-tablet) {
        #home-arbizon {
            height: auto;
        }
    }
</style>