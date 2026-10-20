@extends('layouts.app')

@section('title', 'Portify — Your Story. Your Portfolio.')

@section('content')

{{-- Hero Section --}}
<section class="hero hero-creative">
    <div class="hero-glow"></div>

    <div class="hero-content">
        <span class="hero-badge">
            PORTFOLIO BUILDER
        </span>

        <h1>
            Your work deserves<br>
            a <span class="gradient-text">beautiful stage.</span>
        </h1>

        <p class="hero-description">
            Build your professional portfolio with ease.
            Choose a beautiful template, add your information,
            and create a portfolio that showcases your skills,
            projects, and achievements.
        </p>

        {{-- Buttons change based on login status --}}
        <div class="hero-buttons">
            @auth
                <a href="{{ route('portfolios.create') }}"
                   class="btn btn-primary">
                    Create My Portfolio
                </a>

                <a href="{{ route('portfolios.index') }}"
                   class="btn btn-secondary">
                    Manage My Portfolios
                </a>
            @else
                <a href="{{ route('register') }}"
                   class="btn btn-primary">
                    Get Started
                </a>

                <a href="{{ route('login') }}"
                   class="btn btn-secondary">
                    Login to Create a Portfolio
                </a>
            @endauth
        </div>

        <p class="hero-note">
            Create your account and start building your professional identity.
        </p>
    </div>
</section>

{{-- Features Section --}}
<section class="features features-creative">
    <div class="section-heading">
        <span class="hero-badge">HOW IT WORKS</span>

        <h2>
            Everything you need to<br>
            <span class="gradient-text">showcase your talent.</span>
        </h2>

        <p>
            Create a portfolio that represents who you are
            in just a few simple steps.
        </p>
    </div>

    <div class="feature-grid">
        <article class="feature-card">
            <span class="feature-number">01</span>

            <div class="feature-icon">✎</div>

            <h3>Enter Your Information</h3>

            <p>
                Add your personal details, education, skills,
                experience, and projects in one place.
            </p>
        </article>

        <article class="feature-card">
            <span class="feature-number">02</span>

            <div class="feature-icon">▧</div>

            <h3>Choose a Template</h3>

            <p>
                Select a portfolio design that matches your
                personality and professional goals.
            </p>
        </article>

        <article class="feature-card">
            <span class="feature-number">03</span>

            <div class="feature-icon">↗</div>

            <h3>Create Your Portfolio</h3>

            <p>
                Preview your information in a polished layout
                and manage your portfolio whenever you need.
            </p>
        </article>
    </div>
</section>

@endsection
```