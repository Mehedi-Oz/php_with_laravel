<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    public static $products = [], $product, $categoryById, $res = [];

    public static function getAllProducts()
    {
        return self::$products = [
            [
                'id' => 1,
                'category_id' => 1,
                'name' => 'S23 Ultra',
                'price' => '80000 Tk',
                'description' => 'Samsung Galaxy S23 Ultra',
                'image' => '1.jpg',
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'name' => 'iPhone',
                'price' => '90000 Tk',
                'description' => 'Apple iPhone 16 Pro Max',
                'image' => '2.jpg',
            ],
            [
                'id' => 3,
                'category_id' => 2,
                'name' => 'MacBook Pro',
                'price' => '140000 Tk',
                'description' => 'Apple MacBook M2 Pro ',
                'image' => '3.jpg',
            ],
            [
                'id' => 4,
                'category_id' => 2,
                'name' => 'Asus',
                'price' => '180000 Tk',
                'description' => 'Asus Ryzen 9 9800H',
                'image' => '4.jpg',
            ],
            [
                'id' => 5,
                'category_id' => 3,
                'name' => 'Home PC',
                'price' => '40000 Tk',
                'description' => 'AMD Ryzen 5 5600G',
                'image' => '5.jpg',
            ],
            [
                'id' => 6,
                'category_id' => 3,
                'name' => 'Gaming PC',
                'price' => '210000 Tk',
                'description' => 'AMD Ryzen 9 9800x3D',
                'image' => '6.jpg',
            ]
        ];
    }

    public static function getProductById($id)
    {
        self::$product = self::getAllProducts();

        foreach (self::$product as $item) {
            if ($item['id'] == $id) {
                self::$categoryById = Category::getCategoryById($item['category_id']);
                $item['category_name'] = self::$categoryById;

                return $item;
            }
        }
    }

    public static function getProductByCategoryId($id)
    {
        self::$products = self::getAllProducts();

        foreach (self::$products as self::$product) {
            if (self::$product['category_id'] == $id) {
                array_push(self::$res, self::$product);
            }
        }
        return self::$res;
    }
}
