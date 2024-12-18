<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Author;

class Blog extends Model
{
    use HasFactory;

    public static $blog, $save_slug, $image, $imageNewName, $directory, $imgUrl;

    public static function saveBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->category_id = $request['category_id'];
        self::$blog->author_id = $request['author_id'];
        self::$blog->blog_title = $request['blog_title'];
        self::$blog->slug = self::makeSlug($request);
        self::$blog->description = $request['description'];
        self::$blog->date = $request['date'];
        self::$blog->blog_image = self::saveImage($request);
        self::$blog->save();
    }

    private static function makeSlug($request)
    {
        if ($request->slug) {
            self::$save_slug = $request->slug;

            return preg_replace('/[^A-Za-z0-9-]+/', '-', self::$save_slug);
        } else {
            self::$save_slug = $request->blog_title;
            return preg_replace('/[^A-Za-z0-9-]+/', '-', self::$save_slug);
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    private static function saveImage($request)
    {
        self::$image = $request->file('blog_image');
        self::$imageNewName = 'Blog_Image-' . rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'admin-asset/upload-images/blog-images/';

        if (!file_exists(self::$directory)) {
            mkdir(self::$directory, 0755, true);
        }

        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl = self::$directory . self::$imageNewName;
    }

    public static function deleteBlog($request)
    {
        self::$blog = Blog::find($request->id);

        if (self::$blog) {
            if (self::$blog->blog_image && file_exists(self::$blog->blog_image)) {
                unlink(self::$blog->blog_image);
            }
        }
        self::$blog->delete();
    }

    public static function updateBlog($request)
    {
        self::$blog = Blog::find($request->id);
        self::$blog->category_id = $request['category_id'];
        self::$blog->author_id = $request['author_id'];
        self::$blog->blog_title = $request['blog_title'];
        self::$blog->description = $request['description'];
        self::$blog->date = $request['date'];

        if (self::$blog) {
            if (self::$blog->blog_image && file_exists(self::$blog->blog_image)) {
                unlink(self::$blog->blog_image);
            }
            self::$blog->blog_image = self::saveImage($request);
        }
        self::$blog->save();
    }
}
