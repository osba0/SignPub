/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import DataTable from 'laravel-vue-datatable';
Vue.use(DataTable);

import VueSweetalert2 from 'vue-sweetalert2';
 
Vue.use(VueSweetalert2);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('user-data-table', require('./components/admin/users/UserDataTable.vue').default); 

import UserDataTable from "./components/admin/users/UserDataTable";
import UserCreateEdit from "./components/admin/users/UserCreateEdit";


import OrderDataTable from "./components/order/OrderDataTable";
import OrderCreateEdit from "./components/order/OrderCreateEdit";
import OrderEdit from "./components/order/OrderEdit";




import OrderListDataTable from "./components/admin/order-management/order/OrderListDataTable";
import AdminOrderEdit from "./components/admin/order-management/order/OrderEdit";

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        UserDataTable,
        UserCreateEdit,
        OrderDataTable,
        OrderCreateEdit,
        OrderListDataTable,
        OrderEdit,
        AdminOrderEdit
    }
});
