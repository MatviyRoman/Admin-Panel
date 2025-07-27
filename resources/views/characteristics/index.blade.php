<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Characteristics</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 text-gray-900 dark:text-white min-h-screen flex items-center justify-center">
    <div class="container mx-auto p-6 lg:p-12 bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-4xl">
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white">Characteristic Categories</h1>
            <a href="{{ url('/') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-full font-semibold text-sm text-white uppercase tracking-wider shadow-md hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-300 transform hover:scale-105">
                &larr; Back to Home
            </a>
        </div>

        @foreach ($categories as $category)
            <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-xl mb-8 transform transition duration-300 hover:scale-[1.02]">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6 border-b-2 border-blue-500 pb-3">{{ $category->name }}</h2>
                @if ($category->characteristics->count() > 0)
                    <ul class="space-y-4 text-lg text-gray-700 dark:text-gray-300">
                        @foreach ($category->characteristics as $characteristic)
                            <li class="bg-gray-50 dark:bg-gray-800 p-4 rounded-md shadow-sm flex items-start space-x-3">
                                <svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div>
                                    <span class="font-semibold text-xl text-gray-800 dark:text-gray-100">{{ $characteristic->name }}</span>
                                    @if ($characteristic->meta_data)
                                        <ul class="list-none ml-0 mt-2 text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                            @foreach ($characteristic->meta_data as $key => $value)
                                                <li><strong class="text-gray-700 dark:text-gray-200">{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> {{ is_array($value) ? json_encode($value) : $value }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-600 dark:text-gray-400 text-lg italic">No characteristics found for this category.</p>
                @endif
            </div>
        @endforeach

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
