<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public static $students, $student;

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

    public function studentEdit($id)
    {
        self::$student = Student::find($id);
        return view('edit-student', [
            'student' => self::$student
        ]);
    }

    public function studentUpdate(Request $request){
        Student::studentUpdate($request);

        return back()->with('message', 'Info Updated!!');
    }
}
