<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $categories = [], $category;

    public static function getAllCategories()
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
            ],
        ];
    }

    public static function getCategoryByProductId($catId)
    {
        self::$categories = self::getAllCategories();

        foreach (self::$categories as self::$category) {
            if (self::$category['id'] == $catId) {
                return self::$category['category_name'];
            }
        }
    }

}
