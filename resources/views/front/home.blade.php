@extends('front.master')


@section('title','Home Page')


@push('css')

@endpush

@section('content')
    <main role="main">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/productImage/pic/abc.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/productImage/pic/bc.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/productImage/pic/d.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>





{{--        ............................end slider..........................--}}

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{ asset('storage/productImage/'.$product->image) }}" alt="Card image cap">

                            <div class="card-body">
                                <del>$ {{ $product->pro_price }}</del>
                                <span class="price text-muted float-right">$ {{$product->spl_price}}</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{url('productDetail',$product->id)}}" class="btn btn-sm btn-outline-secondary">View Product</a>

                                        <a href="{{ url('cart',$product->id) }}" class="btn btn-sm btn-outline-secondary">Add To Card  <i class="fa fa-shopping-card"></i></a>
                                    </div>

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

@push('script')

@endpush
