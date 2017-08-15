@extends('layouts.master')

@section('title')
    Update Category
@endsection

@section('categories')
    active
@endsection

@section('content')
    <h1 class="text-center">Update "{{ $category->name }}"</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label bold">Update Category</label>
                    <div class="input-group">
                        <span class="input-group-addon bold">Category</span>
                        <input type="Text" value="{{ $category->name  }}" class="form-control" name="name">
                        <span class="input-group-btn">
                   <button class="btn btn-primary" type="Submit">update</button>
                </span>
                    </div>
                </div>
            </form>
            <a href="/categories" class="btn btn-info">Back To List</a>
        </div>
    </div>
@endsection