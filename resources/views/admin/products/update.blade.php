@extends('layouts.master')

@section('title')
    Update Product
@endsection

@section('products')
    active-link
@endsection

@section('content')
    <h1 class="text-center">Update "{{ $product->name }}"</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="Text" value="{{ $product->name  }}" class="form-control" name="name">
                    @if ($errors->has('name'))
                        <span class="help-block">
                         <strong>{{ $errors->first('name') }}</strong>
                         </span>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('quantity') ? ' has-error' : '' }}">
                    <input type="Text" value="{{ $product->quantity  }}" class="form-control" name="quantity">
                    @if ($errors->has('quantity'))
                        <span class="help-block">
                         <strong>{{ $errors->first('quantity') }}</strong>
                         </span>
                    @endif
                </div>


                <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                    <input type="Text" name="price" value="{{ $product->price  }}" class="form-control"
                           placeholder="Price in Dollar">
                    @if ($errors->has('price'))
                        <span class="help-block">
                         <strong>{{ $errors->first('price') }}</strong>
                         </span>
                    @endif
                </div>

                <div class="form-group  {{ $errors->has('description') ? ' has-error' : '' }}">
                    <textarea cols="20" name="description" class="form-control"
                              placeholder="Description">{{ $product->description  }}</textarea>
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
                            <option value="{{ $category->id }}" {{ ($category->id == $product->category_id)?'selected':'' }} >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('categories'))
                        <span class="help-block">
                         <strong>{{ $errors->first('categories') }}</strong>
                         </span>
                    @endif
                </div>


                <div class="form-group">
                    <a href="/admin/products" class="btn btn-primary">Back To List
                    <i class="fa fa-arrow-left"></i></a>
                    <button class="btn btn-success" type="Submit">update
                    <i class="fa fa-edit"></i></button>
                </div>

            </form>
        </div>
    </div>
@endsection