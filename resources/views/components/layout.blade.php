<!DOCTYPE html>
<html lang="en" class="p-0">
    <head>
        <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0"/>
        <title>{{ isset($title) ? "$title |" : '' }} BlogOS</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

    </head>
    <body class="mt-60 md:mt-20 bg-gray-200/100">
        @include ('common.header')
        <main class="main container mx-auto">
            {{ $slot }}
        </main>
        @include ('common.footer')
    </body>
</html>
