<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'id' => 1,
                'first_name' => 'Джонни',
                'middle_name' => null,
                'last_name' => 'Депп',
                'sex' => 'male',
                'salary' => 1000,
            ],
            [
                'id' => 2,
                'first_name' => 'Александр',
                'middle_name' => 'Григорьевич',
                'last_name' => 'Лукашенко',
                'sex' => 'male',
                'salary' => 2000,
            ],
            [
                'id' => 3,
                'first_name' => 'Сара',
                'middle_name' => null,
                'last_name' => 'Конор',
                'sex' => 'female',
                'salary' => 1050,
            ],
            [
                'id' => 4,
                'first_name' => 'Арнольд',
                'middle_name' => null,
                'last_name' => 'Шварценеггер',
                'sex' => 'male',
                'salary' => 100,
            ],
            [
                'id' => 5,
                'first_name' => 'Евфросинья',
                'middle_name' => null,
                'last_name' => 'Полоцкая',
                'sex' => 'female',
                'salary' => 500,
            ]
        ]);
    }
}
