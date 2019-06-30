<template>
    <footer class="container">
        <div class="row" id="footer">
            <div class="col-md-8 footer-col" id="footer-logo">
                <img src="/images/logo_black.svg" alt="Logo Arbizon">
            </div>
            <div class="col-md-2 footer-col" id="footer-site-map">
                <h5 class="footer-title">
                    Sitemap
                </h5>
                <div class="footer-element" id="footer-site-map-element">
                    <p>Home</p>
                    <p>Discover</p>
                    <p>Hikes</p>
                </div>
            </div>
            <div id="footer-contact" class="col-md-2 footer-col">
                <h5 class="footer-title">
                    Contact
                </h5>
                <div class="footer-element" id="footer-adress">
                    123 rue bidon<br/>
                    65000 Aulon<br/>
                    contact@arbizon.fr<br/>
                    +33 7 12 34 56 78<br/>
                </div>
            </div>
        </div>
    </footer>
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
 
    #footer {
        background-color: $white;
        height: 327px;
        margin-top: 70px;
    }

    #footer-logo {
        padding-left: 24px;
    }
    
    #footer-site-map-element > p {
        margin-bottom: 9px;
    }
    
    #footer-adress {
        font-size: 18px;
        letter-spacing: 0.45px;
        line-height: 30px;
        white-space: nowrap;
    }

    .footer-title {
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 0.45px;
        line-height: 21px;
    }

    .footer-element {
        color: $grey;
    }

    @media (max-width: $breakpoint-smartphone) {
        #footer-logo {
            padding-left: 14px;
        }
        #footer-site-map {
            margin-top: 45px;
        }
        #footer-contact {
            margin-top: 30px;
            padding-bottom: 60px;
        }
    }

</style>