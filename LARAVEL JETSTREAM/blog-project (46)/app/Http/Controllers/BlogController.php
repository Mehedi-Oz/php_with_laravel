<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Author;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        return view('frontEnd.home.home', [
            'blogs' => Blog::with('category:id,category_name', 'author:id,author_name,author_image')->get()
        ]);
    }

    public function addBlog()
    {
        return view('admin.blog.add-blog', [
//            'categories' => Category::where('status', 1)->orderby('id', 'desc')->get(),
            'categories' => Category::where('status', 1)->get(),
            'authors' => Author::where('status', 1)->get(),
        ]);
    }

    public function saveBlog(Request $request)
    {
        Blog::saveBlog($request);
        return back()->with('success', 'Blog saved successfully');
    }

    public function manageBlog()
    {
        $blogs = Blog::with('category:id,category_name', 'author:id,author_name')->get();
        return view('admin.blog.manage-blog', [
            'blogs' => $blogs
        ]);
    }

    public function editBlog($id)
    {
        $blog = Blog::with('category:id,category_name', 'author:id,author_name')->find($id);
        return view('admin.blog.edit-blog', [
            'blog' => $blog,
            'categories' => Category::where('status', 1)->get(),
            'authors' => Author::where('status', 1)->get()
        ]);
    }

    public function deleteBlog($request)
    {

    }

    public function updateBlog(Request $request)
    {
    }

    public function statusBlog($id)
    {

    }

    public function blogDetails($slug)
    {
        $blogDetails = Blog::where('slug', $slug)->first();
        $blogCategory = $blogDetails->category_id;
        $relatedBlogs = Blog::where('category_id', $blogCategory)->get();
        $comment = Comment::where('blog_id', $blogDetails->id)->get();
//        return $relatedBlogs;
        return view('frontEnd.home.blog-details', [
            'blog' => $blogDetails,
            'relatedBlogs' => $relatedBlogs,
            'comments' => Comment::where('blog_id', $blogDetails->id)->get()
        ]);
    }
}
