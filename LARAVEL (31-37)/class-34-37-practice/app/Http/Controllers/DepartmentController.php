<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public static $department;

    public function index()
    {
        return view('department');
    }

    public function addDepartment(Request $request)
    {
        Department::addDepartment($request);
        return back()->with('message', 'Department Info Added Successfully!!');
    }

    public function listDepartment()
    {
        return view('department-list', [
            'departments' => Department::all()
        ]);
    }

    public function editDepartment($id)
    {
        self::$department = Department::find($id);
        return view('department-edit', [
            'department' => self::$department
        ]);
    }

    public function deleteDepartment(Request $request)
    {
        Department::deleteDepartment($request->id);
        return back()->with('message', 'Department Info Deleted Successfully!!');
    }

    public function updateDepartment(Request $request)
    {
        Department::updateDepartment($request);
        return back()->with('message', 'Department Info Updated Successfully!!');
    }
}
