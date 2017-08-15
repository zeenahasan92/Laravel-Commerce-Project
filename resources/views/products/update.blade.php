@extends('layouts.master')

@section('title')
    Update Product
@endsection

@section('categories')
    active
@endsection

@section('content')
    <h1 class="text-center">Update "{{ $product->name }}"</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="Text" value="{{ $product->name  }}" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <input type="Text" value="{{ $product->quantity  }}" class="form-control" name="quantity">
                </div>
                <div class="form-group">
                    <select name="categories" class="form-control">
                        @foreach($categories as $category)
                            @if($category->id == $product->category_id )
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}" >{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <a href="/products" class="btn btn-info">Back To List</a>
                    <button class="btn btn-primary" type="Submit">update</button>
                </div>
            </form>
        </div>
    </div>
@endsection