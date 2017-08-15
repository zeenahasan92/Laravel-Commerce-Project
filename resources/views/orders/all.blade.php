@extends('layouts.master')

@section('title')
    Orders
@endsection

@section('orders')
    active
@endsection

@section('content')
    <h1 class="text-center">Orders</h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="/orders/add" method="POST">
                {{ csrf_field() }}
                <fieldset>
                    <legend>Add Order</legend>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <select name="customers" class="form-control">
                                @foreach($customersList as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="products" class="form-control">
                                @foreach($productsList as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button type="Submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
                <br>
            </form>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <table class="table table-bordered ">
                <thead>
                <tr class="warning">
                    <th class="text-center">Name</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customers)
                    <tr class="text-center bold">
                        <td>{{ $customers->name }}</td>
                        <td>
                            <a class="btn btn-primary" href="/orders/{{ $customers->id }}">View Customer Order</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


