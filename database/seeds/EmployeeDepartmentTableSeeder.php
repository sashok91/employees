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
            ]
        ]);
    }
}
