<?php

namespace App\classes;

class loopClass
{
    public $student, $value, $item, $val, $key, $index;

    public function __construct()
    {
        $this->student = [
            0 => [
                "ID" => 1,
                "NAME" => "Muhammad",
                "Email" => "muhammad@gmail.com",
                "Address" => "Dhaka"
            ],
            1 => [
                "ID" => 2,
                "NAME" => "Mahadi",
                "Email" => "mahadi@gmail.com",
                "Address" => "Rangpur"
            ], 2 => [
                "ID" => 3,
                "NAME" => "Hasan",
                "Email" => [
                    "Email-1" => "hasan1@gmail.com",
                    "Email-2" => "hasan2@gmail.com"
                ],
                "Address" => "Thakurgaon"
            ]
        ];
    }

    public function getStudent()
    {
        foreach ($this->student as $this->item) {
            echo "<br>";
            foreach ($this->item as $this->key => $this->value) {
                if (is_array($this->value)) {
                    foreach ($this->value as $this->index => $this->val) {
                        echo $this->index . " = " . $this->val . "<br>";
                    }
                } else {
                    echo $this->key . " = " . $this->value . "<br>";
                }
            }
        }
    }
}