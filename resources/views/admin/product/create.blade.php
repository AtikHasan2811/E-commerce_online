@extends('admin.master')


@section('title','Form Insert')


@push('css')

@endpush

@section('content')
    <div class="container-fluid mb-3">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: underline; margin-top: 25px;">
                <h3>Add New Product</h3>
                <div class="col-md-6">
                    <div class="panel-body">
                        <form action="{{ route('produt.store') }}" method="post" role="form" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group{{$errors->has('pro_name')?' has-error':''}}">
                                <label for="pro_name">Name</label>
                                <input type="text" class="form-control" name="pro_name" id="pro_name" placeholder="Product Name">
                                <span class="text-danger">{{$errors->first('pro_name')}}</span>
                            </div>


                            <div class="form-group{{$errors->has('pro_code')?' has-error':''}}">
                                <label for="pro_code">Code</label>
                                <input type="text" class="form-control" name="pro_code" id="pro_code" placeholder="Code">
                                <span class="text-danger">{{$errors->first('pro_code')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('pro_price')?' has-error':''}}">
                                <label for="pro_price">Price</label>
                                <input type="text" class="form-control" name="pro_price" id="pro_price" placeholder="Price">
                                <span class="text-danger">{{$errors->first('pro_price')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('stock')?' has-error':''}}">
                                <label for="stock">Stock</label>
                                <input type="text" class="form-control" name="stock" id="stock" placeholder="Stock">
                                <span class="text-danger">{{$errors->first('stock')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('pro_info')?' has-error':''}}">
                                <label for="pro_info">Description</label>
                                <textarea name="pro_info" id="pro_info" rows="5" class="form-control"></textarea>
                                <span class="text-danger">{{$errors->first('pro_info')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('category_id')?' has-error':''}}">
                                <label for="category_id">Category</label>

                                <select name="a" id="category_i" class="form-control">
                                    <option value=""> -- Select Category -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>


                                <span class="text-danger">{{$errors->first('category_id')}}</span>
                            </div>


                            <div class="form-group{{$errors->has('image')?' has-error':''}}">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                <span class="text-danger">{{$errors->first('image')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('spl_price')?' has-error':''}}">
                                <label for="spl_price">Sale Price</label>
                                <input type="text" class="form-control" name="spl_price" id="spl_price" placeholder="Sale Price">
                                <span class="text-danger">{{$errors->first('spl_price')}}</span>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block" >Submit</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

@push('script')

@endpush



