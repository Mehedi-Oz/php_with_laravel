<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $category, $image, $imageNewName, $directory, $imgUrl;

    public static function saveCategory($request)
    {
        self::$category = new Category();
        self::$category->category_name = $request->category_name;
        self::$category->category_image = self::saveImage($request);
        self::$category->save();
    }

    private static function saveImage($request)
    {
        self::$image = $request->file('category_image');
        self::$imageNewName = 'Category-' . rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'admin-asset/upload-images/category/';

        if (!file_exists(self::$directory)) {
            mkdir(self::$directory, 0755, true);
        }

        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl = self::$directory . self::$imageNewName;
    }

    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);

        if (self::$category) {
            if (self::$category->category_image && file_exists(self::$category->category_image)) {
                unlink(self::$category->category_image);
            }
        }
        self::$category->delete();
    }

    public static function updateCategory($request)
    {
        self::$category = Category::find($request->id);
        self::$category->category_name = $request->category_name;

        if ($request->file('category_image')) {
            if (self::$category->category_image && file_exists(self::$category->category_image)) {
                unlink(self::$category->category_image);
            }
            self::$category->category_image = self::saveImage($request);
        }
        self::$category->save();
    }

    public static function statusCategory($id)
    {
        self::$category = Category::find($id);

        if (self::$category->status == 1) {
            self::$category->status = 0;
        } else {
            self::$category->status = 1;
        }

        self::$category->save();
    }

}
