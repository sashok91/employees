import Vue from 'vue';


Vue.component('employee-form', require('./components/EmployeeForm.vue').default);
Vue.component('employees-table', require('./components/EmployeesTable.vue').default);

const app = new Vue({
    el: '#app'
});
