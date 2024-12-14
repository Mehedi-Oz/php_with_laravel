@extends('master')

@section('content')

    <div class="py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header text-center">
                            MANAGE DEPARTMENT FORM
                            {{session('message')}}
                        </div>
                        <div class="card-body">
                            <form action="{{route('update.department')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Department Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$department->$department_name}}" placeholder="" name="department_name">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Department Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$department->$department_code}}" placeholder="" name="department_code">
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
