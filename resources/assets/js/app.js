
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

/**
 * Some jQuery for small targeted behavior,
 * where it would be overkill to write
 * a Vue.JS component
 */
let $toggle = $('.header-toggle');
let $menu = $('.header-menu');

$toggle.click(function() {
    $(this).toggleClass('is-active');
    $menu.toggleClass('is-active');
});

$('.modal-button').click(function(e) {
    e.preventDefault();
    let target = $(this).data('target');
    $('html').addClass('is-clipped');
    $(target).addClass('is-active');
});

$('.modal-background, .modal-close').click(function() {
    $('html').removeClass('is-clipped');
    $(this).parent().removeClass('is-active');
});

$('.modal-card-head .delete, .modal-card-foot .button').click(function() {
    $('html').removeClass('is-clipped');
    $('#modal-ter').removeClass('is-active');
});
