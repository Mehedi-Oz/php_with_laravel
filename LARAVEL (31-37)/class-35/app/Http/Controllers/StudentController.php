<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public static $students;

    public function index(Request $request)
    {
        Student::saveStudent($request);
        return back()->with('message', 'Info Saved!!');
    }

    public function studentList()
    {
        self::$students = Student::all();
        return view('student-list', [
            'students' => self::$students
        ]);
    }

    public function studentDelete(Request $request)
    {
        Student::deleteStudent($request->id);
        return back()->with('message', 'Info Deleted!!');
    }
}
