<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{$title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="min-h-screen bg-gray-100  place-content-center items-center">
        <x-navbar-menu />

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

</body>

</html>