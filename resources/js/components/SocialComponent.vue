<template>
    <section class="container" id="social">
        <div id="social-title" class="row font-title" >
            <div class="col-md-12">
                Share this hike !
                
            </div>
        </div>
        <div id="social-text" class="row font-text-big">
            <div class="col-md-12">
                Do you like this hike ? Share it on Facebook and Twitter !
                
            </div>
        </div>
        <div id="social-icon" class="row">
            <div class="col-md-12">
                <img class="social-icon" src="/images/facebook.png" alt="Facebook icon">
                <img class="social-icon" src="/images/twitter.png" alt="Twitter icon">
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    #social {
        background-color: $white;
    }

    #social-title {
        padding-top: 75px;
    }
    
    #social-text, #social-icon {
        padding-top: 32px;
    }

    .social-icon {
        width: 32px;
        height: 32px;
        margin-right: 22px;
    }
</style>

<script>
    export default {
        props: {
        },
    }
</script>