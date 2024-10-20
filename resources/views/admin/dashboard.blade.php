@extends('layouts.admin')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Welcome {{ Auth::user()->name }}</li>
        </ol>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>Total Customers</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h1 class="text-center">{{ $customers }}</h1>
                    </div>
                </div>
               
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body"><h3>Total Transactions</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                       <h1>{{ $transactions }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body"><h3>Total Deposits</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                     <h1>{{ $totalcredits }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body"><h3>Total Withdrawals</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                     <h1>{{ $totaldebits }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <h1 class="text-center">Summary of Transactions</h1>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Customer Name</th>
                        <th>Transaction Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($statements as $statement )
                        <tr>
                            <td>{{ $statement->id }}</td>
                            <td>{{ $statement->amount }}</td>
                            <td>{{ $statement->type }}</td>
                            <td>{{ $statement->customer->name }}</td>
                            <td>{{ $statement->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $statements->links('pagination::bootstrap-5') }}
    </div>
</main>

@endsection

