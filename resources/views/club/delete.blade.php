@extends('layouts.main')

@section('title', 'Delete ' . $club->name )

@section('content')
    <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/4 lg:w-1/4">
        <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b font-semibold text-2xl">
            Delete club
        </div>
        <div class="p-3">
            <x-alert/>
            <form action="{{route('club.destroy', $club)}}" method="post" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('DELETE')

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
    </div>
@endsection
