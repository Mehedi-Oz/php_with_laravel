<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        Student::saveStudent($request);
        return back()->with('message', 'Info Saved!!');
    }
}
