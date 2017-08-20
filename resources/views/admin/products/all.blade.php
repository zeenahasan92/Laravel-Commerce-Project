@extends('layouts.master')

@section('title')
    Products
@endsection

@section('products')
    active-link
@endsection

@section('content')

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="section-title">
                <i class="fa fa-product-hunt"></i>
                Products</h3>
        </div>

        <div class="panel-body">
            <a href="/admin/products/add" class="btn btn-primary">Add Product
            <i class="fa fa-plus"></i></a>
            <br><br>
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="bg-primary">
                    <th class="text-center">Name</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr class="text-center bold">
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}$</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a class="btn btn-danger" href="/admin/products/delete/{{ $product->id }}">Delete
                                <span class="fa fa-remove"></span></a>
                            <a class="btn btn-primary" href="/admin/products/update/{{ $product->id }}">Update
                                <span class="fa fa-edit"></span></a>
                            <a class="btn btn-warning" href="/admin/products/{{ $product->id }}">View
                                <span class="fa fa-eye"></span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center">
        {{ $products->links() }}
    </div>









@endsection