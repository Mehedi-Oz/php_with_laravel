<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    private static $student, $image, $imageNewName, $directory, $imgUrl;

    public static function saveStudent($request)
    {
        self::$student = new Student();
        self::$student->seid = $request->seid;
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->phone = $request->phone;
        self::$student->address = $request->address;
        self::$student->image = self::saveImage($request);
        self::$student->department = $request->department;
        self::$student->course_name = $request->course_name;
        self::$student->save();
    }

    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = 'student-' . rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'asset/student-image/';
        self::$imgUrl = self::$directory . self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);

        return self::$imgUrl;
    }

    public static function deleteStudent($id)
    {
        self::$student = Student::find($id);
        self::$student->delete();
    }

    public static function studentUpdate($request)
    {
        self::$student = Student::find($request->id);
        self::$student->seid = $request->seid;
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->phone = $request->phone;
        self::$student->address = $request->address;

        if ($request->file('image')) {
            if (self::$student->image && file_exists(self::$student->image)) {
                unlink(self::$student->image);
            }
            self::$student->image = self::saveImage($request);
        }

        self::$student->department = $request->department;
        self::$student->course_name = $request->course_name;
        self::$student->save();
    }
}
