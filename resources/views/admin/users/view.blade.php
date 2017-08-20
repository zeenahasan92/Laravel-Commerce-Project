@extends('layouts.master')

@section('title')
    View Product
@endsection

@section('css')
    <style>
        .avatar {
            border: 5px solid darkgray;
            -webkit-box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.75);
        }
    </style>
@endsection
@section('users')
    active-link
@endsection

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="section-title">{{ $user->name }}</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4><b>Email :</b> {{ $user->email }}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4><b>Register At : </b>{{ $user->created_at }}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4><b>Last Updated : </b>{{ $user->updated_at }}</h4>
                        </li>
                    </ul>
                    <a class="btn btn-info " href="/admin/users">
                        <b>
                                Back To List
                                <i class="fa fa-arrow-left"></i>
                            </b>

                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <img class="img-rounded img-thumbnail img-responsive" src="/{{ env('imagePath') }}{{$user->avatar}}"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection