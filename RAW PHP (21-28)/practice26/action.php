<?php

require_once 'vendor/autoload.php';

use APP\classes\Student;

if (isset($_GET['page'])) {
  if ($_GET['page'] == 'home') {
    include 'pages/home.php';
  } else if ($_GET['page'] == 'student') {
    $student = new Student();
    $students = $student->getAllStudents();

    include 'pages/student.php';
  }
}