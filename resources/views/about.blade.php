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
<body class="antialiased bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 text-gray-900 dark:text-white min-h-screen flex items-center justify-center">
    <div class="container mx-auto p-6 lg:p-12 bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-2xl text-center">
        <h1 class="text-5xl font-extrabold mb-6">Roman Matviy</h1>
        <p class="text-lg mb-8 text-gray-700 dark:text-gray-300">Welcome to my personal page. Here you can find some information about me.</p>

        <div class="grid grid-cols-1 gap-8 mt-10">
            <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg shadow-md transition duration-300 hover:scale-105">
                <h2 class="text-2xl font-semibold mb-3 text-gray-800 dark:text-gray-100">Test Assignment Details</h2>
                <p class="text-gray-600 dark:text-gray-300 text-left">
                    This application is a test assignment to build a small Laravel 11 application using Filament 3 as the admin panel.
                    It manages two main models: <strong>Characteristic Categories</strong> and <strong>Characteristics</strong>.<br><br>

                    <strong>Models and Database Schema:</strong><br>
                    - <strong>CharacteristicCategory:</strong> id (PK), name (string), Timestamps. Has many Characteristics.<br>
                    - <strong>Characteristic:</strong> id (PK), name (string), meta_data (JSON - containing description and type), characteristic_category_id (FK), Timestamps. Belongs to CharacteristicCategory.<br><br>

                    <strong>Filament Admin Panel Requirements:</strong><br>
                    - Create a Filament resource for CharacteristicCategories (Listing, CRUD).<br>
                    - Create a Filament resource for Characteristics (Listing, CRUD).<br>
                    - Ensure meta_data field is managed sensibly (handles description and type appropriately, including dynamic field types).<br><br>

                    <strong>Front-Facing Page Requirements:</strong><br>
                    - A route displaying a list of CharacteristicCategories and their Characteristics.<br>
                    - Uses Tailwind CSS with Laravel/Vite integration.<br><br>

                    <strong>General Notes:</strong><br>
                    - Built with Laravel 11 and Filament 3.<br>
                    - Follows standard Laravel best practices for routes/controllers and code structure.<br>
                    - Tailwind CSS used for styling beyond Filament defaults.
                </p>
            </div>
        </div>

        <div class="mt-8 bg-gray-50 dark:bg-gray-700 p-6 rounded-lg shadow-md transition duration-300 hover:scale-105">
            <h2 class="text-2xl font-semibold mb-3 text-gray-800 dark:text-gray-100">My CV</h2>
            <p class="text-gray-600 dark:text-gray-300">
                You can view my curriculum vitae here:
                <a href="https://roman.matviy.pp.ua" class="text-blue-500 hover:underline font-medium" target="_blank">roman.matviy.pp.ua</a>
            </p>
        </div>

        <div class="mt-10 bg-gray-50 dark:bg-gray-700 p-6 rounded-lg shadow-md transition duration-300 hover:scale-105">
            <h2 class="text-2xl font-semibold mb-3 text-gray-800 dark:text-gray-100">Application Features</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Check out the characteristics management page:
                <a href="{{ route('characteristics.index') }}" class="text-blue-500 hover:underline font-medium">View Characteristics</a>
            </p>
        </div>

        <footer class="text-center mt-12 text-gray-600 dark:text-gray-400">
            <p class="mb-2">&copy; {{ date('Y') }} Roman Matviy. All rights reserved.</p>
            <p>
                My CV:
                <a href="https://roman.matviy.pp.ua" class="text-blue-500 hover:underline" target="_blank">roman.matviy.pp.ua</a>
            </p>
        </footer>
    </div>
</body>
</html>
