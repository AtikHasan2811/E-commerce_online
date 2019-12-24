<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartChackoutController extends Controller
{
    public function checkout(){
       return view('cart.checkout');
    }
}
