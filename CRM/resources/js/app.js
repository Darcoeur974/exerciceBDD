/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

import Vue from 'vue';
import Vuetify from 'vuetify/lib';

import Routes from './route.js';
import Layout from './layouts/Layout.vue';

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    router: Routes,
    components: { Layout }
});

export default app;