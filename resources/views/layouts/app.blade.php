<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Portify - Portfolio Generator')</title>

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    {{-- Navigation Bar --}}
    <nav class="navbar">
        <a href="{{ route('home') }}" class="logo">
            Portify
        </a>

        <ul class="nav-links">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>

            @auth
                <li>
                    <a href="{{ route('portfolios.create') }}">
                        Create Portfolio
                    </a>
                </li>

                <li>
                    <a href="{{ route('portfolios.index') }}">
                        My Portfolios
                    </a>
                </li>

                <li>
                    <span>Welcome, {{ auth()->user()->name }}</span>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="nav-logout-button">
                            Logout
                        </button>
                    </form>
                </li>
            @endauth
        </ul>
    </nav>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error Messages --}}
    @if ($errors->any())
        <div class="alert alert-error">
            <strong>Please fix the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Main Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <p>
            &copy; {{ date('Y') }} Portify - Portfolio Template Generator
        </p>
    </footer>

</body>
</html>
```