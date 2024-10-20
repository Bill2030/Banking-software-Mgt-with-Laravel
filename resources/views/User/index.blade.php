@extends('layouts.admin')
@section('content')

<div class="container mt-6">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Password</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="">Edit</a>
                                <a class="btn btn-danger btn-sm" href="">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection