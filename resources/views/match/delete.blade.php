@extends('layouts.main')

@section('title', 'Delete ' . $match->visitor->name . ' vs ' . $match->local->name . 'match')

@section('content')
<div>
    <x-alert/>
    <h1 class="font-semibold text-gray-700 text-center text-2xl mb-4">Delete match</h1>
    <form action="{{route('match.destroy', $match)}}" method="post">
        @csrf
        @method('DELETE')

        <label for="confirm">
            Are you sure you want to delete <strong>{{$match->visitor->name}}</strong>
            vs <strong>{{$match->local->name}}</strong> match?
        </label>
        <br>
        <button class="px-4 py-2 font-semibold text-sm bg-rose-600 text-white rounded-lg shadow-sm mt-4" type="submit">
            Yes
        </button>
        <a href="{{url()->previous()}}" class="px-4 py-2 font-semibold text-sm bg-cyan-800 text-white rounded-lg shadow-sm mt-4 float-right">
            No
        </a>
    </form>

</div>
@endsection
