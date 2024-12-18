<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public static $author, $image, $imageNewName, $directory, $imgUrl;

    public static function saveAuthor($request)
    {
        self::$author = new Author();
        self::$author->author_name = $request->author_name;
        self::$author->author_image = self::saveImage($request);
        self::$author->save();
    }

    private static function saveImage($request)
    {
        self::$image = $request->file('author_image');
        self::$imageNewName = 'Author-' . rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'admin-asset/upload-images/author/';

        if (!file_exists(self::$directory)) {
            mkdir(self::$directory, 0755, true);
        }

        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl = self::$directory . self::$imageNewName;
    }

    public static function deleteAuthor($id)
    {
        self::$author = Author::find($id);

        if (self::$author) {
            if (self::$author->author_image && file_exists(self::$author->author_image)) {
                unlink(self::$author->author_image);
            }
        }
        self::$author->delete();
    }

    public static function updateAuthor($request)
    {
        self::$author = Author::find($request->id);
        self::$author->author_name = $request->author_name;

        if ($request->file('author_image')) {
            if (self::$author->author_image && file_exists(self::$author->author_image)) {
                unlink(self::$author->author_image);
            }
            self::$author->author_image = self::saveImage($request);
        }

        self::$author->save();
    }

    public static function statusAuthor($id)
    {
        self::$author = Author::find($id);
        if (self::$author->status == 1) {
            self::$author->status = 0;
        } else {
            self::$author->status = 1;
        }
        self::$author->save();
    }
}
