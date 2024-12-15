<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public static $students, $student;

    public function index()
    {
        return view('department');
    }

    public static function addStudent(request $request)
    {
        Student::addStudent($request);
        return back()->with('message', 'Student Info Added Successfully!!');
    }

    public function listStudent()
    {
        self::$students = DB::table('students')
            ->join('departments', 'students.department', 'departments.id')
            ->select('students.*', 'departments.department_name')
            ->get();

        return view('student-list', [
            'students' => self::$students
        ]);
    }

    public function editStudent($id)
    {
        self::$student = Student::find($id);
        return view('student-edit', [
            'student' => self::$student,
            'departments' => Department::all()
        ]);
    }

    public function deleteStudent(Request $request)
    {
        Student::deleteStudent($request->id);

        return back()->with('message', 'Student Info Deleted Successfully!!');
    }

    public function updateStudent(Request $request)
    {
        Student::updateStudent($request);
        return back()->with('message', 'Student Info Updated Successfully!!');
    }

}
