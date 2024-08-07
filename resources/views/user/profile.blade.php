@extends('layout')

@section('content')
    <h1>User Profile</h1>
    <div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                value="rgabriel@wup.edu.ph" readonly>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Name" value="Raniel Gabriel"
                readonly>
            <label for="floatingPassword">Name</label>
        </div>
    </div>
@endsection
