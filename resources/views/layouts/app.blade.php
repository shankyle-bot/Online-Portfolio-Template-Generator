<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Portfolio Template Generator')
    </title>

    <link
    rel="stylesheet"
    href="/css/portfolio.css"
>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar">

        <a href="{{ route('home') }}" class="logo">
            Portfolio Generator
        </a>

        <ul class="nav-links">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>

            <li>
                <a href="{{ route('portfolios.create') }}">
                    Create Portfolio
                </a>
            </li>

            <li>
                <a href="{{ route('portfolios.index') }}">
                    Manage Portfolios
                </a>
            </li>
        </ul>

    </nav>


    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <!-- Error Messages -->
    @if($errors->any())
        <div class="alert alert-error">

            <strong>Please fix the following errors:</strong>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif


    <!-- Main Content -->
    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="footer">
        <p>
            &copy; {{ date('Y') }} Portfolio Template Generator
        </p>
    </footer>

</body>
</html>