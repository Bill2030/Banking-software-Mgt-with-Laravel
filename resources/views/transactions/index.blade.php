@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3 class="text-center">New Transactions</h3></div>
                <div class="card-body">
                    <form action="{{ route('post.transaction') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                        <label for="">Customer Name</label>
                        <select name="customer_id" class="form-control">
                            @foreach ($customers as $customer )
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Customer Amount</label>
                        <input type="text" name="amount" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Amount Type</label>
                        <input type="text" name="type" class="form-control">
                    </div>
                    <button class="btn btn-info" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
