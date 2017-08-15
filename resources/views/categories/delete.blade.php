@extends('layouts.master')

@section('title')
    Categories
@endsection

@section('categories')
    active
@endsection

@section('content')
    <h1 class="text-center">Delete "{{ $category->name }}"</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="text-center">
                        <a href="/categories" class="btn btn-info">Back To List</a>
                        <button class="btn btn-danger" type="Submit">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection