@extends('layouts.main')

@section('title', 'Create a new team')

@if (!count($colleges ?? []) && !count($clubs ?? []))
    {{-- Do Nothing --}}
@elseif (!count($colleges ?? []))
    {{Session::put('result', 'There is no Colleges created, you will be able to select only a Club as owner, but not a College')}}
@elseif (!count($clubs ?? []))
    {{Session::put('result', 'There is no Clubs created, you will be able to select only a College as owner, but not a Club')}}
@endif

@section('content')
    <div class="flex flex-col">
        <x-alert/>
        {{Session::forget('result')}}
        <div class="self-center">
            @if (!count($colleges ?? []) && !count($clubs ?? []))
                There is no Colleges or Clubs created, you must create first a <a href="{{route('college.create')}}" class="text-blue-500 font-semibold">College</a> or <a href="{{route('club.create')}}" class="text-blue-500 font-semibold">Club</a> to be able to create a team
            @else
                <h2 class="font-semibold text-2xl mb-2">Team Creation</h2>
                <form action="" method="POST">
                    @csrf

                    <label for="name">Name*:</label><br>
                    @error('name')
                        <small class="text-red-600">{{$message}}</small><br>
                    @enderror
                    <input type="text" name="name">
                    <br>

                    <label for="foundation_date">Foundation Date*:</label>
                    <br>
                    @error('foundation_date')
                        <small class="text-red-600">{{$message}}</small><br>
                    @enderror
                    <input type="date" name="foundation_date" max="{{now()->toDateString()}}">
                    <br>

                    <label for="shield">Shield:</label>
                    <br>
                    @error('shield')
                        <small class="text-red-600">{{$message}}</small><br>
                    @enderror
                    <input type="text" name="shield">
                    <br>

                    <label for="owner">Owner*:</label>
                    <br>
                    @error('owner_type')
                        <small class="text-red-600">{{$message}}</small><br>
                    @enderror
                    <input type="radio" name="owner_type" id="" value="college" class="{{count($colleges) ? '' : 'hidden'}}">
                    <label for="owner_type_college" class="{{count($colleges) ? '' : 'hidden'}}">College</label>
                    <input type="radio" name="owner_type" id="" value="club" class="{{count($clubs) ? '' : 'hidden'}} ml-2">
                    <label for="owner_type_club" class="{{count($clubs) ? '' : 'hidden'}}">Club</label>
                    <br>
                    @error('owner')
                        <small class="text-red-600">{{$message}}</small><br>
                    @enderror
                    <select name="" id="college-selector" class="hidden mt-2">
                        <option value=""></option>
                        @foreach ($colleges as $college)
                            <option value="{{$college->id}}">{{$college->name}}</option>
                        @endforeach
                    </select>
                    <select name="" id="club-selector" class="hidden mt-2">
                        <option value=""></option>
                        @foreach ($clubs as $club)
                            <option value="{{$club->id}}">{{$club->name}}</option>
                        @endforeach
                    </select>
                    <br>

                    <button class="px-4 py-2 font-semibold text-sm bg-cyan-800 text-white rounded-lg shadow-sm mt-4" type="submit">
                        Create
                    </button>
                    <button class="px-4 py-2 font-semibold text-sm bg-cyan-600 text-white rounded-lg shadow-sm" type="reset">
                        Reset
                    </button>
                </form>
            @endif
        </div>
    </div>
<script src="{{asset('js/hidder.js')}}"></script>
@endsection
