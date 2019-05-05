<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $employeeModel;

    /**
     * EmployeeController constructor.
     * @param $employeeModel
     */
    public function __construct(Employee $employeeModel)
    {
        $this->employeeModel = $employeeModel;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginatedEmployees = $this->employeeModel->with('departments')->paginate(8);

        return view('employees-list', [
            'employees' => $paginatedEmployees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('employee-create', [
            'departments' => $departments
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'sex' => 'nullable|in:male,female',
            'salary' => 'nullable|integer',
            'departments' => 'required|array'
        ]);

        $employee = $this->employeeModel->create($request->toArray());

        $employee->departments()->attach($request->departments);

        return response()->json([
            'success' => true,
            'employee' => $employee
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = $this->employeeModel->with('departments')->find($id);
        $departments = Department::all();
        return view('employee-edit', [
            'employee' => $employee,
            'departments' => $departments
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'sex' => 'nullable|in:male,female',
            'salary' => 'nullable|integer',
            'departments' => 'required|array'
        ]);

        $employee = $this->employeeModel->find($id);
        if ($employee) {

            $employee->first_name = $request->first_name;
            $employee->middle_name = $request->middle_name;
            $employee->last_name = $request->last_name;
            if (isset($request->sex)) {
                $employee->sex = $request->sex;
            }
            $employee->salary = $request->salary;

            $employee->save();

            $employee->departments()->detach();
            $employee->departments()->attach($request->departments);

            return response()->json([
                'success' => true,
                'employee' => $employee
            ]);
        }

        return response()->json([
            'message' => 'Сотрудник не найден'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->employeeModel->destroy($id);
        } catch (\Exception $e) {
            return redirect()->route('employees.index')->with('errorMessage', $e->getMessage());
        }

        return redirect()->route('employees.index')->with('successMessage', 'Сотрудник удален');
    }
}
