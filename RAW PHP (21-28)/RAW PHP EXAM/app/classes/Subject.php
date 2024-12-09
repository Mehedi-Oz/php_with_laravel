<?php

namespace APP\classes;

class Subject
{
    public $subjects = [];

    public function __construct()
    {
        $this->subjects = [
            [
                'id' => 1,
                'subject_name' => 'Algorithm'
            ], [
                'id' => 2,
                'subject_name' => 'Circuit Design'
            ], [
                'id' => 3,
                'subject_name' => 'UI/UX Design'
            ],
        ];
    }

    public function getAllSubjects()
    {
        return $this->subjects;
    }

    public function getSubjectByStudentId($Id)
    {
        $subject = $this->getAllSubjects();

        foreach ($subject as $eachSubject) {
            if ($eachSubject['id'] == $Id) {
                return $eachSubject;
            }
        }
    }
}