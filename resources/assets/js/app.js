
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//import the vue router
import VueRouter from 'vue-router'
//tell vue to use the router
Vue.use(VueRouter)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('header-component', require('./components/partials/HeaderComponent.vue'));
Vue.component('footer-component', require('./components/partials/FooterComponent.vue'));

Vue.component('app-component', require('./components/AppComponent.vue'));

const Tasks = require('./components/TasksComponet.vue');

// const Hello = require('./components/hello.Component.vue');

//import the hello component
import Hello from './components/HelloComponent';
import Hello2 from './components/Hello2Component';

//define your routes
const routes = [
//define the root url of the application.
	{ path: '/', component: Tasks },
	{ path: '/hello', component: Hello },
	{ path: '/hello2', component: Hello2 }

]

// Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
  routes, // short for routes: routes
  // mode: 'history'
})



const app = new Vue({
    el: '#app',
    router
});

var header = new Vue({
  el: '#header',
  router
});

var footer = new Vue({
  el: '#myFooter',
  router
});