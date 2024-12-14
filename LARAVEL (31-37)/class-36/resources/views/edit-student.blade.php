@extends('master')

@section('content')

    <div class="py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header text-center">
                            STUDENT EDIT FORM
                            {{session('message')}}
                        </div>
                        <div class="card-body">
                            <form action="{{route('update.student')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$student->id}}">
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Seip Id</label>
                                    <div class="col-md-9">
                                        <input type="text" name="seid" class="form-control" value="{{$student->seid}}"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" value="{{$student->name}}"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" class="form-control" value="{{$student->email}}"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" class="form-control" value="{{$student->phone}}"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="address">{{$student->address}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Department</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$student->department}}"
                                               name="department">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Course Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$student->course_name}}"
                                               name="course_name">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" placeholder="">
                                        <img src="{{asset($student->image)}}" class="img-fluid" alt=""
                                             style="height: 250px; width: 250px">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="Submit" value="Save Info"
                                               class="form-control btn btn-outline-success"
                                               placeholder="">
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
