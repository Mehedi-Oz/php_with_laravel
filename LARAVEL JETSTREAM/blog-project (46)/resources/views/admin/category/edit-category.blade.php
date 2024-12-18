@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Update Category Form</h6>
                        {{session('message')}}
                        <hr/>
                        <form class="row g-3" action="{{route('category.update')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$category->id}}">
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="category_name"
                                       value="{{$category->category_name}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">New Image</label>
                                <input type="file" class="form-control" name="category_image">

                                <label class="form-label">Current Image</label>
                                <img src="{{asset($category->category_image)}}"
                                     style="height: 50px; width: 50px">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
