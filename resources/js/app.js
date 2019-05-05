import Vue from 'vue';
import 'bootstrap';


Vue.component('employee-form', require('./components/EmployeeForm.vue').default);
Vue.component('department-form', require('./components/DepartmentForm.vue').default);
Vue.component('network-table', require('./components/NetworkTable.vue').default);

const app = new Vue({
    el: '#app'
});
