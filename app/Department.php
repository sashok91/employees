<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Department extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_department');
    }

    public function scopeDepartmensWithStats($query)
    {
        return $query->select(DB::raw('departments.id, departments.name, MAX(e.salary) AS max_salary , COUNT(ed.employee_id) AS employees_count'))
            ->leftJoin('employee_department AS ed', 'departments.id', '=', 'ed.department_id')
            ->leftJoin('employees AS e', 'e.id', '=', 'ed.employee_id')
            ->groupBy('departments.id');
    }
}
