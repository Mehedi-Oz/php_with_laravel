<?php

namespace APP\classes;

class Category
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = [
            [
                'id' => 1,
                'category_name' => 'Smartphone',
            ],
            [
                'id' => 2,
                'category_name' => 'Laptop',
            ],
            [
                'id' => 3,
                'category_name' => 'T-Shirt',
            ],
            [
                'id' => 4,
                'category_name' => 'TV',
            ],
        ];
    }

    public function getAllCategories(){
        return $this->categories;
    }
}