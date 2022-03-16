@extends('layouts.main')

@section('title', '404 Not Found')

@section('content')
    <div class="flex flex-col text-center">
        <span class="text-9xl font-bold text-gray-700">404</span>
        <span class="text-4xl font-semibold text-gray-700">Not found</span>
        <span class="text-2xl text-gray-700">The requested resource could not be found on this server!</span>
    </div>
@endsection
