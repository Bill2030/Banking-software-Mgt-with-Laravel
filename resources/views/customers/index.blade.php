@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3 class="text-center">Customer Portal</h3></div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Customer Balance</th>
                                <th>Customer Passport</th>
                                <th>Customer Email</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer )
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>Kshs {{ $customer->balance}}</td>
                                    <td>{{ $customer->passport }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->country }}</td>
                                    <td>{{ $customer->city }}</td>
                                    <td>
                                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection