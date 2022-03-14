@extends('layouts.main')

@foreach ($teams as $team)
    @php
        if($team->id === $match->visitor){
            $visitor = $team->name;
        }
        if($team->id === $match->local){
            $local = $team->name;
        }
    @endphp
@endforeach

@section('title', 'Edit ' . $visitor . ' vs ' . $local)

@section('content')
    <div class="flex flex-col">
        <x-alert/>
        <div class="self-center">
            <h2 class="font-semibold text-2xl mb-2">Edit match</h2>
            <form action="{{route('match.update', $match)}}" method="post">
                @csrf
                @method('PUT')

                <label for="match_date">Match Date*:</label>
                <br>
                @error('match_date')
                    <small class="text-red-600">{{$message}}</small><br>
                @enderror
                <input type="datetime-local" name="match_date"
                       value="{{ Carbon\Carbon::parse($match->match_date)->toDateTimeLocalString('minute') }}"
                       max="{{now()->addYear()->toDateTimeLocalString('minute')}}">
                <br>

                <label for="local">Local Team*:</label>
                <br>
                @error('local')
                    <small class="text-red-600">{{$message}}</small><br>
                @enderror
                <select name="local" id="">
                    <option value=""></option>
                    @foreach ($teams as $team)
                        <option {{ ($match->local === $team->id) ? 'selected' : '' }} value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
                <br>

                <label for="visitor">Visitor Team*:</label>
                <br>
                @error('visitor')
                    <small class="text-red-600">{{$message}}</small><br>
                @enderror
                <select name="visitor" id="">
                    <option value=""></option>
                    @foreach ($teams as $team)
                        <option {{ ($match->visitor === $team->id) ? 'selected' : '' }} value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
                <br>

                <label for="status">Match Status*:</label>
                <br>
                @error('status')
                    <small class="text-red-600">{{$message}}</small><br>
                @enderror
                <select name="status" id="">
                    @foreach ($statuses as $status)
                        <option value="{{$status}}" {{($match->status === $status) ? 'selected' : '' }}>
                            {{ucwords($status)}}
                        </option>
                    @endforeach
                </select>
                <br>

                <label for="result">Match Result*:</label>
                <br>
                @error('result')
                    <small class="text-red-600">*{{$message}}</small><br>
                @enderror
                <select name="result" id="">
                    @foreach ($results as $result)
                        <option value="{{$result}}" {{($match->result === $result) ? 'selected' : '' }}>
                            {{ucwords($result)}}
                        </option>
                    @endforeach
                </select>
                <br>

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
