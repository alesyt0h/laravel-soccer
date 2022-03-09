<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="overflow-x-hidden" style="background: url({{ asset('images/football-bg.jpg') }})">
    <x-sidebar/>
    <div class="bg-gray-500/40 flex justify-center p-10 ml-[300px]">
        <div class="bg-slate-200/80 w-full m-auto p-10 pb-0 self-center rounded-2xl shadow-2xl flex justify-center">
            @yield('content')
        </div>
    </div>
</body>
</html>
