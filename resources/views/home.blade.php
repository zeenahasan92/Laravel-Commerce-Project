@extends('layouts.app')


@section('title')
    Profile
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="section-title">Profile</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4><b>Name : </b>{{ Auth::user()->name }}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4><b>Email :</b> {{ Auth::user()->email }}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4><b>Register At : </b>{{ Auth::user()->created_at }}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4><b>Last Updated : </b>{{ Auth::user()->updated_at }}</h4>
                        </li>
                    </ul>
                    <a class="btn btn-link form-control" href="/">
                        <h4><b>
                                Back To Simple
                                <i class="fa fa-external-link"></i>
                            </b>
                        </h4>
                    </a>
                </div>
                <div class="col-md-6">
                    <img class="img-rounded img-responsive" src="/{{ env('imagePath') }}{{ Auth::user()->avatar  }}"
                         alt="{{ Auth::user()->name }}">
                </div>
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


