@extends('layouts.master')

@section('title')
    Products
@endsection

@section('products')
    active
@endsection

@section('content')
    <h1 class="text-center">Products</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <form method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="Text" name="name" class="form-control" placeholder="Product Name">
            </div>
            <div class="form-group">
                <input type="Text" name="quantity" class="form-control" placeholder="Quantity">
            </div>
            <div class="form-group">
                <input type="Text" name="price" class="form-control" placeholder="Price in Dollar">
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <select name="categories" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <a class="btn btn-warning" href="/products">Back To List</a>
                <button class="btn btn-primary" type="Submit">Add</button>
            </div>
        </form>
    </div>
    </div>
@endsection