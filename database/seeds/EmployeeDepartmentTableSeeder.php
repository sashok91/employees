<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeDepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_department')->insert([
            [
                'id' => 1,
                'employee_id' => 1,
                'department_id' => 1
            ],
            [
                'id' => 2,
                'employee_id' => 1,
                'department_id' => 3
            ],
            [
                'id' => 3,
                'employee_id' => 2,
                'department_id' => 1
            ],
            [
                'id' => 4,
                'employee_id' => 2,
                'department_id' => 2
            ],
            [
                'id' => 5,
                'employee_id' => 2,
                'department_id' => 3
            ],
            [
                'id' => 6,
                'employee_id' => 3,
                'department_id' => 2
            ],
            [
                'id' => 7,
                'employee_id' => 4,
                'department_id' => 2
            ],
            [
                'id' => 8,
                'employee_id' => 5,
                'department_id' => 1
            ],
            [
                'id' => 9,
                'employee_id' => 6,
                'department_id' => 1
            ],
            [
                'id' => 10,
                'employee_id' => 7,
                'department_id' => 3
            ],
            [
                'id' => 11,
                'employee_id' => 7,
                'department_id' => 1
            ],
            [
                'id' => 12,
                'employee_id' => 7,
                'department_id' => 2
            ],
            [
                'id' => 13,
                'employee_id' => 8,
                'department_id' => 3
            ],
            [
                'id' => 14,
                'employee_id' => 8,
                'department_id' => 2
            ],
            [
                'id' => 15,
                'employee_id' => 9,
                'department_id' => 2
            ],
            [
                'id' => 16,
                'employee_id' => 9,
                'department_id' => 1
            ],
            [
                'id' => 17,
                'employee_id' => 10,
                'department_id' => 1
            ],
            [
                'id' => 18,
                'employee_id' => 10,
                'department_id' => 3
            ],
            [
                'id' => 19,
                'employee_id' => 11,
                'department_id' => 1
            ],
            [
                'id' => 20,
                'employee_id' => 11,
                'department_id' => 2
            ],
            [
                'id' => 21,
                'employee_id' => 12,
                'department_id' => 3
            ],
            [
                'id' => 22,
                'employee_id' => 12,
                'department_id' => 2
            ],
            [
                'id' => 23,
                'employee_id' => 13,
                'department_id' => 2
            ],
            [
                'id' => 24,
                'employee_id' => 13,
                'department_id' => 1
            ]
        ]);
    }
}
