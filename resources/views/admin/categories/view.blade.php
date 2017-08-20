@extends('layouts.master')

@section('title')
    Category Products
@endsection

@section('categories')
    active-link
@endsection

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="section-title">
                <i class="fa fa-tags"></i>
                "{{ $products->first()->category->name }}" Products</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-bordered ">
                <thead>
                <tr class="info">
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
                            <a class="btn btn-danger" href="/admin/products/delete/{{ $product->id }}">Delete</a>
                            <a class="btn btn-primary" href="/admin/products/update/{{ $product->id }}">Update</a>
                            <a class="btn btn-warning" href="/admin/products/{{ $product->id }}">View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection