@extends('layouts.main')

@section('title', 'Create a new match')

@section('content')
    <div class="flex flex-col">
        <x-alert/>
        <div class="self-center">
            <h2 class="font-semibold text-2xl mb-2">Match Creation</h2>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf

                <label for="match_date">Match Date*:</label>
                <br>
                @error('match_date')
                    <small class="text-red-600">{{$message}}</small>
                @enderror
                <input type="datetime-local" name="match_date"
                       max="{{now()->addYear()->toDateTimeLocalString('minute')}}">
                <br>

                <label for="local">Local Team*:</label>
                <br>
                @error('local')
                    <small class="text-red-600">{{$message}}</small>
                @enderror
                <select name="local" id="">
                    <option value=""></option>
                    @foreach ($teams as $team)
                        <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
                <br>

                <label for="visitor">Visitor Team*:</label>
                <br>
                @error('visitor')
                    <small class="text-red-600">{{$message}}</small>
                @enderror
                <select name="visitor" id="">
                    <option value=""></option>
                    @foreach ($teams as $team)
                        <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
                <br>

                <label for="status">Match Status*:</label>
                <br>
                @error('status')
                    <small class="text-red-600">{{$message}}</small>
                @enderror
                <select name="status" id="">
                    @foreach ($statuses as $status)
                        <option value="{{$status}}" {{($status === 'in progress') ? 'selected' : '' }}>
                            {{ucwords($status)}}
                        </option>
                    @endforeach
                </select>
                <br>

                <label for="result">Match Result*:</label>
                <br>
                @error('result')
                    <small class="text-red-600">*{{$message}}</small>
                @enderror
                <select name="result" id="">
                    @foreach ($results as $result)
                        <option value="{{$result}}" {{($result === 'not played yet') ? 'selected' : '' }}>
                            {{ucwords($result)}}
                        </option>
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
@endsection
