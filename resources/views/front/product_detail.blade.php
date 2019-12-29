@extends('front.master')


@section('title','Detail Page')


@push('css')

@endpush

@section('content')

    <div class="container">
        <br><br>
        <div class="row">

                <div class="col-md-6 col-xs-12">
                    <div class="thumbnail">
{{--                        <img src="{{url('images',$product->image)}}" class="card-img">--}}
                        <img class="card-img-top" src="{{ asset('storage/productImage/'.$product->image) }}" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <h2>{{ $product->pro_name }}</h2>
                    <h5>{{$product->pro_info}}</h5>
                    <h2 class="text-danger">$ {{$product->spl_price}}</h2>
                    <p><b>Available : {{$product->stock}} In Stock</b></p>

                    <a href="{{ url('cart',$product->id) }}" class="btn btn-sm btn-outline-secondary">Add To Card  <i class="fa fa-shopping-card"></i></a>
                    <br>
                    <br>
                    <button class="btn btn-default btn-sm btn-danger">
                        WishList
                    </button>
                </div>
        </div>
        </div>


@endsection

@push('js')

@endpush
