
@extends('front.master')


@section('title','Custom_Login')


@push('css')
    <link href="{{asset('/')}}cart/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}cart/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}cart/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{asset('/')}}cart/css/price-range.css" rel="stylesheet">
    <link href="{{asset('/')}}cart/css/animate.css" rel="stylesheet">
    <link href="{{asset('/')}}cart/css/main.css" rel="stylesheet">
    <link href="{{asset('/')}}cart/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('/')}}cart/js/html5shiv.js"></script>
    <script src="{{asset('/')}}cart/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
@endpush

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form action="{{ url('customer_login') }}" method="post">
                        @csrf
                        <input type="email" required placeholder="Email Address" name="email" />
                        <input type="password" placeholder="Password" name="password" />
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-5">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="{{ url('customer_registration') }}" method="post">
                        @csrf
                        <input type="text" placeholder="Full Name" name="name" required/>
                        <input type="email" placeholder="Email Address" name="email"required />
                        <input type="password" placeholder="Password" name="password" required/>
                        <input type="text" placeholder="Mobile Number" name="phoneNumber"required />
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>

@endsection


@push('js')
    <script src="{{asset('/')}}cart/js/jquery.js"></script>
    <script src="{{asset('/')}}cart/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('/')}}cart/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('/')}}cart/js/main.js"></script>

@endpush





