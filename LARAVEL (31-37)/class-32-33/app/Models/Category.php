<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $categories = [], $category;

    public static function getAllCategory()
    {
        return self::$categories = [
            [
                'id' => 1,
                'category_name' => 'Mobile'
            ],
            [
                'id' => 2,
                'category_name' => 'Laptop'
            ],
            [
                'id' => 3,
                'category_name' => 'Computer'
            ]
        ];
    }

    public static function getCategoryById($catID)
    {
        self::$categories = self::getAllCategory();

        foreach (self::$categories as self::$category) {
            if (self::$category['id'] == $catID) {
                return self::$category['category_name'];
            }
        }
    }
}
