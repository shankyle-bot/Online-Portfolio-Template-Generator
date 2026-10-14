
@extends('layouts.app')

@section('title', 'Portify — Your Story. Your Portfolio.')

@section('content')

<!-- Hero Section -->
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

        <!-- Buttons change based on login status -->
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

    <!-- Decorative Portfolio Preview -->
    <div class="hero-preview">
        <div class="preview-window">
            <div class="preview-topbar">
                <div class="preview-dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <span class="preview-label">PORTFOLIO PREVIEW</span>
            </div>

            <div class="preview-body">
                <aside class="preview-sidebar">
                    <div class="preview-avatar">P</div>
                    <div class="preview-line preview-line-long"></div>
                    <div class="preview-line preview-line-short"></div>

                    <div class="preview-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </aside>

                <div class="preview-main">
                    <span class="preview-eyebrow">WELCOME TO MY PORTFOLIO</span>

                    <h3>Hi, I'm a<br><span>Creative Professional.</span></h3>

                    <p>
                        Turning ideas into meaningful digital experiences.
                    </p>

                    <div class="preview-projects">
                        <div class="preview-project">
                            <span class="project-icon">✦</span>
                            <div>
                                <strong>My Projects</strong>
                                <small>Creative work</small>
                            </div>
                        </div>

                        <div class="preview-project">
                            <span class="project-icon">↗</span>
                            <div>
                                <strong>My Skills</strong>
                                <small>What I can do</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="floating-card floating-card-top">
            <span class="floating-icon">✦</span>
            <div>
                <strong>Beautiful Designs</strong>
                <small>Make your work stand out</small>
            </div>
        </div>

        <div class="floating-card floating-card-bottom">
            <span class="floating-icon">✓</span>
            <div>
                <strong>Your Story, Your Style</strong>
                <small>A portfolio made for you</small>
            </div>
        </div>
    </div>
</section>


<!-- Features Section -->
<section class="features features-creative">
    <div class="section-heading">
        <span class="hero-badge">HOW IT WORKS</span>

        <h2>Everything you need to<br>
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


<!-- Closing Call to Action -->
<section class="closing-cta">
    <div class="closing-cta-content">
        <span class="hero-badge">YOUR NEXT CHAPTER STARTS HERE</span>

        <h2>Ready to show the world<br>what you can do?</h2>

        <p>
            Take the next step toward presenting your skills
            and achievements professionally.
        </p>

        @auth
            <a href="{{ route('portfolios.create') }}"
               class="btn btn-primary">
                Create My Portfolio
            </a>
        @else
            <a href="{{ route('register') }}"
               class="btn btn-primary">
                Create Your Account
            </a>
        @endauth
    </div>
</section>

@endsection
