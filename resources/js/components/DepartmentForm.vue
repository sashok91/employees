<template>
    <form class="card">
        <div class="card-body p-6">
            <alert-success v-if="isSuccess">
                {{successMessages[mode]}}
            </alert-success>
            <alert-fail v-if="isFailed">
                {{error.message}}
            </alert-fail>
            <div class="form-group">
                <label class="form-label">Название отдела*</label>
                <input type="text" v-model="editableDepartment.name" class="form-control"
                       placeholder="Введите название отдела">
                <div v-if="checkError('name')" class="error-text">
                    {{error.errors.name[0]}}
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
    import AlertSuccess from './AlertSuccess.vue';
    import AlertFail from './AlertFail.vue';

    export default {
        name: "DepartmentForm",
        components: {AlertSuccess, AlertFail},
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
                error: {
                    message: '',
                    errors: {}
                },
                isFailed: false,
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
                return this.error && this.error.errors && this.error.errors.hasOwnProperty(field);
            },

            clearForm() {
                this.editableDepartment = {
                    name: ''
                };
                this.error = {};
            },

            save() {
                let params = this.editableDepartment;

                this.isSuccess = false;
                this.isFailed = false;

                switch (this.mode) {
                    case 'create':
                        api.createDepartment(params).then((resp) => {
                            this.clearForm();
                            this.isSuccess = true;
                        }).catch((e) => {
                            this.error = e.response.data;
                            this.isFailed = true;
                        });
                        break;
                    case 'update':
                        let id = this.editableDepartment ? this.editableDepartment.id : '';
                        api.updateDepartment(id, params).then((resp) => {
                            this.isSuccess = true;
                            this.error = {}
                        }).catch((e) => {
                            this.error = e.response.data;
                            this.isFailed = true;
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

</style>