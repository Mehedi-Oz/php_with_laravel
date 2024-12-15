@extends('master')

@section('title')
    Add Department
@endsection

@section('content')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>DEPARTMENT FORM</h3>
                            {{session('message')}}
                        </div>

                        <div class="card-body">
                            <form action="{{route('add.department')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Department Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="department_name" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Department Code</label>
                                    <div class="col-md-9">
                                        <input type="text" name="department_code" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="submit" value="Save Department Info"
                                               class="form-control btn btn-outline-success" placeholder="">
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
