@extends('layouts.app')

@section('title', 'Choose Template')

@section('content')

<div class="templates-page">

    <div class="page-heading center">

        <span>DESIGN</span>

        <h1>
            Choose Your Template
        </h1>

        <p>
            Select one of our three portfolio designs.
        </p>

    </div>


    <div class="template-grid">


        <!-- SIMPLE -->

        <div class="template-card">

            <div class="template-preview simple-preview">

                <div class="mini-profile">
                    <div class="mini-avatar"></div>

                    <div>
                        <strong>
                            {{ $portfolio->full_name }}
                        </strong>

                        <small>
                            Professional Portfolio
                        </small>
                    </div>
                </div>

                <div class="mini-lines"></div>

            </div>


            <div class="template-content">

                <span>
                    TEMPLATE 01
                </span>

                <h2>
                    Simple
                </h2>

                <p>
                    Clean and professional layout
                    for a classic portfolio.
                </p>


                <form
                    action="{{ route('portfolios.selectTemplate', $portfolio) }}"
                    method="POST"
                >

                    @csrf
                    @method('PATCH')

                    <input
                        type="hidden"
                        name="template"
                        value="simple"
                    >

                    <button
                        class="btn btn-primary"
                        type="submit"
                    >
                        Use Simple
                    </button>

                </form>

            </div>

        </div>


        <!-- MODERN -->

        <div class="template-card">

            <div class="template-preview modern-preview">

                <div class="modern-mini-sidebar"></div>

                <div class="modern-mini-content">

                    <div class="mini-block"></div>

                    <div class="mini-card-row">

                        <div></div>
                        <div></div>

                    </div>

                </div>

            </div>


            <div class="template-content">

                <span>
                    TEMPLATE 02
                </span>

                <h2>
                    Modern
                </h2>

                <p>
                    Card-based layout with a
                    contemporary visual style.
                </p>


                <form
                    action="{{ route('portfolios.selectTemplate', $portfolio) }}"
                    method="POST"
                >

                    @csrf
                    @method('PATCH')

                    <input
                        type="hidden"
                        name="template"
                        value="modern"
                    >

                    <button
                        class="btn btn-primary"
                        type="submit"
                    >
                        Use Modern
                    </button>

                </form>

            </div>

        </div>


        <!-- CREATIVE -->

        <div class="template-card">

            <div class="template-preview creative-preview">

                <div class="creative-circle"></div>

                <div class="creative-mini-text">

                    <div></div>
                    <div></div>
                    <div></div>

                </div>

            </div>


            <div class="template-content">

                <span>
                    TEMPLATE 03
                </span>

                <h2>
                    Creative
                </h2>

                <p>
                    A creative arrangement with
                    a unique visual presentation.
                </p>


                <form
                    action="{{ route('portfolios.selectTemplate', $portfolio) }}"
                    method="POST"
                >

                    @csrf
                    @method('PATCH')

                    <input
                        type="hidden"
                        name="template"
                        value="creative"
                    >

                    <button
                        class="btn btn-primary"
                        type="submit"
                    >
                        Use Creative
                    </button>

                </form>

            </div>

        </div>


    </div>


    <div class="template-footer">

        <a
            href="{{ route('portfolios.show', $portfolio) }}"
            class="btn btn-light"
        >
            Preview Current Portfolio
        </a>

    </div>

</div>

@endsection