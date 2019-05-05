import Vue from 'vue';


Vue.component('employee-form', require('./components/EmployeeForm.vue').default);
Vue.component('department-form', require('./components/DepartmentForm.vue').default);

const app = new Vue({
    el: '#app'
});
