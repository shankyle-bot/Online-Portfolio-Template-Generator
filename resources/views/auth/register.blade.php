
@extends('layouts.app')

@section('title', 'Register | Portify')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <h1>Create Your Portify Account</h1>
        <p>Register to start building your professional portfolio.</p>

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <div class="auth-form-group">
                <label for="name">Full Name</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autocomplete="name"
                >
            </div>

            <div class="auth-form-group">
                <label for="email">Email Address</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
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
                    autocomplete="new-password"
                >
            </div>

            <div class="auth-form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                >
            </div>

            <button type="submit" class="auth-submit">
                Create Account
            </button>
        </form>

        <p class="auth-switch">
            Already have an account?
            <a href="{{ route('login') }}">Log in</a>
        </p>
    </div>
</div>
@endsection
