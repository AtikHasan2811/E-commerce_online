@extends('front.master')


@section('title','Shop Page')


@push('css')

@endpush

@section('content')
    <main role="main">

    <h3> Category Name  :  {{ $categorys->name }}</h3>



        {{--        ............................end slider..........................--}}

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{ asset('storage/productImage/'.$product->image) }}" alt="Card image cap">

                                <div class="card-body">
                                    <p class="card-text">{{ $product->pro_name }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('productDetail',$product->id)}}" class="btn btn-sm btn-outline-secondary">View Product</a>
                                            <a href="{{ url('cart',$product->id) }}" class="btn btn-sm btn-outline-secondary">Add To Card  <i class="fa fa-shopping-card"></i></a>
                                        </div>
                                        {{--                                        <small class="text-muted">9 mins</small>--}}
                                    </div>
                                </div>

                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>



    </main>

@endsection

@push('js')

@endpush
