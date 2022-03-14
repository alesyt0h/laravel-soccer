@extends('layouts.main')

@section('title', 'Edit ' . $college->name)

@section('content')
    <div class="flex flex-col">
        <x-alert/>
        <div class="self-center">
            <h2 class="font-semibold text-2xl mb-2">Edit college</h2>
            <form action="{{route('college.update', $college)}}" method="post">
                @csrf
                @method('PUT')

                <label for="name">Name*:</label><br>
                @error('name')
                    <small class="text-red-600">{{$message}}</small><br>
                @enderror
                <input type="text" name="name" value="{{$college->name}}" class="mb-1"><br>

                <label for="shield">Shield URL:</label><br>
                @error('shield')
                    <small class="text-red-600">{{$message}}</small><br>
                @enderror
                <input type="text" name="shield" value="{{$college->shield}}" class="mb-1"><br>

                <label for="foundation_date">Foundation Date*:</label><br>
                @error('foundation_date')
                    <small class="text-red-600">{{$message}}</small><br>
                @enderror
                <input type="date" name="foundation_date" value="{{$college->foundation_date}}" max="{{now()->toDateString()}}"><br>

                <button class="px-4 py-2 font-semibold text-sm bg-cyan-800 text-white rounded-lg shadow-sm mt-4" type="submit">
                    Update
                </button>
                <button class="px-4 py-2 font-semibold text-sm bg-cyan-600 text-white rounded-lg shadow-sm" type="reset">
                    Reset
                </button>
            </form>
        </div>
    </div>
@endsection
