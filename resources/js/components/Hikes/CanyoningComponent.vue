<template>
    <section id="hike-raptor">
        <div id="hike-raptor-hero">
            <div id="hike-raptor-hero-content" class="container">
                <div id="hike-raptor-hero-content_difficulty" class="row font-text-small">
                    <div class="col-md-12">
                        A {{ hike.hike_difficulty.toLowerCase() }} hike
                    </div>
                </div>
                <div id="hike-raptor-hero-content_title" class="row font-title-big">
                    <div class="col-md-10">
                        {{ hike.hike_title }}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="hike-raptor-body_intro" class="row font-text-large">
                <div class="col-md-12">
                    <p>
                        The normal route to the Arbizon summit is on the south side, the Aulon Valley.
                        The starting point is the barns of Lurgues, near the village of Aulon,
                        about 1400 m above sea level.
                    </p>
                    <p>
                        Another way of access exists: it takes the valley of the lake of Arou and passes
                        within the Arbizon-Montfaucon circus to climb on the crest by the breach of Aurey…
                    </p>
                </div>
            </div>
            <div id="hike-raptor-body_title" class="row font-title">
                <div class="col-md-12">
                    The most beautiful view of the Pyrénées.
                </div>
            </div>
            <div id="hike-raptor-body_texte" class="row font-text-big">
                <div class="col-md-12">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et accumsan 
                        tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed tempor 
                        tincidunt maximus. Pellentesque eget quam lectus. Curabitur dictum quis augue eu vulputate. 
                        Pellentesque diam velit, tempus nec risus a, accumsan lobortis mi. Sed nec maximus nulla, 
                        eu congue erat. Phasellus tincidunt ligula a arcu lacinia, in fringilla nulla rhoncus. 
                        Sed quis viverra risus. Morbi interdum malesuada dictum. Pellentesque risus sem, fermentum 
                        non felis non, malesuada lobortis lectus. Maecenas mollis augue euismod, sollicitudin ligula a
                        , ornare urna. Proin condimentum malesuada sapien, nec dapibus eros dapibus nec.
                    </p>
                    <p>
                        Fusce ullamcorper dictum porta. Aliquam finibus, erat posuere volutpat elementum, 
                        nulla tellus placerat erat, et accumsan magna elit vel est. Maecenas porttitor mauris 
                        feugiat mi faucibus tristique et vel tortor. Pellentesque habitant morbi tristique senectus et 
                        netus et malesuada fames ac turpis egestas. Quisque diam leo, feugiat eget luctus at, a
                        ccumsan a ipsum. Curabitur laoreet arcu sit amet ligula lobortis lacinia. Vivamus sit amet 
                        sapien non dolor porta porta a eget metus. Phasellus facilisis faucibus lacus, sed 
                        egestas tellus consequat at. Sed tempus fringilla arcu, a varius tellus elementum hendrerit. Morbi 
                        varius semper nunc, id sodales justo pharetra in. Donec vel rutrum enim, eget finibus tortor. 
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum euismod sem et dolor lobortis fringilla.
                    </p>
                    <p>
                        Sed sollicitudin leo sit amet maximus venenatis. Pellentesque malesuada placerat metus, 
                        ut tincidunt nibh maximus sit amet. Maecenas vulputate, magna a ultricies consequat, 
                        metus sem euismod ipsum, quis pellentesque nisl justo a felis. Suspendisse fermentum 
                        ipsum id gravida volutpat. Cras aliquam, leo non vehicula consequat, turpis urna pellentesque nibh, 
                        in dignissim magna augue a odio. Pellentesque eros mauris, aliquam ac facilisis ac, 
                        pharetra quis risus. Nunc luctus risus orci, a imperdiet enim molestie dignissim. 
                        Etiam efficitur sollicitudin interdum. Cras euismod tortor mi, in varius leo posuere cursus. Suspendisse
                        potenti. Sed consectetur pulvinar orci sed ornare..
                    </p>
                </div>
            </div>
        </div>
        <div id="hike-raptor-images" class="container-fluid">
            <div class="row row-no-margin">
                <div class="col-md-6 no-padding hike-raptor-image">
                    <img class="img-fluid image-desktop" src="/images/desktop_section3_background1.jpg" alt="Montain raptor hike">
                    <img class="img-fluid image-mobile" src="/images/mobile_section3_background1.jpg" alt="Montain raptor hike">
                    <span class="label-image">Photo 1 article</span>
                </div>
                <div class="col-md-6 no-padding hike-raptor-image">
                    <img class="img-fluid image-desktop" src="/images/desktop_section3_background2.jpg" alt="Lake raptor hike">
                    <img class="img-fluid image-mobile" src="/images/mobile_section3_background2.jpg" alt="Lake raptor hike">
                    <span class="label-image">Photo 2 article</span>                  
                </div>
            </div>
        </div>
        <social-component></social-component>
        <comments-component></comments-component>
    </section>
</template>

<script>
    import SocialComponent from '../SocialComponent.vue';
    import CommentsComponent from '../CommentsComponent.vue';

    export default {
        props: {
            hike: Object
        },
        components: {
            SocialComponent,
            CommentsComponent
        }
    }
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    #hike-raptor-hero {
        height: 80vh;
        width: 100%;
        background-image: url("/images/desktop_hike_raptor_background.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    #hike-raptor-hero-content {
        padding-top: $nav-heigth + 100px;
        color: $white;
    }

    #hike-raptor-hero-content_title {
        margin-top: 54px;
    }

    #hike-raptor-body_intro {
        color: $grey-dark;
        margin-top: 48px;
    }

    #hike-raptor-body_title {
        margin-top: 30px;
    }
    
    #hike-raptor-body_texte {
        margin-top: 32px;
    }

    #hike-raptor-images {
        padding: 0;
        margin-top: 74px;
    }

    .label-image {
        position: absolute;
        bottom: 70px;
        left: 90px;
        font-size: 54px;
        font-weight: 900;
        letter-spacing: 1.36px;
        line-height: 64px;
        color: $white;
    }

    .image-mobile {
        display: none;
    }

    // Responsive
    @media (max-width: $breakpoint-smartphone) {
        #hike-raptor-hero {
            height: 100vh;
        }
        #hike-raptor-hero-content {
            padding-top: $nav-heigth + 250px;
        }

        #hike-raptor-body_title {
            font-size: 36px;
            font-weight: 900;
            line-height: 40px;
            letter-spacing: 0.2px;
        }

        #hike-raptor-body_intro,
        #hike-raptor-body_texte {
            text-align: justify;
        }

        #hike-raptor-body_texte {
            font-size: 18px;
            letter-spacing: 2px;
        }

        .label-image {
            font-size: 45px;
            left: 30px;
            width: 50%;
            line-height: 50px;
        }

        .image-desktop {
            display: none;
        }

        .image-mobile {
            display: block;
        }
    }
</style>