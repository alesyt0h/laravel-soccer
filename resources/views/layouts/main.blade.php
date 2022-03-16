<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title'){{(request()->routeIs('home')) ? config('app.name') : ' | ' . config('app.name')}}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
    <div class="mx-auto bg-grey-lightest">
        <div class="min-h-screen flex flex-col">
            <x-header/>
            <div class="flex flex-1">
                <x-sidebar/>
                <main class="bg-white-300 flex-1 overflow-hidden self-center
                {{ (request()->is(['login', 'register', 'forgot-password', 'reset-password/*', 'confirm-password', 'verify-email/*', 'verify-email'])) ? 'p-16' : 'p-3'}}">
                    <div class="flex flex-col">
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 justify-center">
                            @yield('content')
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>
</html>
