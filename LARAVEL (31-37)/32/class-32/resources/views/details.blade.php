@extends('master')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('asset')}}/image/{{$product['image']}}" alt="" class="img-fluid"
                             style="height: 380px; width: 380px">
                    </div>
                    <div class="col-md-8">
                        <h3>{{$product['name']}}</h3>
                        <h5>Category: {{$product['category_name']}}</h5>
                        <h5>{{$product['price']}}</h5>
                        <h5>{{$product['description']}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
