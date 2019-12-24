<?php

namespace App\Http\Controllers;

use App\category;
use App\products;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CardController extends Controller
{
    public function index($id){
  $product_info = products::find($id);
        $data= [''];
        $data['qty']=1;
        $data['id']=$product_info->id;
        $data['name']=$product_info->pro_name;
        $data['price']=$product_info->pro_price;
        $data['weight']=0;
        $data['options']['image']=$product_info->image;
        Cart::add($data);
        return Redirect::to('/show-card');

  }

    public function addItem(){


      $categorys = category::all();
      return view('cart.index',compact('categorys'));

    }

    public function delete_to_cart($id){
     Cart::update($id,0);
        return Redirect::to('/show-card');

    }

    public function update(request $request){
       $qty = $request->qty;
       $rowId =$request->rowId;
        Cart::update($rowId,$qty);
        return Redirect::to('/show-card');

    }


}
