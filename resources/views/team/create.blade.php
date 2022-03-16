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
    <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-2/5 lg:w-2/5">
        <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b font-semibold text-2xl">
            Team Creation
        </div>
        <div class="p-3">
            <x-alert/>
            {{Session::forget('result')}}
            @if (!count($colleges ?? []) && !count($clubs ?? []))
                There is no Colleges or Clubs created, you must create first a <a href="{{route('college.create')}}" class="text-blue-500 font-semibold">College</a> or <a href="{{route('club.create')}}" class="text-blue-500 font-semibold">Club</a> to be able to create a team
            @else
                <form action="" method="post" enctype="multipart/form-data" class="w-full">
                    @csrf

                    {{-- Name --}}
                    <div>
                        <div class="md:flex md:items-center mb-6 !items-baseline">
                            <div class="md:w-1/4">
                                <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
                                    for="name">
                                    Name*
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light @error('name') border border-red-500 @enderror"
                                    name="name" type="text" value="{{old('name')}}">
                                @error('name')
                                    <small class="text-red-600">{{$message}}</small><br>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- Shield --}}
                    <div class="md:flex md:items-center mb-6 !items-baseline">
                        <div class="md:w-1/4">
                            <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
                                for="shield">
                                Shield URL
                            </label>
                        </div>
                        <div class="md:w-3/4">
                            <input class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light @error('shield') border border-red-500 @enderror"
                                name="shield" type="text" value="{{old('shield')}}">
                            @error('shield')
                                <small class="text-red-600">{{$message}}</small><br>
                            @enderror
                        </div>
                    </div>
                    {{-- Foundation Date --}}
                    <div class="md:flex md:items-center mb-6 !items-baseline">
                        <div class="md:w-1/4">
                            <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
                                for="foundation_date">
                                Foundation Date*
                            </label>
                        </div>
                        <div class="md:w-3/4">
                            <input class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light @error('foundation_date') border border-red-500 @enderror"
                                name="foundation_date" type="date" max="{{now()->toDateString()}}" value="{{old('foundation_date')}}">
                            @error('foundation_date')
                                <small class="text-red-600">{{$message}}</small><br>
                            @enderror
                        </div>
                    </div>
                    {{-- Owner Type --}}
                    <div class="md:flex md:items-center mb-6 !items-baseline">
                        <div class="md:w-1/4">
                            <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
                                for="owner_type">
                                Owner*
                            </label>
                        </div>
                        <div class="md:w-3/4">
                            <input type="radio" name="owner_type" id="" value="college" class="{{count($colleges) ? '' : 'hidden'}}">
                            <label for="owner_type_college" class="{{count($colleges) ? '' : 'hidden'}}">College</label>
                            <input type="radio" name="owner_type" id="" value="club" class="{{count($clubs) ? '' : 'hidden'}} ml-2">
                            <label for="owner_type_club" class="{{count($clubs) ? '' : 'hidden'}}">Club</label>
                            <br>
                            @error('owner_type')
                                <small class="text-red-600">{{$message}}</small><br>
                            @enderror
                        </div>
                    </div>
                    {{-- Owner --}}
                    <div class="md:flex md:items-center mb-6 !items-baseline">
                        <div class="md:w-1/4"></div>
                        <div class="md:w-3/4">
                            <select name="" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey hidden" id="college-selector">
                                <option value=""></option>
                                @foreach ($colleges as $college)
                                    <option value="{{$college->id}}">{{$college->name}}</option>
                                @endforeach
                            </select>
                            <select name="" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey hidden" id="club-selector">
                                <option value=""></option>
                                @foreach ($clubs as $club)
                                    <option value="{{$club->id}}">{{$club->name}}</option>
                                @endforeach
                            </select>
                            @error('owner')
                                <small class="text-red-600">{{$message}}</small><br>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button class="shadow bg-cyan-800 hover:bg-cyan-900 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                                Create
                            </button>
                            <button class="shadow bg-cyan-600 hover:bg-cyan-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="reset">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
    <script src="{{asset('js/hidder.js')}}"></script>
@endsection
