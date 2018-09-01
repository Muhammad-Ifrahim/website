
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });
$(document).ready(function(){

          console.log(" cars");
  if (window.location.href.indexOf("tab=cars") > -1) {
           
       $("body ,html").animate({
          scrollTop :$('#car-section').offset().top 
       },1000);   
    }
    else if(window.location.href.indexOf("tab=about") > -1) {
       $("body ,html").animate({
          scrollTop :$('#about-us').offset().top 
       },1000);   
    }
    else if(window.location.href.indexOf("tab=contact") > -1) {
       $("body ,html").animate({
          scrollTop :$('#footer-section').offset().top 
       },1000);   
    }
});