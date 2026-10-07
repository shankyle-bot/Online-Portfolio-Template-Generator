<div class="portfolio-modern">

    <aside class="modern-sidebar">

        @if($portfolio->profile_picture)

            <img
                src="{{ asset('storage/' . $portfolio->profile_picture) }}"
                alt="{{ $portfolio->full_name }}"
                class="modern-profile"
            >

        @else

            <div class="modern-avatar">
                {{ strtoupper(substr($portfolio->full_name, 0, 1)) }}
            </div>

        @endif


        <h1>
            {{ $portfolio->full_name }}
        </h1>

        <p>
            {{ $portfolio->email }}
        </p>


        @if($portfolio->contact_number)
            <p>{{ $portfolio->contact_number }}</p>
        @endif

        @if($portfolio->address)
            <p>{{ $portfolio->address }}</p>
        @endif


        <div class="modern-socials">

            @if($portfolio->github)
                <a href="{{ $portfolio->github }}" target="_blank">
                    GitHub
                </a>
            @endif

            @if($portfolio->linkedin)
                <a href="{{ $portfolio->linkedin }}" target="_blank">
                    LinkedIn
                </a>
            @endif

            @if($portfolio->website)
                <a href="{{ $portfolio->website }}" target="_blank">
                    Website
                </a>
            @endif

        </div>

    </aside>


    <main class="modern-content">

        <div class="modern-heading">

            <span>MY PORTFOLIO</span>

            <h2>
                Welcome
            </h2>

        </div>


        @if($portfolio->about_me)

            <section class="modern-card">

                <h3>
                    About Me
                </h3>

                <p>
                    {!! nl2br(e($portfolio->about_me)) !!}
                </p>

            </section>

        @endif


        <div class="modern-grid">

            @if($portfolio->education)

                <section class="modern-card">

                    <h3>
                        Education
                    </h3>

                    <p>
                        {!! nl2br(e($portfolio->education)) !!}
                    </p>

                </section>

            @endif


            @if($portfolio->skills)

                <section class="modern-card">

                    <h3>
                        Skills
                    </h3>

                    <p>
                        {!! nl2br(e($portfolio->skills)) !!}
                    </p>

                </section>

            @endif

        </div>


        @if($portfolio->projects)

            <section class="modern-card">

                <h3>
                    Projects
                </h3>

                <p>
                    {!! nl2br(e($portfolio->projects)) !!}
                </p>

            </section>

        @endif


        @if($portfolio->work_experience)

            <section class="modern-card">

                <h3>
                    Experience
                </h3>

                <p>
                    {!! nl2br(e($portfolio->work_experience)) !!}
                </p>

            </section>

        @endif


        <div class="portfolio-actions">

            <a
                href="{{ route('portfolios.edit', $portfolio) }}"
                class="btn btn-primary"
            >
                Edit Portfolio
            </a>

            <a
                href="{{ route('portfolios.templates', $portfolio) }}"
                class="btn btn-light"
            >
                Change Template
            </a>

        </div>

    </main>

</div>