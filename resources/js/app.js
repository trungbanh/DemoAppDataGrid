require('./bootstrap');
import Vue from 'vue';

/**
 * Vue prototype.
 */
Vue.prototype.$http = axios;

/**
 * Window assignation.
 */
window.Vue = Vue;
