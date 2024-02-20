import './bootstrap';

import 'admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js';
import 'admin-lte/dist/js/adminlte.min.js';

import { createApp } from 'vue/dist/vue.esm-bundler.js';

import { createRouter, createWebHistory } from 'vue-router';
import Routes from './routes.js';


import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { fas } from '@fortawesome/free-solid-svg-icons';

// Idagdag ang lahat ng mga solid icons sa library
library.add(fas);


const app = createApp({});

app.component('font-awesome-icon', FontAwesomeIcon)

const router = createRouter({
    routes: Routes,
    history: createWebHistory(),
});

app.use(router);
app.mount('#app');