@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Update Author Form</h6>
                        {{session('message')}}
                        <hr/>
                        <form class="row g-3" action="{{route('update.author')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" value="{{$author->id}}" name="id">
                            <div class="col-12">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="author_name" value="{{$author->author_name}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="author_image">
                                <img src="{{asset($author->auhtor_image)}}"
                                     style="height: 50px; width: 50px">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update Author</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
