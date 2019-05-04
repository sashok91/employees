<template>
    <form class="card" >
        <div class="card-body p-6">
            <div v-if="isSuccess" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"></button>
                {{successMessages[mode]}}
            </div>
            <div class="form-group">
                <label class="form-label">Имя</label>
                <input type="text" v-model="editableEmployee.first_name" class="form-control" placeholder="Введите имя">
                <div v-if="checkError('first_name')" class="error-text">
                    {{errors.first_name[0]}}
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Отчество</label>
                <input type="text" v-model="editableEmployee.middle_name" class="form-control" placeholder="Введите отчество">
                <div v-if="checkError('middle_name')" class="error-text">
                    {{errors.middle_name[0]}}
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Фамилия</label>
                <input type="text" v-model="editableEmployee.last_name" class="form-control" placeholder="Введите фамилию">
                <div v-if="checkError('last_name')" class="error-text">
                    {{errors.last_name[0]}}
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Заработная плата</label>
                <input type="text" v-model="editableEmployee.salary" class="form-control" placeholder="Введите целое число">
                <div v-if="checkError('salary')" class="error-text">
                    {{errors.salary[0]}}
                </div>
            </div>
            <div class="form-group">
                <div class="form-label">Пол</div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="sex" value="male" v-model="editableEmployee.sex">
                        <span class="custom-control-label">Мужской</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="sex" value="female" v-model="editableEmployee.sex">
                        <span class="custom-control-label">Женский</span>
                    </label>
                </div>
                <div v-if="checkError('sex')" class="error-text">
                    {{errors.sex[0]}}
                </div>
            </div>

            <div class="form-group">
                <div class="form-label">Отделы</div>
                <div v-if="allDepartments && allDepartments.length" class="custom-controls-stacked">
                    <label class="custom-control custom-checkbox"
                           v-for="department in allDepartments ">
                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" :value="department.id" v-model="checkedDepartments" >
                        <span class="custom-control-label">{{department.name}}</span>
                    </label>
                </div>
                <div v-else>Нет ни одного отдела</div>
                <div v-if="checkError('departments')" class="error-text">
                    {{errors.departments[0]}}
                </div>
            </div>
            <div class="form-footer text-right">
                <button type="button" @click="save" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>
</template>

<script>
    import api from '../helpers/api';

    export default {
        name: "EmployeeForm",
        props: {
            // json
            employee: String,
            // json
            departments: {
                type: String,
                required: true
            } ,
            // expected values: 'create' or 'update'
            mode: {
                type: String,
                required: true
            },
        },
        data() {
            return {
                editableEmployee: {
                    first_name: '',
                    middle_name: '',
                    last_name: '',
                    sex: '',
                    salary: ''
                },
                checkedDepartments: [],
                allDepartments: [],
                errors: [],
                isSuccess: false,
                successMessages: {
                    'create': 'Сотрудник был добавлен. Вы можете добавить еще одного сотрудника или просмотреть весь список в разделе "Сотрудники".',
                    'update': 'Информация о сотруднике была изменена.'
                }
            }
        },
        created() {
            if (this.employee) {
                this.editableEmployee = JSON.parse(this.employee);
            }
            if (this.editableEmployee && this.editableEmployee.departments) {
                this.checkedDepartments = this.editableEmployee.departments.map(department => department.id);
            }
            if (this.departments) {
                this.allDepartments = JSON.parse(this.departments);
            }

        },
        methods: {
            checkError(field) {
                return this.errors.hasOwnProperty(field);
            },

            clearForm() {
                this.editableEmployee = {
                    first_name: '',
                    middle_name: '',
                    last_name: '',
                    sex: '',
                    salary: ''
                };
                this.checkedDepartments = [];
                this.errors = {};
            },

            save() {
                let params = {
                    ...this.editableEmployee
                };
                params.departments = this.checkedDepartments;

                this.isSuccess = false;

                switch (this.mode) {
                    case 'create':
                        api.createEmployee(params).then((resp) => {
                            this.clearForm();
                            this.isSuccess = true;
                        }).catch((e) => {
                            this.errors = e.response.data.errors;
                        });
                        break;
                    case 'update':
                        let id = this.editableEmployee ? this.editableEmployee.id : '';
                        api.updateEmployee(id, params).then((resp) => {
                            this.isSuccess = true;
                            this.errors = {}
                        }).catch((e) => {
                            this.errors = e.response.data.errors;
                        });
                        break;
                    default:
                        console.error('Incorrect mode for <employee-form>');
                        break;
                }
            }
        }

    }
</script>

<style scoped>
    .error-text {
        width: 100%;
        margin-top: 0.25rem;
        font-size: 87.5%;
        color: #e2201f;
    }
</style>