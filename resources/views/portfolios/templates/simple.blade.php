<div class="portfolio-simple">

    <header class="simple-header">

        <div class="simple-profile">

            @if($portfolio->profile_picture)

                <img
                    src="{{ asset('storage/' . $portfolio->profile_picture) }}"
                    alt="{{ $portfolio->full_name }}"
                >

            @else

                <div class="simple-avatar">
                    {{ strtoupper(substr($portfolio->full_name, 0, 1)) }}
                </div>

            @endif


            <div>

                <h1>
                    {{ $portfolio->full_name }}
                </h1>

                <p>
                    {{ $portfolio->email }}
                </p>

            </div>

        </div>

    </header>


    <div class="simple-container">

        @if($portfolio->about_me)

            <section class="simple-section">

                <h2>
                    About Me
                </h2>

                <p>
                    {!! nl2br(e($portfolio->about_me)) !!}
                </p>

            </section>

        @endif


        @if($portfolio->education)

            <section class="simple-section">

                <h2>
                    Education
                </h2>

                <p>
                    {!! nl2br(e($portfolio->education)) !!}
                </p>

            </section>

        @endif


        @if($portfolio->skills)

            <section class="simple-section">

                <h2>
                    Skills
                </h2>

                <p>
                    {!! nl2br(e($portfolio->skills)) !!}
                </p>

            </section>

        @endif


        @if($portfolio->projects)

            <section class="simple-section">

                <h2>
                    Projects
                </h2>

                <p>
                    {!! nl2br(e($portfolio->projects)) !!}
                </p>

            </section>

        @endif


        @if($portfolio->work_experience)

            <section class="simple-section">

                <h2>
                    Work Experience
                </h2>

                <p>
                    {!! nl2br(e($portfolio->work_experience)) !!}
                </p>

            </section>

        @endif


        <section class="simple-contact">

            <h2>
                Contact
            </h2>

            <p>
                {{ $portfolio->email }}
            </p>

            @if($portfolio->contact_number)
                <p>{{ $portfolio->contact_number }}</p>
            @endif

            @if($portfolio->address)
                <p>{{ $portfolio->address }}</p>
            @endif

        </section>


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

    </div>

</div>