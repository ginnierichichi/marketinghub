/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import Vue from 'vue';

import VModal from 'vue-js-modal'
Vue.use(VModal)

window.Vue = require('vue');


Vue.component('new-user-modal', require('./components/NewUserModal.vue').default);
Vue.component('dropdown', require('./components/Dropdown.vue').default);
// Vue.component('vue-dropdown', require('./components/VueDropdown').default);
// Vue.component('vue-dropdown', require('./components/App').default);

//

require( 'datatables.net-dt');
// require('datatables.mark.js');
$(document).ready(function() {
    $.extend(true, $.fn.dataTable.defaults, {
        // mark: true,
        pageLength: 25,
        'order':[]
    });
    let table = $('#datatable').DataTable( {
    } );
} );




const app = new Vue({
    el: '#app',

});
