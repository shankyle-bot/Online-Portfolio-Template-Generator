<div class="portfolio-creative">

    <div class="creative-top">

        <div class="creative-shape"></div>

        <div class="creative-profile">

            @if($portfolio->profile_picture)

                <img
                    src="{{ asset('storage/' . $portfolio->profile_picture) }}"
                    alt="{{ $portfolio->full_name }}"
                >

            @else

                <div class="creative-avatar">
                    {{ strtoupper(substr($portfolio->full_name, 0, 1)) }}
                </div>

            @endif

        </div>


        <div class="creative-intro">

            <span>
                HELLO, I'M
            </span>

            <h1>
                {{ $portfolio->full_name }}
            </h1>

            <p>
                {{ $portfolio->email }}
            </p>

        </div>

    </div>


    <div class="creative-body">

        @if($portfolio->about_me)

            <section class="creative-section">

                <span>
                    01
                </span>

                <div>

                    <h2>
                        About Me
                    </h2>

                    <p>
                        {!! nl2br(e($portfolio->about_me)) !!}
                    </p>

                </div>

            </section>

        @endif


        @if($portfolio->education)

            <section class="creative-section">

                <span>
                    02
                </span>

                <div>

                    <h2>
                        Education
                    </h2>

                    <p>
                        {!! nl2br(e($portfolio->education)) !!}
                    </p>

                </div>

            </section>

        @endif


        @if($portfolio->skills)

            <section class="creative-section">

                <span>
                    03
                </span>

                <div>

                    <h2>
                        Skills
                    </h2>

                    <p>
                        {!! nl2br(e($portfolio->skills)) !!}
                    </p>

                </div>

            </section>

        @endif


        @if($portfolio->projects)

            <section class="creative-section">

                <span>
                    04
                </span>

                <div>

                    <h2>
                        Projects
                    </h2>

                    <p>
                        {!! nl2br(e($portfolio->projects)) !!}
                    </p>

                </div>

            </section>

        @endif


        @if($portfolio->work_experience)

            <section class="creative-section">

                <span>
                    05
                </span>

                <div>

                    <h2>
                        Experience
                    </h2>

                    <p>
                        {!! nl2br(e($portfolio->work_experience)) !!}
                    </p>

                </div>

            </section>

        @endif


        <div class="creative-links">

            @if($portfolio->website)
                <a href="{{ $portfolio->website }}" target="_blank">
                    Website
                </a>
            @endif

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

        </div>


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