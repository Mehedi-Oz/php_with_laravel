@extends('master')

@section('content')

    <div class="py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>STUDENT FORM</h2>
                            {{session('message')}}
                        </div>
                        <div class="card-body">
                            <form action="{{route('add.student')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-control col-md-3">Seip Id</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="seid">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-control col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-control col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-control col-md-3">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-control col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-control col-md-3">Department</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="department">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-control col-md-3">Course Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="course_name">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-control col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="submit" value="Save Info" class="form-control btn btn-outline-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
