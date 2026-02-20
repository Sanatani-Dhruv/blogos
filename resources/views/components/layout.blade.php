<!DOCTYPE html>
<html lang="en" class="p-0">
    <head>
        <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0"/>
        <title>{{ isset($title) ? "$title |" : '' }} BlogOS</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="mt-20 bg-gray-200/100">
        @include ('common.header')
        <main class="main p-5 container mx-auto">
            {{ $slot }}
        </main>
        <noscript class="text-xl font-bold p-3 fixed left-4 md:left-1/4 bottom-4 bg-gray-50/100 shadow-xl rounded">
            This Web App is Running Without Javascript, It May not work as expected!
        </noscript>
        @include ('common.footer')
    </body>
</html>
