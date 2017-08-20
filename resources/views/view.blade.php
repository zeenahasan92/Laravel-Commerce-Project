@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('search.css') }}">
    <style>
        .product {
            max-height: 340px;
        }
    </style>
@endsection


@section('content')

    <div class="panel panel-default">
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
                </div>
                <div class="col-md-6">
                    <img class="img-rounded product img-responsive pull-right" src="/{{ env('imagePath') }}{{$product->image}}"
                         alt="{{ $product->name }}">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('js')
    <script src="{{ asset('js/vue.js') }}"></script>
@endsection

