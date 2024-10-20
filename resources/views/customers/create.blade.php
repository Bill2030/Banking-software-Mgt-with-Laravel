@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2 class="text-center">Create Customer Account</h2></div>
                <div class="card-body">
                    <form action="{{ route('customers.store') }}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row">
                              <div class="col-sm">
                                <div class="mb-3">
                                    <label for="">Customer Full Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="mb-3">
                                    <label for="">Customer Balance</label>
                                    <input type="text" name="balance" class="form-control" value="{{ old('balance') }}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="mb-3">
                                    <label for="">Customer Passport</label>
                                    <input type="text" name="passport" class="form-control" value="{{ old('passport') }}">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="container">
                            <div class="row">
                              <div class="col-sm">
                                <div class="mb-3">
                                    <label for="">Customer Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="mb-3">
                                    <label for="">Customer Country</label>
                                    <input type="text" name="country" class="form-control" value="{{ old('country') }}">
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="mb-3">
                                    <label for="">Customer Address</label>
                                    <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="mb-3">
                            <label for="">City</label>
                            <input type="text" name="city" class="form-control" value="{{ old('city') }}">
                        </div>
                        <div>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection