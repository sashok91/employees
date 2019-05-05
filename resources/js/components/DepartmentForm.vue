<template>
    <form class="card">
        <div class="card-body p-6">
            <div v-if="isSuccess" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"></button>
                {{successMessages[mode]}}
            </div>
            <div class="form-group">
                <label class="form-label">Название отдела*</label>
                <input type="text" v-model="editableDepartment.name" class="form-control"
                       placeholder="Введите название отдела">
                <div v-if="checkError('name')" class="error-text">
                    {{errors.name[0]}}
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
        name: "DepartmentForm",
        props: {
            // json
            department: String,
            // expected values: 'create' or 'update'
            mode: {
                type: String,
                required: true
            },
        },
        data() {
            return {
                editableDepartment: {
                    name: ''
                },
                errors: {},
                isSuccess: false,
                successMessages: {
                    'create': 'Отдел был добавлен. Вы можете добавить еще один отдел или просмотреть весь список в разделе "Отделы".',
                    'update': 'Информация об отделе была изменена.'
                }
            }
        },
        created() {
            if (this.department) {
                this.editableDepartment = JSON.parse(this.department);
            }
        },
        methods: {
            checkError(field) {
                return this.errors.hasOwnProperty(field);
            },

            clearForm() {
                this.editableDepartment = {
                    name: ''
                };
                this.errors = {};
            },

            save() {
                let params = this.editableDepartment;

                this.isSuccess = false;

                switch (this.mode) {
                    case 'create':
                        api.createDepartment(params).then((resp) => {
                            this.clearForm();
                            this.isSuccess = true;
                        }).catch((e) => {
                            this.errors = e.response.data.errors;
                        });
                        break;
                    case 'update':
                        let id = this.editableDepartment ? this.editableDepartment.id : '';
                        api.updateDepartment(id, params).then((resp) => {
                            this.isSuccess = true;
                            this.errors = {}
                        }).catch((e) => {
                            this.errors = e.response.data.errors;
                        });
                        break;
                    default:
                        console.error('Incorrect mode for <department-form>');
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