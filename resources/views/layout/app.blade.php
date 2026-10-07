<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Portfolio Generator')
    </title>

    <link
        rel="stylesheet"
        href="{{ asset('css/portfolio.css') }}"
    >
</head>

<body>

<nav class="navbar">

    <div class="nav-container">

        <a
            href="{{ route('home') }}"
            class="logo"
        >
            Portify
        </a>

        <div class="nav-links">

            <a href="{{ route('home') }}">
                Home
            </a>

            <a href="{{ route('portfolios.create') }}">
                Create
            </a>

            <a href="{{ route('portfolios.index') }}">
                My Portfolios
            </a>

        </div>

    </div>

</nav>


<main>

    @if(session('success'))

        <div class="alert success">
            {{ session('success') }}
        </div>

    @endif


    @if($errors->any())

        <div class="alert error">

            <strong>
                Please fix the following:
            </strong>

            <ul>

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    @yield('content')

</main>


<footer>

    <p>
        © {{ date('Y') }} Portify —
        Online Portfolio Template Generator
    </p>

</footer>

</body>
</html>