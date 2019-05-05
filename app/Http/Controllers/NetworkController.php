<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index(Request $request) {
        $departments = Department::get();
        $employeesWithDepartments = Employee::with('departments')->paginate(8);
        return view('network', [
            'departments' => $departments,
            'employees' => $employeesWithDepartments
        ]);
    }
}
