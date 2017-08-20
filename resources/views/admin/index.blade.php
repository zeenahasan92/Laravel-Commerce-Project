@extends('layouts.master')

@section('title')
    Admin
@endsection

@section('admin')
    active-link
@endsection

@section('css')
    <style>
        .margin {
            margin-bottom: 0;
            margin-top: 10px;
        }
    </style>
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12 ">
            <div class="alert alert-success margin">
                <h4><b>Welcome {{ Auth::guard('admin')->user()->name }}</b></h4>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row text-center pad-top">

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="div-square">
                <a href="/admin/users">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>{{ $users }} User</h4>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="div-square">
                <a href="/admin/products">
                    <i class="fa fa-product-hunt fa-5x"></i>
                    <h4>{{ $products }} Products</h4>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="div-square">
                <a href="/admin/categories">
                    <i class="fa fa-tags fa-5x"></i>
                    <h4>{{ $categories }} Categories</h4>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="div-square">
                <a href="/admin/orders">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                    <h4>{{ $orders }} Orders</h4>
                </a>
            </div>
        </div>
    </div>
    <h2>Admin Panel</h2>
    <p class="well">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </p>
@endsection


