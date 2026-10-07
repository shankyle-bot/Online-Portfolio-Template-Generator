@extends('layouts.app')

@section('title', 'Portify - Portfolio Generator')

@section('content')

<section class="hero">

    <div class="hero-content">

        <span class="hero-badge">
            PORTFOLIO BUILDER
        </span>

        <h1>
            Build Your
            <span>Professional Portfolio</span>
        </h1>

        <p>
            Create, save, customize, and generate
            your personal portfolio using beautiful
            portfolio templates.
        </p>

        <div class="hero-buttons">

            <a
                href="{{ route('portfolios.create') }}"
                class="btn btn-primary"
            >
                Create My Portfolio
            </a>

            <a
                href="{{ route('portfolios.index') }}"
                class="btn btn-secondary"
            >
                Manage Portfolios
            </a>

        </div>

    </div>

</section>


<section class="features">

    <div class="section-heading">

        <span>HOW IT WORKS</span>

        <h2>
            Create your portfolio in simple steps
        </h2>

    </div>


    <div class="feature-grid">

        <div class="feature-card">

            <div class="feature-number">
                01
            </div>

            <h3>
                Enter Information
            </h3>

            <p>
                Add your personal information,
                education, skills, projects,
                and experience.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-number">
                02
            </div>

            <h3>
                Choose a Template
            </h3>

            <p>
                Select one of three unique
                portfolio designs.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-number">
                03
            </div>

            <h3>
                Generate
            </h3>

            <p>
                Preview your completed portfolio
                and edit it whenever you want.
            </p>

        </div>

    </div>

</section>

@endsection