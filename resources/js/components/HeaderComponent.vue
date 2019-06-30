<template>
    <nav class="navbar navbar-expand-md">
        <div class="navbar-header">
           <img id="header-logo" src="/images/logo_white.svg" alt="Logo Arbizon">
        </div>
        <button @click="showMenu" class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <img id="header-toggler-icon" src="/images/icon_menu.svg" alt="Toggler icon">
        </button>
        <div class="collapse navbar-collapse" id="header-menu-collapse">
            <ul id="header-menu" class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <router-link class="nav-link" to="/">Home</router-link>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hikes
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <router-link v-for="(hike, index) in hikes" :key="index" 
                                class="dropdown-item dropdown-item-main" :to="'/Hikes/' + hike.hike_path_router">
                            {{ hike.hike_title }}
                        </router-link>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Hidden Menu for responsive -->
        <div ref="menuCollapse" hidden id="menu-collapse">
            <img id="header-logo-collapse" src="/images/logo_black.svg" alt="Logo Arbizon">
            <button @click="hideMenu" type="button" id="header-button-close-collapse">
                <img id="header-toggler-icon-collapse" src="/images/icon_close.svg" alt="Close icon">
            </button>
            <div id="header-menu-collapsed">
                <router-link class="" to="/">
                    <span @click="hideMenu">Home</span>
                </router-link>
                <div class="dropdown" id="header-menu-collapsed-drop">
                    <div>
                        Hikes
                    </div>
                    <router-link v-for="(hike, index) in hikes" :key="index" 
                            class="dropdown-item dropdown-item-collapse" :to="'/Hikes/' + hike.hike_path_router">
                        <span @click="hideMenu">{{ hike.hike_title }}</span>
                    </router-link>
                </div>
                <div id="header-menu-collapsed-adress">
                    123 rue bidon<br/>
                    65000 Aulon<br/>
                    contact@arbizon.fr<br/>
                    +33 7 12 34 56 78<br/>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        props: {
            hikes: Array,
        },
        data:  function () {
            return {
                isDisplayedCollaspe: false,
            }
        },
        methods: {
            showMenu: function() {
                this.$refs.menuCollapse.hidden = false;
                document.documentElement.style.overflow = 'hidden'
            },
            hideMenu: function() {                
                this.$refs.menuCollapse.hidden = true;
                document.documentElement.style.overflow = 'auto'
            },
        }
    }
</script>

<style lang="scss" scoped>
   @import '~@/_variables.scss';

    #header-logo {
        padding-left: 52px;
        padding-top: 52px;
    }

    #header-menu {
        padding-right: 50px;
        padding-top: 50px;
    }

    #header-menu-collapse > ul > li {
        color: $white;
        font-size: 16px;
        font-weight: bold;
        letter-spacing: 0.4px;
        line-height: 19px;
        padding-left: 42px;
    }

    #header-toggler-icon {
        padding-right: 50px;
        padding-top: 50px;
    }
    
    .dropdown-item-main {
        color: $white;
        font-size: 14px;
        letter-spacing: 0.4px;
        line-height: 20px;
        padding: 5px 0;
        text-align: right;
        width: auto;
    }
    
    .dropdown-item-collapse {
        color: $black;
        font-size: 14px;
        letter-spacing: 0.4px;
        line-height: 14px;
        padding: 5px 0;
        width: auto;
    }

    .dropdown-item:hover {
        background-color: rgba(0, 0, 0, 0);
    }

    .dropdown-menu {
        background-color: rgba(0, 0, 0, 0);
        border: 0px;   
    }

    .navbar {
        height: $nav-heigth;
        padding: 0;
        z-index: 1;
    }

    .navbar-toggler {
        border: 0;
        padding: 0;
    }
    
    #header-button-close-collapse:active, 
    #header-button-close-collapse:focus {
        box-shadow: none;
        outline: none !important;
    }

    .nav-link {
        color: $white;
        padding: 0 !important;
    }  

    // NavBar collapse
    .collapsing {
        -webkit-transition: none;
        display: none;
        transition: none;
    }

    #menu-collapse {
        background-color: $white;
        color: $black;
        height: 100vh;
        left: 0;
        overflow: hidden;
        padding-top: -$nav-heigth;
        position: fixed;
        top: 0;
        width: 100vw;
    }

    #header-logo-collapse {
        padding-left: 40px;
        padding-top: 40px;
    }
    
    #header-button-close-collapse {
        background-color: $white;
        border: 0;
        float: right;
    }

    #header-toggler-icon-collapse {
        padding-right: 35px;
        padding-top: 35px;
    }

    #header-menu-collapsed {
        font-size: 36px;
        font-weight: bold; 
        padding-left: 40px;
        padding-top: 50px;
    }

    #header-menu-collapsed-drop {
        padding-top: 20px;
    }

    #header-menu-collapsed-adress {
        bottom: 50px;
        color: $grey;
        font-size: 24px;
        font-weight: 300;
        left: 40px;
        letter-spacing: 0.45px;
        line-height: 37px;
        position: fixed;
        white-space: nowrap;
    }

    // Responsive
    @media (max-width: $breakpoint-smartphone) {
        #header-logo {
            padding-left: 40px;
            padding-top: 0px;
        }
        #header-toggler-icon {
            padding-right: 30px;
            padding-top: 0px;
        }
    }
</style>