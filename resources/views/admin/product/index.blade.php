@extends('admin.master')


@section('title','List Product')


@push('css')

@endpush

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <h3>Products</h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $key=>$product)
                    <tr>
                        <td><img src="{{ asset('storage/productImage/'.$product->image) }}" alt="not found" width="80"></td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->pro_name}}</td>
                        <td>$ {{$product->pro_price}}</td>
                        <td>
                            <form action="{{route('produt.destroy',$product->id)}}" method="post">
                               @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                            </form>

                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </main>

@endsection

@push('script')

@endpush




{{--@extends('admin.master')--}}
{{--@section('title','List Products')--}}
{{--@section('content')--}}
{{--    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">--}}
{{--        <h3>Products</h3>--}}
{{--        <div class="table-responsive">--}}
{{--            <table class="table table-hover">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Image</th>--}}
{{--                    <th>Name</th>--}}
{{--                    <th>Price</th>--}}
{{--                    <th>Delete</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}

{{--                @foreach($products as $product)--}}
{{--                    <tr>--}}
{{--                        <td><img src="{{url('images',$product->image)}}" alt="" width="80"></td>--}}
{{--                        <td>{{$product->pro_name}}</td>--}}
{{--                        <td>$ {{$product->pro_price}}</td>--}}
{{--                        <td>--}}
{{--                            <form action="{{route('product.destroy',$product->id)}}" method="post">--}}
{{--                                {{csrf_field()}}--}}
{{--                                {{method_field('DELETE')}}--}}
{{--                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">--}}
{{--                            </form>--}}

{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}


{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </main>--}}
{{--@endsection--}}
