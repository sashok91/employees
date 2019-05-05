<?php


namespace App\Services;


use App\Department;
use App\Employee;

class NetworkService
{
    private $departments;
    private $employeesWithDepartments;
    private $network = [];

    public function __construct($departments = null, $employeesWithDepartments = null)
    {
        if (isset($departments) && isset($employeesWithDepartments)) {
            $this->departments = $departments;
            $this->employeesWithDepartments = $employeesWithDepartments;
        } else {
            $this->init();
        }
    }

    public function init()
    {
        $this->departments = Department::get();
        $this->employeesWithDepartments = Employee::with('departments')->get();
    }

    public function create()
    {
        $departmentsArray = $this->departments->toArray();
        $employeesArray = $this->employeesWithDepartments->toArray();



        return $this->network;
    }
}