@extends('layouts.master')

@section('title')
    Customer Order
@endsection

@section('orders')
    active
@endsection

@section('css')
    <style>
        .card {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="section-title">{{ $user->name }} Order</h3>
        </div>
        <div class="panel-body">
            <div class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                        <b>{{ $product->name }}</b>
                        <span style="color:maroon;"> $ {{ $product->price }}</span>
                    </li>
                @endforeach
            </div>
            <div class="text-center">

                <a href="/admin/orders" class="btn btn-primary">Back To List
                    <i class="fa fa-arrow-left"></i></a>
            </div>
        </div>
    </div>
@endsection


