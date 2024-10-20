@extends('layouts.admin')
@section('content')

<div class="contain">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1 class="text-center">Create Customer Account</h1></div>
                <div class="card-body">
                    <form action="{{ route('accounts.store') }}" method="POST">
                      @csrf
                        <div class="container">
                            <div class="row">
                              <div class="col order-first">
                               <label for="">Customer First Name</label>
                               <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                              </div>
                              <div class="col">
                                <label for="">Customer Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                              </div>
                              <div class="col order-first">
                                <label for="">Gender</label>
                               <select name="gender" class="form-control">
                              @foreach ($genders as $gender )
                                <option value="{{ $gender->id }}">{{ $gender->type }}</option>
                              @endforeach
                               </select>
                              </div>
                            </div>
                          </div>
                          <div class="container">
                            <div class="row">
                              <div class="col order-first">
                               <label for="">Bank Account</label>
                               <input type="text" class="form-control" name="bank_account" value="{{ old('bank_account') }}">
                              </div>
                              <div class="col">
                                <label for="">Bank Branch</label>
                                <input type="text" class="form-control" name="branch" value="{{ old('branch') }}">
                              </div>
                              <div class="col order-first">
                                <label for="">Account Number</label>
                               <input type="text" class="form-control" name="account_number" value="{{ old('account_number') }}">
                              </div>
                            </div>
                          </div>
                          <div class="container">
                            <div class="row">
                              <div class="col order-first">
                               <label for="">Account Type</label>
                               <input type="text" class="form-control" name="account_type" value="{{ old('account_type') }}">
                              </div>
                              <div class="col">
                                <label for="">Passport Number</label>
                                <input type="text" class="form-control" name="passport" value="{{ old('passport') }}">
                              </div>
                              <div class="col order-first">
                                <label for="">Card Type</label>
                               <input type="text" class="form-control" name="card_type" value="{{ old('card_type') }}">
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-primary mt-3 text-center" type="submit">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
