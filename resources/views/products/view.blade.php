@extends('layouts.master')

@section('title')
    View Product
@endsection

@section('products')
    active
@endsection

@section('content')
    <h1 class="text-center">View "{{ $product->name }}"</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group text-center">
                <h2>Quantity : {{ $product->quantity }}</h2>
            </div>

            <div class="form-group text-center">
                <h2>Category : {{ $product->category->name }}</h2>
            </div>

            <div class="form-group text-center">
                <h2>Price : {{ $product->price }}</h2>
            </div>

            <div class="form-group text-center">
                <img src="/{{ env('imagePath') }}{{$product->image}}" alt="{{ $product->name }}">
            </div>
            
            <div class="form-group text-center">
                <a href="/products" class="btn btn-info">Back To List</a>
            </div>
        </div>
    </div>
@endsection