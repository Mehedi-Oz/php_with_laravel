@extends('master')

@section('content')

    <div class="container">
        <div class="card">
            <div class="row mt-5">
                <div class="col-md-4 mt-2">
                    <img src="{{asset('asset')}}/image/{{$product['image']}}" alt="" class="img-fluid"
                         style="height: 380px; width: 380px">
                </div>
                <div class="col-md-8 mt-2">
                    <h3>{{$product['name']}}</h3>
                    <h5>{{$product['category_name']}}</h5>
                    <h5>{{$product['price']}}</h5>
                    <h5>{{$product['description']}}</h5>
                </div>
            </div>
        </div>
    </div>

@endsection
