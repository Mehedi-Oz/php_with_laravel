@extends('master')

@section('content')

    <div class="container">
        <div class="row mt-5">
            @foreach($products as $product)
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{asset('asset')}}/image/{{$product['image']}}" alt="" class="img-fluid"
                                 style="height: 380px; width: 380px">
                        </div>
                        <div class="card-body">
                            <h3>{{$product['name']}}</h3>
                            <h5>{{$product['price']}}</h5>
                            <h5>{{$product['description']}}</h5>
                            <a href="{{route('details',['id'=>$product['id']])}}" class="btn btn-success">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
