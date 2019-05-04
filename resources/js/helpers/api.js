import axios from 'axios';

export default {

    updateEmployee(id, params) {
        return axios.put(`/employees/${id}`, params);
    },

    createEmployee(params) {
        return axios.post(`/employees`, params);
    },

    removeEmployee(id) {
        let params = {
            _method: 'delete'
        };
        return axios.post(`/employees/${id}`, params);
    }

}