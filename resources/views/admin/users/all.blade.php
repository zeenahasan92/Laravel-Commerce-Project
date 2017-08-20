@extends('layouts.master')

@section('title')
    Admin
@endsection

@section('users')
    active-link
@endsection

@section('content')

    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="section-title">
                <i class="fa fa-user"></i>
                Users</h3>
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr class="warning">
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Created At</th>
                    <th class="text-center">Updated - At</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="text-center bold">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <a class="btn btn-danger" href="/admin/users/delete/{{ $user->id }}">
                                Delete <span class="fa fa-remove"></span></a>
                            <a class="btn btn-warning" href="/admin/users/{{ $user->id }}">View
                                <span class="fa fa-eye"></span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center">
        {{ $users->links() }}
    </div>

@endsection
