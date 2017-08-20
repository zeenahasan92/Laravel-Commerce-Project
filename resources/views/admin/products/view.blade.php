@extends('layouts.master')

@section('title')
    View Product
@endsection

@section('products')
    active-link
@endsection

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="section-title">{{ $product->name }}</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <h2>Quantity : <br>
                        {{ $product->quantity }}</h2>
                    <h3>Category : <br>
                        {{ $product->category->name }}</h3>
                    <h4>Price : <br>
                        {{ $product->price }}</h4>
                    <h4>Description : <br>
                        {{ $product->description }}</h4>
                    <div class="form-group">
                        <a href="/admin/products" class="btn btn-info">Back To List
                        <i class="fa fa-arrow-left"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-rounded product img-responsive pull-right"
                         src="/{{ env('imagePath') }}{{$product->image}}"
                         alt="{{ $product->name }}">

                </div>
            </div>
        </div>
    </div>
@endsection