@extends('layouts.main')

@section('title', 'Delete ' . $club->name )

@section('content')
    <div>
        <x-alert/>
        <h1 class="font-semibold text-gray-700 text-center text-2xl mb-4">Delete club</h1>
        <form action="{{route('club.destroy', $club)}}" method="post">
            @csrf
            @method('DELETE')

            <input type="hidden" name="_method" value="DELETE">
            <label for="confirm">Are you sure you want to delete <strong>{{$club->name}}</strong> ?</label>
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
