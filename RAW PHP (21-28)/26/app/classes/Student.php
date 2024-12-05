<?php

namespace APP\classes;

class Student
{
    public $students = [];

    public function __construct()
    {
        $this->students = [
            [
                'id' => 1,
                'name' => 'Muhammad',
                'phone' => '0932748234',
                'email' => [
                    'email-1' => 'muhammad-1@gmail.com',
                    'email-2' => 'muhammad-2@gmail.com',
                ],
                'address' => 'Dhaka'
            ],
            [
                'id' => 2,
                'name' => 'Mahadi',
                'phone' => '32894283323',
                'email' => [
                    'email-1' => 'mahadi-1@gmail.com',
                    'email-2' => 'mahadi-2@gmail.com',
                ],
                'address' => 'Rangpur'
            ],
            [
                'id' => 3,
                'name' => 'Hasan',
                'phone' => '9054604334',
                'email' => [
                    'email-1' => 'hasan-1@gmail.com',
                    'email-2' => 'hasan-2@gmail.com',
                ],
                'address' => 'Thakurgaon'
            ],
            [
                'id' => 4,
                'name' => 'Kamrun',
                'phone' => '120328392',
                'email' => [
                    'email-1' => 'kamrun-1@gmail.com'
                ],
                'address' => 'Noakhali'
            ],
            [
                'id' => 5,
                'name' => 'Nahar',
                'phone' => '0546872734',
                'email' => 'nahar-1@gmail.com',
                'address' => 'Afganistan'
            ],
        ];
    }

    public function getAllStudents()
    {
        return $this->students;
    }

}