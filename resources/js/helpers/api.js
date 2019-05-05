import axios from 'axios';

export default {

    updateEmployee(id, params) {
        return axios.put(`/employees/${id}`, params);
    },

    createEmployee(params) {
        return axios.post(`/employees`, params);
    },

    updateDepartment(id, params) {
        return axios.put(`/departments/${id}`, params);
    },

    createDepartment(params) {
        return axios.post(`/departments`, params);
    },

}