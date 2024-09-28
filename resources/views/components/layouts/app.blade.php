<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>{{$title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="min-h-screen bg-gray-100  items-center">
        <x-navbar-menu />

        <!-- Page Content -->
        <main>
            <div class="p-4 sm:mt-16">
                    {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>