@extends('layouts.app')

@section('title')
    Search
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
@endsection

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="section-title">Search Results</h3>
        </div>
        <div class="panel-body">

            <div class="mb20">
                @if(isset($searchMax))
                    <h2 class="lead">
                        <strong class="text-danger">
                            {{ $products->count() }}
                        </strong> results were found for the Price between
                        <strong class="text-danger">$ {{ $search }}</strong>
                        And
                        <strong class="text-danger">$ {{ $searchMax }}</strong>
                    </h2>
                @else
                    <h2 class="lead">
                        <strong class="text-danger">
                            {{ $products->count() }}
                        </strong> results were found for the search for
                        <strong class="text-danger">{{ $search }}</strong>
                    </h2>
                @endif
            </div>

            <section class="col-xs-12 col-sm-6 col-md-12">
                @foreach($products as $product)
                    <article class="search-result row">
                        <div class="col-xs-12 col-sm-12 col-md-3">
                            <a href="/product/view/{{$product->id }}" title="Lorem ipsum" class="thumbnail">
                                <img src="/{{ env('imagePath')  }}{{ $product->image }}"
                                     alt="{{ $product->name }}"/></a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2">
                            <ul class="meta-search">
                                <li>
                                    <i class="glyphicon glyphicon-calendar"></i>
                                    <span>
                                        {{ Carbon\Carbon::parse($product->created_at)->format('Y-m-d')}}
                                    </span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-time"></i>
                                    <span>
                                       {{ Carbon\Carbon::parse($product->created_at)->format('H:m')}}
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-money"></i>
                                    <span>{{ $product->price }}</span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-tags"></i>
                                    <span>{{ $product->category->name }}</span>
                                </li>

                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
                            <h3><a href="/product/view/{{$product->id }}" title="">{{ $product->name }}</a></h3>
                            <p>{{ $product->description }}</p>
                        </div>
                        <span class="clearfix borda"></span>
                    </article>
                @endforeach
            </section>
        </div>
    </div>

@endsection


@section('sidebar')
    @include('layouts.sidebar')
@endsection


@section('js')
    <script src="{{ asset('js/vue.js') }}"></script>
@endsection
