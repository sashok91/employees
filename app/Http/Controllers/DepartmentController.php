<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\SaveDepartment;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    private $dModel;

    /**
     * DepartmentController constructor.
     * @param $dModel
     */
    public function __construct(Department $dModel)
    {
        $this->dModel = $dModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = $this->dModel->departmensWithStats()->paginate(8);;
        return view('departments-list', [
            'departments' => $departments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveDepartment $request)
    {
        $department = $this->dModel->create($request->toArray());

        return response()->json([
            'success' => true,
            'department' => $department
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = $this->dModel->find($id);
        return view('department-edit', [
            'department' => $department
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SaveDepartment $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveDepartment $request, $id)
    {
        $department = $this->dModel->find($id);
        if ($department) {

            $department->name = $request->name;

            $department->save();

            return response()->json([
                'success' => true,
                'department' => $department
            ]);
        }

        return response()->json([
            'message' => 'Отдел не найден'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->dModel->destroy($id);
        } catch (\Exception $e) {
            return redirect()->route('departments.index')->with('errorMessage', $e->getMessage());
        }

        return redirect()->route('departments.index')->with('successMessage', 'Отдел удален');
    }
}
