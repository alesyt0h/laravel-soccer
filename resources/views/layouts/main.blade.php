<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title'){{(request()->routeIs('home')) ? config('app.name') : ' | ' . config('app.name')}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="overflow-x-hidden !bg-cover !bg-fixed" style="background: url({{ asset('images/football-bg.jpg') }})">
    <x-sidebar/>
    <div class="p-14 sm:p-10 bg-gray-500/40 flex min-h-screen max-h-max justify-center p-10 sm:ml-[300px]">
        <div class="bg-slate-200/80 m-auto p-10 self-center rounded-2xl shadow-2xl flex justify-center border border-slate-500
             {{ (request()->is(['club', 'college', 'team', 'match'])) ? 'w-full lg:w-screen' : ''}}
             {{ (request()->routeIs('home')) ? 'w-full pb-0' : ''}}">
            @yield('content')
        </div>
    </div>
</body>
</html>
