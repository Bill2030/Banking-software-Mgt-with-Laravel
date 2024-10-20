@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 mx-auto">
          @foreach ($accounts as $account)
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                  <h5 class="card-title">Personal information</h5>
                  <p>First Name: {{ $account->first_name }}</p>
                  <p>Last Name: {{ $account->last_name }}</p>
                  <p>Gender:  {{ $account->gender }}</p>
                  <p>Passport No: {{ $account->passport }}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              @endforeach
            </div>
    </div>
</div>

@endsection
