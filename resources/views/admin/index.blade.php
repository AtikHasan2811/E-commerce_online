@extends('admin.master')


@section('title','Index Page')


@push('css')

@endpush

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <br>


       <h2 style="text-align: center;">Welcome to Our A.BDSHOP</h2>
        <div class="img-responsive text-center"><img src="{{ asset('/')}}images/logo.png"  style="height: 75px" alt=""> </div>



        <hr>
    </main>

@endsection

@push('script')

@endpush
