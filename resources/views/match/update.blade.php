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
    <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-2/5 lg:w-2/5">
        <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b font-semibold text-2xl">
            Edit match
        </div>
        <div class="p-3">
            <x-alert/>
            <form action="{{route('match.update', $match)}}" method="post" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')

                {{-- Match Date --}}
                <div>
                    <div class="md:flex md:items-center mb-6 !items-baseline">
                        <div class="md:w-1/4">
                            <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
                                for="match_date">
                                Match Date*
                            </label>
                        </div>
                        <div class="md:w-3/4">
                            <input class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker
                                            leading-tight focus:outline-none focus:bg-white focus:border-purple-light @error('name') border border-red-500 @enderror"
                                    name="match_date" type="datetime-local" max="{{now()->addYear()->toDateTimeLocalString('minute')}}"
                                    value="{{ Carbon\Carbon::parse($match->match_date)->toDateTimeLocalString('minute') }}">
                            @error('match_date')
                                <small class="text-red-600">{{$message}}</small><br>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Local Team --}}
                <div class="md:flex md:items-center mb-6 !items-baseline">
                    <div class="md:w-1/4">
                        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
                                for="local">
                            Local Team*
                        </label>
                    </div>
                    <div class="md:w-3/4">
                        <select name="local" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                            <option value=""></option>
                            @foreach ($teams as $team)
                                <option {{ ($match->local === $team->id) ? 'selected' : '' }} value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                        @error('local')
                        <small class="text-red-600">{{$message}}</small><br>
                        @enderror
                    </div>
                </div>
                {{-- Visitor Team --}}
                <div class="md:flex md:items-center mb-6 !items-baseline">
                    <div class="md:w-1/4">
                        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
                                for="visitor">
                            Visitor Team*
                        </label>
                    </div>
                    <div class="md:w-3/4">
                        <select name="visitor" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                            <option value=""></option>
                            @foreach ($teams as $team)
                                <option {{ ($match->visitor === $team->id) ? 'selected' : '' }} value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                        @error('visitor')
                        <small class="text-red-600">{{$message}}</small><br>
                        @enderror
                    </div>
                </div>
                {{-- Match Status --}}
                <div class="md:flex md:items-center mb-6 !items-baseline">
                    <div class="md:w-1/4">
                        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
                                for="status">
                            Match Status*
                        </label>
                    </div>
                    <div class="md:w-3/4">
                        <select name="status" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                            @foreach ($statuses as $status)
                                <option value="{{$status}}" {{($match->status === $status) ? 'selected' : '' }}>
                                    {{ucwords($status)}}
                                </option>
                            @endforeach
                        </select>
                        @error('status')
                        <small class="text-red-600">{{$message}}</small><br>
                        @enderror
                    </div>
                </div>
                {{-- Match Result --}}
                <div class="md:flex md:items-center mb-6 !items-baseline">
                    <div class="md:w-1/4">
                        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
                                for="result">
                            Match Result*
                        </label>
                    </div>
                    <div class="md:w-3/4">
                        <select name="result" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                            @foreach ($results as $result)
                                <option value="{{$result}}" {{($match->result === $result) ? 'selected' : '' }}>
                                    {{ucwords($result)}}
                                </option>
                            @endforeach
                        </select>
                        @error('result')
                        <small class="text-red-600">{{$message}}</small><br>
                        @enderror
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="shadow bg-cyan-800 hover:bg-cyan-900 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Update
                        </button>
                        <button class="shadow bg-cyan-600 hover:bg-cyan-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="reset">
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
