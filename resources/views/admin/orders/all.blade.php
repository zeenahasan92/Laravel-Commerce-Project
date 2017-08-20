@extends('layouts.master')

@section('title')
    Orders
@endsection

@section('orders')
    active-link
@endsection

@section('content')
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="section-title">
                <i class="fa fa-shopping-cart"></i>
                Orders</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-bordered ">
                <thead>
                <tr class="danger">
                    <th class="text-center">Name</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="text-center">
                        <td><b>{{ $user->name }}</b></td>
                        <td>
                            <a class="btn btn-primary" href="/admin/orders/{{ $user->id }}">View User Order
                                <span class="fa fa-eye"></span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


