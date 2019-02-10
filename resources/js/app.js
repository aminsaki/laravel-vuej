
require('./bootstrap');
window.Vue = require('vue');
window.axios = require('axios');
import Vuex from 'vuex';
import VueRouter from 'vue-router';
window.Vue.use(VueRouter);
Vue.use(Vuex);

Vue.component('Edit', require('./components/EditComponent.vue').default);
Vue.component('Create', require('./components/InsertComponent.vue').default);
Vue.component('Home', require('./components/HomeComponent.vue').default);
Vue.component('Users', require('./components/UsersComponent.vue').default);


const router = new VueRouter({
      router,
    mode: 'history'


});

const app = new Vue({
    el: '#app',
    router,
    components: {Users, Create, Edit,Home}
});
