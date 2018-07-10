import 'jquery'
import 'bootstrap'

import Vue from 'vue'
import VueRouter from 'vue-router'
import Routes from './routes'
import App from './components/app.vue'

Vue.use(VueRouter);

export const router = new VueRouter({
    routes: Routes,
    mode: 'history',
});

const app = new Vue({
    router: router,
    render: h => h(App),
}).$mount('#hrms-app');
