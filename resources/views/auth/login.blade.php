
@extends('layouts.app')

@section('title', 'Login | Portify')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <h1>Welcome Back to Portify</h1>
        <p>Log in to manage your professional portfolios.</p>

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <div class="auth-form-group">
                <label for="email">Email Address</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    autocomplete="email"
                >
            </div>

            <div class="auth-form-group">
                <label for="password">Password</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                >
            </div>

            <div class="auth-remember">
                <label>
                    <input type="checkbox" name="remember" value="1">
                    Remember me
                </label>
            </div>

            <button type="submit" class="auth-submit">
                Log In
            </button>
        </form>

        <p class="auth-switch">
            Don't have an account?
            <a href="{{ route('register') }}">Create an account</a>
        </p>
    </div>
</div>
@endsection
