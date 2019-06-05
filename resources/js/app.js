import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';


//Route information for Vue Router
import Routes from '@/js/routes.js';

//Component File
import App from '@/js/views/App';

Vue.use(Vuetify);

const app = new Vue({
    el:'#app',
    router: Routes,
    render: h => h(App),

});

export default app;






























// require('./bootstrap');

// window.Vue = require('vue');

// Vue.component('carousel-component', require('./components/CarouselComponent.vue').default);
// Vue.component('home-component', require('./components/HomeComponent.vue').default);
// Vue.component('app-component', require('./components/AppComponent.vue').default);

// const app = new Vue({
//     el: '#app'
// });
