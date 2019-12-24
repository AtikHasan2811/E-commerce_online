<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use App\products;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class ProdutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $products=products::latest()->get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::all();
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'pro_name' => 'required',
            'pro_code' => 'required',
            'pro_price' => 'required',
            'pro_info' => 'required',
            'image' => 'required',
            'spl_price' => 'required',
        ]);

        $image =$request->file('image');
        $slug = str_slug($request->pro_name);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName=$slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('productImage')){
                Storage::disk('public')->makeDirectory('productImage');
            }
            $postImage = Image::make($image)->resize(1600,1066)->stream();
            Storage::disk('public')->put('productImage/'.$imageName,$postImage);
        }else{
            $imageName = 'default.png';
        }

        $product= new products();
        $product->pro_name = $request->pro_name;
        $product->pro_code = $request->pro_code;
        $product->pro_price = $request->pro_price;
        $product->stock = $request->stock;
        $product->pro_info = $request->pro_info;
        $product->image = $imageName;
        $product->spl_price = $request->spl_price;
        $product->pro_name = $request->pro_name;
        $product->category_id = $request->a;
        $product->pro_name = $request->pro_name;
        $product->save();



        return redirect()->route('produt.create');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produc=products::find($id);
        if(Storage::disk('public')->exists('productImage/'.$produc->image)){
            Storage::disk('public')->delete('productImage/'.$produc->image);
        }
        $produc->delete();
        return redirect()->back();




    }
}
