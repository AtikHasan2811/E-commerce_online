
@extends('front.master')


@section('title','Cart Page')


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


    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">

                <?php
                $catinfo= Cart::content();
//                echo "<pre>";
//                print_r($catinfo);


                ?>

                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Image</td>
                        <td class="description">Name</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>



                    @foreach($catinfo as $v_contents)
                    <tr>

                        <td class="cart_product">
                            <a href=""><img src="{{ URL::to('storage/productImage/'.$v_contents->options->image)}} " height="80px" width="100px" alt="no image found"></a>
{{--                            <img class="card-img-top" src="{{ asset('storage/productImage/'.$product->image) }}" alt="Card image cap">--}}
                        </td>


                        <td class="cart_description">
                            <h4><a href="">{{ $v_contents->name }}</a></h4>

                        </td>


                        <td class="cart_price">
                            <h4><a href="">{{ $v_contents->price }}</a></h4>
                        </td>


                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{ url('update') }}" method="post">
                                    @csrf
                                    <input class="cart_quantity_input" type="text" name="qty" value="{{ $v_contents->qty }}" autocomplete="off" size="2">
                                    <input class="cart_quantity_input btn btn-info" type="hidden" name="rowId" value="{{ $v_contents->rowId }}" autocomplete="off" size="2" >
                                    <input  type="submit" name="submit" value="update" class="btn btn-sm btn-default" size="2">
                                </form>


                            </div>
                        </td>


                        <td class="cart_total">
                            <h4><a href="">{{ $v_contents->total }}</a></h4>
                        </td>


                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{ URL::to('delete/'.$v_contents->rowId) }}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
{{--                <div class="col-sm-6">--}}
{{--                    <div class="chose_area">--}}
{{--                        <ul class="user_option">--}}
{{--                            <li>--}}
{{--                                <input type="checkbox">--}}
{{--                                <label>Use Coupon Code</label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="checkbox">--}}
{{--                                <label>Use Gift Voucher</label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="checkbox">--}}
{{--                                <label>Estimate Shipping & Taxes</label>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <ul class="user_info">--}}
{{--                            <li class="single_field">--}}
{{--                                <label>Country:</label>--}}
{{--                                <select>--}}
{{--                                    <option>United States</option>--}}
{{--                                    <option>Bangladesh</option>--}}
{{--                                    <option>UK</option>--}}
{{--                                    <option>India</option>--}}
{{--                                    <option>Pakistan</option>--}}
{{--                                    <option>Ucrane</option>--}}
{{--                                    <option>Canada</option>--}}
{{--                                    <option>Dubai</option>--}}
{{--                                </select>--}}

{{--                            </li>--}}
{{--                            <li class="single_field">--}}
{{--                                <label>Region / State:</label>--}}
{{--                                <select>--}}
{{--                                    <option>Select</option>--}}
{{--                                    <option>Dhaka</option>--}}
{{--                                    <option>London</option>--}}
{{--                                    <option>Dillih</option>--}}
{{--                                    <option>Lahore</option>--}}
{{--                                    <option>Alaska</option>--}}
{{--                                    <option>Canada</option>--}}
{{--                                    <option>Dubai</option>--}}
{{--                                </select>--}}

{{--                            </li>--}}
{{--                            <li class="single_field zip-field">--}}
{{--                                <label>Zip Code:</label>--}}
{{--                                <input type="text">--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <a class="btn btn-default update" href="">Get Quotes</a>--}}
{{--                        <a class="btn btn-default check_out" href="">Continue</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-sm-10">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>{{ Cart::subtotal() }}</span></li>
                            <li>Eco Tax <span>{{ Cart::tax() }}</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>{{ Cart::total() }}</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href=" {{url('admin/checkout')}}">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->


@endsection

@push('js')
    <script src="{{asset('/')}}cart/js/jquery.js"></script>
    <script src="{{asset('/')}}cart/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('/')}}cart/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('/')}}cart/js/main.js"></script>
@endpush
