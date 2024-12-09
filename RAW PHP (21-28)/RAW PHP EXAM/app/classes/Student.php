<?php

namespace APP\classes;

use APP\classes\Department;
use APP\classes\Section;
use APP\classes\Subject;

class Student
{
    public $students = [], $department, $departmentById, $studentsByDepartment = [], $section, $sectionById, $subject, $subjectById, $studentsBySubject = [], $studentsBySection=[];

    public function __construct()
    {
        $this->students = [
            [
                'id' => 1,
                'department_id' => 1,
                'section_id' => 3,
                'subject_id' => 1,
                'student_name' => 'Mahadi',
                'email' => 'mahadi@gmail.com',
                'phone' => '012372191823',
                'image' => '1.jpg'
            ], [
                'id' => 2,
                'department_id' => 2,
                'section_id' => 2,
                'subject_id' => 2,
                'student_name' => 'Hasan',
                'email' => 'hasan@gmail.com',
                'phone' => '0932742934293',
                'image' => '2.jpg'
            ], [
                'id' => 3,
                'department_id' => 3,
                'section_id' => 1,
                'subject_id' => 3,
                'student_name' => 'Kamrul',
                'email' => 'kamrul@gmail.com',
                'phone' => '23482390492',
                'image' => '3.jpg'
            ]
//            , [
//                'id' => 4,
//                'department_id' => 2,
//                'section_id' => 3,
//                'subject_id' => 2,
//                'student_name' => 'Mahamudul',
//                'email' => 'mahadumul@gmail.com',
//                'phone' => '874350725234',
//                'image' => '4.jpg'
//            ], [
//                'id' => 5,
//                'department_id' => 3,
//                'section_id' => 2,
//                'subject_id' => 3,
//                'student_name' => 'Kamrun',
//                'email' => 'kamrun@gmail.com',
//                'phone' => '943753478173',
//                'image' => '5.jpg'
//            ], [
//                'id' => 6,
//                'department_id' => 3,
//                'section_id' => 1,
//                'subject_id' => 3,
//                'student_name' => 'Happy',
//                'email' => 'happy@gmail.com',
//                'phone' => '896747237423',
//                'image' => '6.jpg'
//            ]
        ];
    }

    public function getAllStudents()
    {
        return $this->students;
    }

    public function getStudentByStudentId($studentId)
    {
        $students = $this->getAllStudents();

        foreach ($students as $student) {
            if ($student['id'] == $studentId) {
                $this->department = new Department();
                $this->departmentById = $this->department->getDepartmentByStudentId($student['id']);
                $student['department_name'] = $this->departmentById['department_name'];

                $this->section = new Section();
                $this->sectionById = $this->section->getSectionByStudentId($student['id']);
                $student['section_name'] = $this->sectionById['section_name'];

                $this->subject = new Subject();
                $this->subjectById = $this->subject->getSubjectByStudentId($student['id']);
                $student['subject_name'] = $this->subjectById['subject_name'];


                return $student;
            }
        }
    }

    public function getStudentByDepartmentId($departmentId)
    {
        $students = $this->getAllStudents();

        foreach ($students as $student) {
            if ($student['department_id'] == $departmentId) {
                array_push($this->studentsByDepartment, $student);
            }
        }
        return $this->studentsByDepartment;
    }

    public function getStudentBySubjectId($subjectId)
    {
        $students = $this->getAllStudents();

        foreach ($students as $student) {
            if ($student['subject_id'] == $subjectId) {
                array_push($this->studentsBySubject, $student);
            }
        }
        return $this->studentsBySubject;
    }

    public function getStudentBySectionId($sectionId)
    {
        $students = $this->getAllStudents();

        foreach ($students as $student) {
            if ($student['section_id'] == $sectionId) {
                array_push($this->studentsBySection, $student);
            }
        }
        return $this->studentsBySection;
    }


}