<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Roman Matviy</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
        <div class="max-w-4xl mx-auto p-6 lg:p-8 text-center">
            <h1 class="text-4xl font-bold mb-4">Roman Matviy</h1>
            <p class="text-lg mb-8">Welcome to my personal page. Here you can find some information about me.</p>

            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">Test Assignment Details</h2>
                <p class="mb-4">
                    This is a test assignment application built with Laravel 11 and Filament 3.
                    It demonstrates management of Characteristic Categories and Characteristics,
                    and includes a front-facing page showcasing these features.
                </p>
            </div>

            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">My CV</h2>
                <p class="mb-4">
                    You can view my curriculum vitae here:
                    <a href="https://roman.matviy.pp.ua" class="text-blue-500 hover:underline">roman.matviy.pp.ua</a>
                </p>
            </div>

            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">Application Features</h2>
                <p>
                    Check out the characteristics management page:
                    <a href="{{ route('characteristics.index') }}" class="text-blue-500 hover:underline">View Characteristics</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
