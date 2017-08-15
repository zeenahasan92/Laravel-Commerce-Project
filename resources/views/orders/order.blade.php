
@extends('layouts.master')

@section('title')
    Customer Order
@endsection

@section('orders')
    active
@endsection

@section('content')
    <h1 class="text-center">Order</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <table class="table table-bordered ">
                <thead>
                <tr class="info">
                    <th class="text-center">Product Item</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr class="text-center bold">
                        <td>{{ $order->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                <a href="/orders" class="btn btn-primary">Back To List</a>
            </div>

        </div>
    </div>
@endsection


