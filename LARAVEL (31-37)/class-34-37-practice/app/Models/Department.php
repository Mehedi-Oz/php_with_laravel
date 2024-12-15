<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    private static $department;

    public static function addDepartment($request)
    {
        self::$department = new Department();
        self::$department->department_name = $request->department_name;
        self::$department->department_code = $request->department_code;
        self::$department->save();
    }

    public static function deleteDepartment($id)
    {
        Department::find($id)->delete();
    }

    public static function updateDepartment($request)
    {
        self::$department = Department::find($request->id);
        self::$department->department_name = $request->department_name;
        self::$department->department_code = $request->department_code;
        self::$department->save();
    }
}
