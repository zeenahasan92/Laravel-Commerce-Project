@extends('layouts.master')

@section('title')
      Category Products
@endsection

@section('categories')
    active
@endsection

@section('content')
    <h1 class="text-center">"{{ $products->first()->category->name }}" Products</h1>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-bordered ">
                <thead>
                <tr class="warning">
                    <th class="text-center">Name</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr class="text-center bold">
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a class="btn btn-danger" href="/products/delete/{{ $product->id }}">Delete</a>
                            <a class="btn btn-primary" href="/products/update/{{ $product->id }}">Update</a>
                            <a class="btn btn-warning" href="/products/{{ $product->id }}">View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection