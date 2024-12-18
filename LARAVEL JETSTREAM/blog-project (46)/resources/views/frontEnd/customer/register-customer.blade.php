@extends('frontEnd.master')

@section('content')
    <div class="row my-5">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h3 class="text-center">Registration Form</h3>
                        <h5 class="text-center text-success">{{session('message')}}</h5>
                        <form class="register-form mt-3" action="{{route('new.customer')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                </div>

                                <div class="col-12 col-md-6 mb-4">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <button class="btn btn-solid form-control">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
