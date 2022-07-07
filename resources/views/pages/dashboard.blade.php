@extends('layouts.index')
@section('content')
<div class="row mx-auto justify-content-center align-items-center flex-column ">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h3>Register Your Account</h3>
                <form action="{{ route('login.auth') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old("password") }}" id="password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection