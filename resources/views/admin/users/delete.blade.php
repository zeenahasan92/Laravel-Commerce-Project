@extends('layouts.master')

@section('title')
    Categories
@endsection

@section('users')
    active-link
@endsection

@section('css')
    <style>
        .avatar{
            border: 5px solid darkgray;
            -webkit-box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75);
        }
    </style>
@endsection

@section('content')
    <h1 class="text-center">Delete "{{ $user->name }}"</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
                    <div class="form-group text-center">
                        <h3>Email : {{ $user->email }}</h3>
                    </div>

                    <div class="form-group text-center">
                        <img src="/{{ env('imagePath') }}{{$user->avatar}}" class="img-circle avatar" width="200" height="200" alt="{{ $user->name }}">
                    </div>

            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="text-center">
                        <a href="/admin/users" class="btn btn-primary">Back To List
                         <i class="fa fa-arrow-left"></i></a>
                        <button class="btn btn-danger" type="Submit">Delete
                         <i class="fa fa-remove"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection