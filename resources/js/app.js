

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);


const routes = [
    { path: '/users', component: require('./components/UsersComponent.vue').default  },
    { path: '/edit/:id', component: require('./components/EditComponent.vue').default ,name: 'edit' },
    { path: '/create', component: require('./components/InsertComponent.vue').default },



]


const router = new VueRouter({
    routes // short for `routes: routes`
});



const app = new Vue({
    el: '#app',
    router
});
