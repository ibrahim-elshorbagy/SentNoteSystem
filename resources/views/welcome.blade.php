<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

<body class="flex flex-col min-h-screen font-sans antialiased" style="background-color: #f3f4f6;">
    <header class="w-full py-4 lg:py-8 lg:px-8">
        <div class="flex items-center justify-between max-w-2xl px-6 mx-auto">
            <x-application-logo class="w-12 h-24 fill-current text-primary" />
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </div>
    </header>

    <div class="flex flex-col items-center justify-center flex-grow">
        <div class="max-w-2xl px-6">
            <main class="flex flex-col items-center space-y-4">
                <x-application-logo class="w-24 h-24 fill-current text-primary" />
                <x-button primary xl href="{{ route('register') }}">Get Started</x-button>
            </main>
        </div>
    </div>
</body>



</html>
