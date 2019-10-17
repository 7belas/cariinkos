@extends('layouts.admin')

@section('title', 'Admin Login')

@section('content')
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="POST" action="{{ url('/admin/login') }}">
                @csrf
                <div class="form-group">
                    <div class="form-label-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus="autofocus">
                    <label for="username">Username</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    <label for="password">Password</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me">
                        Remember Password
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <br />
            @if (session('msg')['success'] === false)
                <div class="alert alert-danger" role="alert">
                    {{ session('msg')['msg'] }}
                </div>
            @endif
            <div class="text-center">
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
@endsection
