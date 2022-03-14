@extends('layouts.main')

@section('title', 'Edit ' . $team->name)

@section('content')
    <div class="flex flex-col">
        <x-alert/>
        <div class="self-center">
            <h2 class="font-semibold text-2xl mb-2">Edit team</h2>
            <form action="{{route('team.update', $team)}}" method="post">
                @csrf
                @method('PUT')

                <label for="name">Name*:</label><br>
                @error('name')
                    <small class="text-red-600">{{$message}}</small><br>
                @enderror
                <input type="text" name="name" value="{{$team->name}}">
                <br>

                <label for="foundation_date">Foundation Date*:</label>
                <br>
                @error('foundation_date')
                    <small class="text-red-600">*{{$message}}</small><br>
                @enderror
                <input type="date" name="foundation_date" max="{{now()->toDateString()}}" value="{{$team->foundation_date}}">
                <br>

                <label for="shield">Shield:</label>
                <br>
                @error('shield')
                    <small class="text-red-600">*{{$message}}</small><br>
                @enderror
                <input type="text" name="shield" value="{{$team->shield}}">
                <br>

                <label for="owner">Owner*:</label>
                <br>
                @error('owner_type')
                    <small class="text-red-600">{{$message}}</small><br>
                @enderror
                <input type="radio" name="owner_type" id="" value="college" {{$isCollege}}> College
                <input type="radio" name="owner_type" id="" value="club" class="ml-2" {{$isClub}}> Club
                <br>
                @error('owner')
                    <small class="text-red-600">{{$message}}</small><br>
                @enderror
                <select name="{{($isCollege) ? 'owner' : ''}}" id="college-selector" class="{{($isCollege) ? '' : 'hidden'}} mt-2">
                    <option value=""></option>
                    @foreach ($colleges as $college)
                        <option value="{{$college->id}}" {{($team->college_owner === $college->id) ? 'selected' : ''}}>{{$college->name}}</option>
                    @endforeach
                </select>
                <select name="{{($isClub) ? 'owner' : ''}}" id="club-selector" class="{{($isClub) ? '' : 'hidden'}} mt-2">
                    <option value=""></option>
                    @foreach ($clubs as $club)
                        <option value="{{$club->id}}" {{($team->club_owner === $club->id) ? 'selected' : ''}}>{{$club->name}}</option>
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
        </div>
    </div>
<script src="{{asset('js/hidder.js')}}"></script>
@endsection
