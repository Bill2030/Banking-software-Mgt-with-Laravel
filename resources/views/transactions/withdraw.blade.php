@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3 class="text-center">Withdrawal Transactions Summary</h3></div>
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
                          @foreach ($withdrawals as $withdrawal )
                              <tr>
                                <td>{{ $withdrawal->id }}</td>
                                <td>{{ $withdrawal->amount }}</td>
                                <td>{{ $withdrawal->customer->name }}</td>
                                <td>{{ $withdrawal->created_at }}</td>
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