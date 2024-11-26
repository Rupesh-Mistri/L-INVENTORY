<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <header>
        @section('header')
            @include('header')
        @show
    </header>

    <main>
        @section('body')
            <div class="container">
                <h1>Welcome!</h1>
                <p>This is the default body content.</p>
            </div>
        @show
    </main>

    <footer>
        @section('footer')
            <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
        @show
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
