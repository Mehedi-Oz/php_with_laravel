<?php

namespace APP\classes;

use APP\classes\Category;

class Product
{
    public $products = [], $category, $categoryById, $res = [];

    public function __construct()
    {
        $this->products = [
            [
                'id' => 1,
                'category_id' => 1,
                'product_name' => 'Asus',
                'description' => 'Lorem ipsum dolor sit amet, molestias optio praesentium quos ut voluptas.',
                'price' => '90000 Tk',
                'image' => '1.jpg'
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'product_name' => 'Samsung',
                'description' => 'Lonsectetur adipisicing elit deleniti esse inventore, molestias optio praesentium quos ut voluptas.',
                'price' => '100000 Tk',
                'image' => '2.jpg'
            ],
            [
                'id' => 3,
                'category_id' => 2,
                'product_name' => 'Asus',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci cupiditate deleniti esse inventore, molestias optio praesentium quos ut voluptas.',
                'price' => '140000 Tk',
                'image' => '3.jpg'
            ],
            [
                'id' => 4,
                'category_id' => 3,
                'product_name' => 'Polo',
                'description' => 'Gdipisicing elit dipisci cupiditate deleniti esse inventore.',
                'price' => '700 Tk',
                'image' => '4.jpg'
            ],
            [
                'id' => 5,
                'category_id' => 4,
                'product_name' => 'LG',
                'description' => 'Hdipisicing elit. A adipisci cupiditate deleniti esse inventore, molestias optio oluptas.',
                'price' => '130000 Tk',
                'image' => '5.jpg'
            ],
        ];
    }

    public function getAllProducts()
    {
        return $this->products;
    }

    public function productDetails($Id)
    {
        $products = $this->getAllProducts();

        foreach ($products as $product) {
            if ($product['id'] == $Id) {
                $this->category = new Category();
                $this->categoryById = $this->category->CategoryById($product['category_id']);
                $product['category_name'] = $this->categoryById['category_name'];
                return $product;
            }
        }
    }

    public function getProductByCategoryId($categoryId)
    {
        $products = $this->getAllProducts();

        foreach ($products as $product) {
            if ($product['category_id'] == $categoryId) {
                array_push($this->res, $product);
            }
        }
        return $this->res;
    }
}