<?php

namespace App\Http\Controllers;

use App\customer;
use App\order;
use App\order_detail;
use App\payment;
use App\shift_Table;
use Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class CartChackoutController extends Controller
{
    public function custom_login(){

       return view('front.Login');
    }


//    ..................................registation.............................
    public function customer_registration(Request $request){
        $data = new customer();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password =md5($request->password);
        $data->phoneNumber = $request->phoneNumber;
        $data->save();

        Session::put('id',$data->id);
        return Redirect('/checkout');
    }

    public function checkout(){

        return view('cart.checkout');
    }
//......................................................................

//.................................shoping datelse and pament..............
    public function shepingDetelse(Request $request){

        $request->validate([
            'email' => 'required|email'
        ]);
       $data = new shift_Table();
       $data->email = $request->email;
       $data->firstName = $request->firstName;
       $data->lastName = $request->lastName;
       $data->addresh = $request->addresh;
       $data->mobileNumber = $request->mobileNumber;
       $data->city = $request->city;
       $data->save();
       $shipping = $data;

       Session::put('shipping_id',$shipping->id);
       return Redirect::to('/payment');
}

    public function payment(){

    return view('front.payment');

    }

//................................................................................


  public function customer_login(Request $request){
        $password =md5($request->password);
        $data = customer::where('email',$request->email)
            ->where('password',$password)
            ->first();

        if ($data){
            Session::put('id',$data->id);
            return view('cart.checkout');
        }else{
           return Redirect::to('custom_login');
        }

  }

    public function chackout(){
        Session::flush();
        return Redirect::to('/');
    }


    public function order_place(Request $request){

            $payment_gateway = $request->payment_gateway;
            $data = new payment();
            $data->payment_method = $payment_gateway;
            $data->payment_status = 'pending';
            $data->save();
            $pamentID=$data->id;




        $value = new order();
        $value->customer_id =  Session::get('id',$data->id);
        $value->shift_Table_id = Session::get('shipping_id');
        $value->payment_id = $pamentID;
        $value->order_total = Cart::total();
        $value->order_status = 'pending';
        $value->save();


        $cartinfo =Cart::content();



        $container = new order_detail();
        foreach ($cartinfo as $info)
        {
            $container->order_id = $value->id;
            $container->products_id = $info->id;
            $container->product_name = $info->name;
            $container->product_price = $info->subtotal;


        }

        return Redirect::to('/');






    }




}

//id	email	firstName	lastName	addresh	mobileNumber	city	created_at	updated_at

