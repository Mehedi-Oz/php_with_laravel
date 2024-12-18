@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Update Blog Form</h6>
                        {{session('message')}}
                        <hr/>
                        <form class="row g-3" action="{{route('blog.update')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$blog->id}}">
                            <div class="col-12">
                                <label class="form-label">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Select A Category</option>
                                    @foreach($categories as $category)
                                        <option
                                            value="{{$category->id}}"{{$category->id==$blog->category_id?'selected': ''}}>{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author</label>
                                <select name="author_id" id="" class="form-control">
                                    <option value="">Select A Author</option>
                                    @foreach($authors as $author)
                                        <option
                                            value="{{$author->id}}" {{$author->id==$blog->author_id? 'selected': ''}}>{{$author->author_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Blog Title</label>
                                <input type="text" class="form-control" name="blog_title" value="{{$blog->blog_title}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{$blog->slug}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control">{{$blog->description}}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" value="{{$blog->date}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="blog_image">
                                <img src="{{asset($blog->blog_image)}}"
                                     style="height: 50px; width: 50px">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Blog</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
