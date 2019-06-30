/*jshint esversion: 6 */

// -- IMPORTS --
import VueRouter from 'vue-router';
import Vue from 'vue';
import bootstrap from './bootstrap.js';

// Components
import MainComponent from './components/MainComponent.vue';
import HomeComponent from './components/HomeComponent.vue';

// Hikes
import HikeRaptorComponent from './components/Hikes/HikeRaptorComponent.vue';
import WaterfallComponent from './components/Hikes/WaterfallComponent.vue';
import PreacherComponent from './components/Hikes/PreacherComponent.vue';
import CanyoningComponent from './components/Hikes/CanyoningComponent.vue';
import BlackWitchComponent from './components/Hikes/BlackWitchComponent.vue';
import KidsComponent from './components/Hikes/KidsComponent.vue';

// List hike component add to the app
const hikeComponents = {
    HikeRaptorComponent,
    WaterfallComponent,
    PreacherComponent,
    CanyoningComponent,
    BlackWitchComponent,
    KidsComponent,
};

// Array of all the mapping path -> Component
// Dynamic check component
const validateHikes = [];
const routes = [];
for (let i = 0; i < hikes.length; i++) {
    if (hikeComponents[hikes[i].hike_component]) {
        routes.push({
            path: '/Hikes/' + hikes[i].hike_path_router,
            component: hikeComponents[hikes[i].hike_component],
            props: { hike: hikes[i] }
        });
        validateHikes.push(hikes[i]);
    }
}
// Add home path
routes.push({ 
    path: '/',
    component: HomeComponent,
    props: { lastHike: validateHikes[0] === undefined ? null : validateHikes[0] },
});

// Map router to Vue
Vue.use(VueRouter);

// Create the VueRouter
const router = new VueRouter({
    routes,
    mode: 'history', // Url without /#/
    scrollBehavior(to, from, savedPosition) {
        return { x: 0, y: 0 };
    }
});

// Create the Vue app with the router
const vue = new Vue({
    router,
    el: '#app',
    data: {
        hikes: validateHikes
    },
    template: `
        <main-component v-bind:hikes="hikes"></main-component>
    `,
    components: {
        MainComponent,
    },
});
