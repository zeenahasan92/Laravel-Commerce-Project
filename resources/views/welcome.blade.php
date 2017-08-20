@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <style>
        .product {
            height: 200px;
            width: 100%;
        }
    </style>
@endsection


@section('content')

    @include('layouts.slider')

    <div v-for="(product,index) in products" v-if="index < 3" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="section-title">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                @{{ product.name }}</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-4" v-for="(item,index) in product.products" v-if="index < 3">

                <img class="img-thumbnail product"
                     :src="'/uploaded_images/'+item.image"
                     :alt="item.name">


                <h4 class="text-center"><b>@{{ item.name }}</b> -
                    <span style="color:maroon;font-weight: bold">$ @{{ item.price }}</span>
                </h4>

                <p>@{{ item.description.substring(0, 70)+' . . .' }}</p>

                @if (Auth::guest())

                    <a :href="'/product/view/'+item.id" class="btn btn-primary form-control">
                        <span class="fa fa-list"> View</span>
                    </a>
                @else
                    <button @click="addToCart(item.id)" class="btn btn-success">
                        <span class="fa fa-cart-plus"></span> Add To Cart
                    </button>

                    <a :href="'/product/view/'+item.id" class="btn btn-primary">
                        <span class="fa fa-list"></span> View
                    </a>
                @endif
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
