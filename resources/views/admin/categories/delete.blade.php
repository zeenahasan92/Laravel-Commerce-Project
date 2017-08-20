@extends('layouts.master')

@section('title')
    Categories
@endsection

@section('categories')
    active-link
@endsection

@section('content')
    <h1 class="text-center">Delete "{{ $category->name }}"</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="text-center">
                        <a href="/admin/categories" class="btn btn-primary">Back To List
                            <i class="fa fa-arrow-left"></i></a>
                        <button class="btn btn-danger" type="Submit">Delete
                                <i class="fa fa-remove"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection