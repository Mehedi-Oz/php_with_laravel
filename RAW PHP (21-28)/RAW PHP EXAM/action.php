<?php

require_once 'vendor/autoload.php';

use APP\classes\Home;
use APP\classes\Student;
use APP\classes\Department;
use APP\classes\Subject;
use APP\classes\Section;

$student = new Student();

$department = new Department();
$departments = $department->getAllDepartments();

$subject = new Subject();
$subjects = $subject->getAllSubjects();

$section = new Section();
$sections = $section->getAllSections();


if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        $students = $student->getAllStudents();

        include "pages/home.php";
    } else if ($_GET['page'] == 'details') {

        $studentId = $_GET['id'];
        $details = $student->getStudentByStudentId($studentId);

        include "pages/details.php";
    } else if ($_GET['page'] == 'department') {
        $departmentId = $_GET['id'];
        $students = $student->getStudentByDepartmentId($departmentId);

        include "pages/department.php";
    } else if ($_GET['page'] == 'subject') {
        $subjectId = $_GET['id'];
        $students = $student->getStudentBySubjectId($subjectId);

        include "pages/subject.php";
    } else if ($_GET['page'] == 'section') {
        $sectionId = $_GET['id'];
        $students = $student->getStudentBySectionId($sectionId);

        include "pages/section.php";
    }

}