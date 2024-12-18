<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function addAuthor()
    {
        return view('admin.author.add-author');
    }

    public function saveAuthor(Request $request)
    {
        Author::saveAuthor($request);
        return back()->with('message', 'Author Added Successfully!!');
    }

    public function editAuthor($id)
    {
        return view('admin.author.edit-author', [
            'author' => Author::find($id)
        ]);
    }

    public function manageAuthor()
    {
        return view('admin.author.manage-author', ['authors' => Author::all()]);
    }

    public function statusAuthor($id)
    {
        Author::statusAuthor($id);
        return back()->with('message', 'Author Status Changed Successfully!!');
    }

    public function updateAuthor($id)
    {
        Author::updateAuthor($id);
        return back()->with('message', 'Author Updated Successfully!!');
    }

    public function deleteAuthor(Request $request)
    {
        Author::deleteAuthor($request->id);
        return back()->with('message', 'Author Deleted Successfully!!');
    }
}
