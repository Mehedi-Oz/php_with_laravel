<?php

namespace APP\classes;

class Student
{
  public $student;
  public function __construct()
  {
    $this->student = [
      [
        'id' => 1,
        'name' => 'Muhammad',
        'phone' => '039720394',
        'email' => [
          'email-1' => 'muhammad1@gmail.com',
          'email-2' => 'muhammad2@gmail.com',
          'email-3' => 'muhammad3@gmail.com'
        ],
        'address' => 'Dhaka'
      ],
      [
        'id' => 2,
        'name' => 'Mahadi',
        'phone' => '23432434',
        'email' => 'mahadi@gmail.com',
        'address' => 'Rangpur'
      ],
      [
        'id' => 3,
        'name' => 'Hasan',
        'phone' => '7576563735',
        'email' => [
          'email-1' => 'hasan1@gmail.com'
        ],
        'address' => 'Thakurgaon'
      ],
    ];
  }

  public function getAllStudents()
  {
    return $this->student;
  }
}