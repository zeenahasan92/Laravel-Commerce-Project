@extends('layouts.master')

@section('title')
    Products
@endsection

@section('products')
    active-link
@endsection

@section('content')
    <h1 class="text-center">Products</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <form method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="Text" name="name" class="form-control" placeholder="Product Name">
                    @if ($errors->has('name'))
                        <span class="help-block">
                         <strong>{{ $errors->first('name') }}</strong>
                         </span>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('quantity') ? ' has-error' : '' }}">
                    <input type="Text" name="quantity" class="form-control" placeholder="Quantity">
                    @if ($errors->has('quantity'))
                        <span class="help-block">
                         <strong>{{ $errors->first('quantity') }}</strong>
                         </span>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                    <input type="Text" name="price" class="form-control" placeholder="Price in Dollar">
                    @if ($errors->has('price'))
                        <span class="help-block">
                         <strong>{{ $errors->first('price') }}</strong>
                         </span>
                    @endif
                </div>

                <div class="form-group  {{ $errors->has('description') ? ' has-error' : '' }}">
                    <textarea cols="20" name="description" class="form-control" placeholder="Description"></textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">
                         <strong>{{ $errors->first('description') }}</strong>
                         </span>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                    <input type="file" name="image" class="form-control">
                    @if ($errors->has('image'))
                        <span class="help-block">
                         <strong>{{ $errors->first('image') }}</strong>
                         </span>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('categories') ? ' has-error' : '' }}">
                    <select name="categories" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('categories'))
                        <span class="help-block">
                         <strong>{{ $errors->first('categories') }}</strong>
                         </span>
                    @endif
                </div>


                <div class="form-group">
                    <a class="btn btn-primary" href="/admin/products">Back To List
                     <i class="fa fa-arrow-left"></i></a>
                    <button class="btn btn-success" type="Submit">Add
                     <i class="fa fa-plus"></i></button>
                </div>


            </form>
        </div>
    </div>
@endsection