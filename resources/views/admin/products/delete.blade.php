@extends('layouts.master')

@section('title')
    Delete Products
@endsection

@section('products')
    active-link
@endsection

@section('content')
    <h1 class="text-center">Delete "{{ $product->name }}"</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST">
                {{ csrf_field() }}

                <div class="form-group text-center">
                    <h2>Quantity : {{ $product->quantity }}</h2>
                </div>

                <div class="form-group text-center">
                    <h2>Category : {{ $product->category->name }}</h2>
                </div>

                <div class="form-group text-center">
                    <img src="/{{ env('imagePath') }}{{ $product->image }}" width="200" height="200" alt="">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <a href="/admin/products" class="btn btn-primary">Back To List
                         <i class="fa fa-arrow-left"></i></a>
                        <button class="btn btn-danger" type="Submit">Delete
                         <i class="fa fa-remove"></i></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection