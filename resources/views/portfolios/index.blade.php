@extends('layouts.app')

@section('title', 'My Portfolios')

@section('content')

<div class="manage-page">

    <div class="page-heading">

        <span>MANAGE</span>

        <h1>
            My Portfolios
        </h1>

        <p>
            View, edit, preview, or delete your portfolios.
        </p>

    </div>


    @if($portfolios->count())

        <div class="portfolio-list">

            @foreach($portfolios as $portfolio)

                <div class="manage-card">

                    <div class="manage-avatar">

                        @if($portfolio->profile_picture)

                            <img
                                src="{{ asset('storage/' . $portfolio->profile_picture) }}"
                                alt="{{ $portfolio->full_name }}"
                            >

                        @else

                            {{ strtoupper(substr($portfolio->full_name, 0, 1)) }}

                        @endif

                    </div>


                    <div class="manage-info">

                        <h2>
                            {{ $portfolio->full_name }}
                        </h2>

                        <p>
                            {{ $portfolio->email }}
                        </p>

                        <span class="template-label">
                            {{ ucfirst($portfolio->template) }}
                            Template
                        </span>

                    </div>


                    <div class="manage-actions">

                        <a
                            href="{{ route('portfolios.show', $portfolio) }}"
                            class="btn btn-primary"
                        >
                            View
                        </a>

                        <a
                            href="{{ route('portfolios.edit', $portfolio) }}"
                            class="btn btn-light"
                        >
                            Edit
                        </a>


                        <form
                            action="{{ route('portfolios.destroy', $portfolio) }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this portfolio?')"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger"
                            >
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="empty-state">

            <h2>
                No portfolios yet
            </h2>

            <p>
                Create your first portfolio to get started.
            </p>

            <a
                href="{{ route('portfolios.create') }}"
                class="btn btn-primary"
            >
                Create Portfolio
            </a>

        </div>

    @endif

</div>

@endsection