/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

import Vue from 'vue';
import VueRouter from 'vue-router'
import App from './components/App.vue';
import Entsorgung from "./components/Entsorgung.vue";
import Impressum from "./components/Impressum.vue";
import Transporte from "./components/Transporte.vue";
import Umzüge from "./components/Umzüge.vue";
import Pdm from "./components/Pdm.vue";

import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
library.add(faUserSecret)

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.config.productionTip = false
Vue.use(VueRouter)
const router = new VueRouter({  
    mode:'history',
    routes: [
        { 
                name: "PDM",
                path: '/', 
                component:  Pdm,
                props: true,
        },
        { 
                name: "Entsorgung",
                path: '/Entsorgung', 
                component:  Entsorgung,
                props: true,
        },
        { 
                name: "Transport",
                path: '/Transport', 
                component:  Transporte,
                props: true,
        },
        { 
                name: "Impressum",
                path: '/Impressum', 
                component:  Impressum,
                props: true,
        },
        { 
                name: "Umzug",
                path: '/Umzug', 
                component:  Umzüge,
                props: true,
        },
    ]
});

new Vue({
    el: '#app', 
    router: router,
    render: h => h(App)
});