<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'sex', 'salary'
    ];

    public $timestamps = false;

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'employee_department');
    }
}
