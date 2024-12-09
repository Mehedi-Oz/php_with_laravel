<?php

namespace APP\classes;

class Department
{
    public $departments = [];

    public function __Construct()
    {
        $this->departments = [
            [
                'id' => 1,
                'department_name' => 'CSE'
            ],
            [
                'id' => 2,
                'department_name' => 'EEE'
            ],
            [
                'id' => 3,
                'department_name' => 'SEE'
            ],

        ];
    }

    public function getAllDepartments()
    {
        return $this->departments;
    }

    public function getDepartmentByStudentId($id)
    {
        $department = $this->getAllDepartments();

        foreach ($department as $eachDepartment) {
            if ($eachDepartment['id'] == $id) {
                return $eachDepartment;
            }
        }
    }
}