
require('./bootstrap');
window.Vue = require('vue');
window.axios = require('axios');
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import  {Routes} from  './Routes';
import   users  from  './components/UsersComponent';

Vue.use(VueRouter);
Vue.use(Vuex);

const router = new VueRouter({
    mode: 'history',
    routes,

});

// Vue.component('Users', require('./components/UsersComponent').default);

// Vue.component('Create', require('./components/InsertComponent').default);
// Vue.component('Edit', require('./components/EditComponent').default);


const app = new Vue({
    el: '#app',
    routes,
    components:{
        users
    }
});
