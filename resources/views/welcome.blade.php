<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <!-- tailwind only -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>

<body class="antialiased">

    <div id="svelte-app"></div>

    <nav class="border m-auto text-center">
        <a class="btn btn-secondary" href={{ route('home.page') }}>Dashboard page</a>
        <a class="btn btn-secondary" href={{ route('about.page') }}>About page</a>
        <a class="btn btn-secondary" href={{ route('contact.page') }}>Contact page</a>
    </nav>


    <h1 class=' mt-5 text-3xl'> This is landing page or home page</h1>

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif


    </div>
</body>

</html>
