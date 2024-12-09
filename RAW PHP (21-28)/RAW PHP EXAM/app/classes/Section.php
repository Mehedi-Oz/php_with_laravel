<?php

namespace APP\classes;

class Section
{
    public $sections = [];

    public function __construct()
    {
        $this->sections = [
            [
                'id' => 1,
                'section_name' => 'A'
            ], [
                'id' => 2,
                'section_name' => 'B'
            ], [
                'id' => 3,
                'section_name' => 'C'
            ]
        ];
    }

    public function getAllSections()
    {
        return $this->sections;
    }

    public function getSectionByStudentId($Id)
    {
        $section = $this->getAllSections();

        foreach ($section as $eachSection) {
            if ($eachSection['id'] == $Id) {
                return $eachSection;
            }
        }
    }
}