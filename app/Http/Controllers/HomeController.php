<?php

namespace App\Http\Controllers;

use App\category;
use App\products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorys=category::all();
        $products = products::latest()->paginate(6);
        return view('front.home', compact('products','categorys'));

    }

    public function shop()
    {
        $products = products::latest()->paginate(6);
        $categorys = category::all();
        return view('front.shop', compact('products','categorys'));

    }

    public function showCates($id){
        $products = products::where('category_id',$id)->get();
        $categorys = category::find($id);
        return view('front.category_list_pro', compact('products','categorys'));


    }


    public function detailPro($id){

        $product = products::find($id);
  return view('front.product_detail',compact('product'));


    }
}
