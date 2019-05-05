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
            ],
            [
                'id' => 6,
                'first_name' => 'Григорий',
                'middle_name' => null,
                'last_name' => 'Лепс',
                'sex' => 'male',
                'salary' => 1100,
            ],
            [
                'id' => 7,
                'first_name' => 'Александр',
                'middle_name' => 'Григорьевич',
                'last_name' => 'Порошенко',
                'sex' => 'male',
                'salary' => 2200,
            ],
            [
                'id' => 8,
                'first_name' => 'Сара',
                'middle_name' => 'Джессика',
                'last_name' => 'Паркер',
                'sex' => 'female',
                'salary' => 1050,
            ],
            [
                'id' => 9,
                'first_name' => 'Сильвестр',
                'middle_name' => null,
                'last_name' => 'Сталлоне',
                'sex' => 'male',
                'salary' => 800,
            ],
            [
                'id' => 10,
                'first_name' => 'Николай',
                'middle_name' => 'Александрович',
                'last_name' => 'Лукашенко',
                'sex' => 'male',
                'salary' => 500,
            ],
            [
                'id' => 11,
                'first_name' => 'Гадя',
                'middle_name' => 'Петрович',
                'last_name' => 'Хренова',
                'sex' => 'female',
                'salary' => 1040,
            ],
            [
                'id' => 12,
                'first_name' => 'Абдула',
                'middle_name' => null,
                'last_name' => 'Рахманов',
                'sex' => 'male',
                'salary' => 800,
            ],
            [
                'id' => 13,
                'first_name' => 'Дмитрий',
                'middle_name' => 'Александрович',
                'last_name' => 'Лукашенко',
                'sex' => 'male',
                'salary' => 1500,
            ]
        ]);
    }
}
