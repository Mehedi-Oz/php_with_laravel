@extends('frontEnd.master')

@section('content')
    {{--    <div class="row align-items-center m-5">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="blog-content-warp p-4">
                        <h3 class="text-center text-danger">{{session('message')}}</h3>
                        <form action="{{route('new.user')}}" method="post" class="comment-form">
                            @csrf
                            <h5>Registration</h5>

                            <div class="row">
                                <div class="col-12 col-md-6 mb-4">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="customer_name" placeholder="">
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="customer_email" placeholder="">
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" name="customer_phone" placeholder="">
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control" name="customer_password" placeholder="">
                                </div>
                            </div>
                            <button class="btn btn-solid" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>--}}

    <div class="row my-5">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h3 class="text-center">Sign In</h3>
                        <h5 class="text-center text-success">{{session('message')}}</h5>
                        <form class="register-form mt-3" action="{{route('login.customer')}}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-md-12 mb-4">
                                    <input type="text" name="user_name" class="form-control"
                                           placeholder="email or phone">
                                </div>

                                <div class="col-12 col-md-12 mb-4">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <button class="btn btn-solid form-control">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
