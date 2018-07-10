import 'jquery'
import 'bootstrap'

import Vue from 'vue'
import VueRouter from 'vue-router'
import Routes from './routes'
import App from './components/app.vue'
import TheBody from './components/layout/TheBody.vue'

export const router = new VueRouter({
    routes: Routes,
    mode: 'history',
});

Vue.component('TheBody', TheBody);

const app = new Vue({
    router: router,
    render: h => h(App),
}).$mount('#hrms-app');
