<template>
    <div class="card scrollable-x">
        <table class="table card-table table-vcenter">
            <tr>
                <th></th>
                <th v-for="department in departments">{{department.name}}</th>
            </tr>
            <tr v-for="(employee, index) in employees">
                <td>{{ employee.first_name }} {{employee.last_name}}</td>

                <td v-for="mark in network[index]" class="pl-5">
                    <i v-if="mark" class="fe fe-check"></i>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        name: "NetworkTable",
        props: {
            // json for employees with attached departments
            employeesJson: {
                type: String,
                required: true
            },
            // json of departments
            departmentsJson: {
                type: String,
                required: true
            },
        },
        data() {
            return {
                employees: [],
                departments: []
            }
        },
        computed: {
            network() {
                let tmpDepartments = {};
                let network = [];
                // создаем объект , в котором ключом будут id отдела, а значением порядковый номер этого отдела в массиве this.departments
                this.departments.forEach((department, index) => {
                    tmpDepartments[department.id] = index;
                });

                this.employees.forEach(((employee) => {
                    // Индекс в массиве row соответствует индексу в массиве this.departments
                    let row = new Array(this.departments.length);
                    employee.departments.forEach((department) => {
                        // по id отдела получаем  порядковый номер этого отдела в массиве отделов(this.departments)
                        let index = tmpDepartments[department.id];
                        row[index] = true;
                    });
                    network.push(row);
                }));
                return network
            }
        },
        created() {
            this.employees = JSON.parse(this.employeesJson);
            this.departments = JSON.parse(this.departmentsJson);
        }
    }
</script>

<style scoped>
    .scrollable-x {
        overflow-x: scroll;
    }
</style>