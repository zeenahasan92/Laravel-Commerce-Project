@extends('layouts.master')

@section('title')
    Categories
@endsection

@section('categories')
    active
@endsection

@section('content')
    <h1 class="text-center">Categories</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="categories/add" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label bold">Add Category</label>
                    <div class="input-group">
                        <span class="input-group-addon bold">Category</span>
                        <input type="Text" class="form-control" name="name">
                        <span class="input-group-btn">
                   <button class="btn btn-primary" type="Submit">Add</button>
                </span>
                    </div>
                </div>
            </form>
            <table class="table table-bordered ">
                <thead>
                <tr class="danger">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr class="bold text-center">
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a class="btn btn-danger" href="/categories/delete/{{ $category->id }}">Delete</a>
                            <a class="btn btn-primary" href="/categories/update/{{ $category->id }}">Update</a>
                            <a class="btn btn-warning" href="/categories/{{ $category->id }}">Products</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection