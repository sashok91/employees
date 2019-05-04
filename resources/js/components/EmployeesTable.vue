<template>
    <div>
        <div v-if="isRemoved" class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"></button>
            Сотрудник был удален.
        </div>
        <div class="card">
            <div v-if="errorMessage" class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"></button>
                {{ errorMessage }}
            </div>
            <table class="table card-table table-vcenter">
                <tr>
                    <th class="d-none d-md-table-cell">Имя</th>
                    <th class="d-none d-md-table-cell">Отчество</th>
                    <th>Фамилия</th>
                    <th class="d-none d-md-table-cell">Пол</th>
                    <th>З/п</th>
                    <th>Отдел</th>
                </tr>
                <tr v-for="(employee, index) in parsedEmployees">
                    <td class="d-none d-md-table-cell">{{ employee.first_name }}</td>
                    <td class="d-none d-md-table-cell">{{ employee.middle_name }}</td>
                    <td>{{ employee.last_name }}</td>
                    <td class="d-none d-md-table-cell">
                        <span v-if="employee.sex === 'male'">мужской</span>
                        <span v-if="employee.sex === 'female'">женский</span>
                    </td>
                    <td>{{ employee.salary }}</td>
                    <td>
                        {{ joinDepartmentsNames(employee.departments) }}
                    </td>
                    <td class="text-right">
                        <a :href="createEditHref(employee.id)" data-toggle="tooltip"
                           title="Редактировать"
                           class="btn btn-icon btn-primary">
                            <i class="fe fe-edit"></i>
                        </a>
                        <button type="button" data-toggle="tooltip" title="Удалить"
                                class="btn btn-icon btn-danger"
                                @click="remove(employee.id)">
                            <i class="fe fe-trash"></i>
                        </button>

                    </td>
                </tr>
            </table>
        </div>
    </div>

</template>

<script>
    import api from '../helpers/api';

    export default {
        name: "EmployeesTable",
        props: {
            // json of employees' object
            employees: {
                type: String,
                required: true
            },
        },
        data() {
            return {
                parsedEmployees: [],
                isRemoved: false,
                errorMessage: false
            }
        },
        created() {
            if (this.employees) {
                this.parsedEmployees = JSON.parse(this.employees).data;
            }
        },
        methods: {
            joinDepartmentsNames(departments) {
                let result = '';
                if (departments && departments.length) {
                    departments.map(department => department.name).join(', ');
                }
                return result;
            },
            createEditHref(id) {
                return `/employees/${id}/edit`;
            },
            remove(id) {
                this.isRemoved = false;
                this.errorMessage = false;
                debugger;
                api.removeEmployee(id).then((resp) => {
                    location.reload();
                    this.isRemoved = true;
                }).catch((e) => {
                    this.errorMessage = e.response.message;
                });
            }
        }
    }
</script>

<style scoped>

</style>