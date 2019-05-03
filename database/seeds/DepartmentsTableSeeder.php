<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'id' => 1,
                'name' => 'Отдел продаж',
            ],
            [
                'id' => 2,
                'name' => 'Отдел закупок',
            ],
            [
                'id' => 3,
                'name' => 'Отдел PR',
            ]
        ]);
    }
}
