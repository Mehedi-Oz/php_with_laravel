@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Add Category Form</h6>
                        {{session('message')}}
                        <hr/>
                        <form class="row g-3" action="{{route('new.category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="category_name">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="category_image">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
