@extends('layouts.master')

@section('title')
    Categories
@endsection

@section('categories')
    active-link
@endsection

@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="section-title">
                <i class="fa fa-tags"></i>
                Categories</h3>

        </div>

        <div class="panel-body">
            <form action="categories/add" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group">
                        <input type="Text" class="form-control" placeholder="Add Category" name="name">
                        <span class="input-group-btn">
                   <button class="btn btn-primary" type="Submit">Add
                   <i class="fa fa-plus"></i></button>
                </span>
                    </div>
                </div>
            </form>
            <table class="table table-hover table-bordered ">
                <thead>
                <tr class="bg-success">
                    <th style="color:#FFFFFF;" class="text-center">Id</th>
                    <th style="color:#FFFFFF;" class="text-center">Name</th>
                    <th style="color:#FFFFFF;" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr class="bold text-center">
                        <td><b>{{ $category->id }}</b></td>
                        <td><b>{{ $category->name }}</b></td>
                        <td>
                            <a class="btn btn-danger" href="categories/delete/{{ $category->id }}">Delete
                                <span class="fa fa-remove"></span></a>
                            <a class="btn btn-primary" href="categories/update/{{ $category->id }}">Update
                                <span class="fa fa-edit"></span></a>
                            <a class="btn btn-warning" {{ ($category->products->count() != 0)?'':'disabled' }}
                            href="categories/{{ $category->id }}">Products
                                <span class="fa fa-eye"></span></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center">
        {{ $categories->links() }}
    </div>

@endsection