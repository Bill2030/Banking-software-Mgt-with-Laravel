@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Transactions deposits Summary</h3></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Transaction Amount</th>
                                <th>Customer Name</th>
                                <th>Transaction Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deposits as $deposit )
                                <tr>
                                    <td>{{ $deposit->id }}</td>
                                    <td>{{ $deposit->amount }}</td>
                                    <td>{{ $deposit->customer->name }}</td>
                                    <td>{{ $deposit->created_at }}</td>
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