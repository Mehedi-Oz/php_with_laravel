<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    public static $products = [], $product, $categoryById, $productsByCatgoryId = [];

    public static function getAllProducts()
    {
        return self::$products = [
            [
                'id' => 1,
                'category_id' => 1,
                'name' => 'S21 Ultra',
                'description' => 'Samsung Galaxy S21 Ultra',
                'price' => '11000 Tk',
                'image' => '1.jpg'
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'name' => 'S22 Ultra',
                'description' => 'Samsung Galaxy S22 Ultra',
                'price' => '12000 Tk',
                'image' => '2.jpg'
            ],
            [
                'id' => 3,
                'category_id' => 3,
                'name' => 'S23 Ultra',
                'description' => 'Samsung Galaxy S23 Ultra',
                'price' => '13000 Tk',
                'image' => '3.jpg'
            ],
        ];
    }

    public static function getProductById($prodId)
    {
        self::$product = self::getAllProducts();

        foreach (self::$products as $item) {
            if ($item['id'] == $prodId) {
                self::$categoryById = Category::getCategoryByProductId($item['category_id']);
                $item['category_name'] = self::$categoryById;

                return $item;
            }
        }
    }

    public static function getProductByCatgoryId($catId)
    {
        self::$products = self::getAllProducts();

        foreach (self::$products as self::$product) {
            if (self::$product['category_id'] == $catId) {
                array_push(self::$productsByCatgoryId, self::$product);
            }
        }
        return self::$productsByCatgoryId;
    }
}
