@extends('layouts.main')

@section('title', 'Edit ' . $college->name)

@section('content')
    <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-2/5 lg:w-2/5">
        <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b font-semibold text-2xl">
            Edit college
        </div>
        <div class="p-3">
            <x-alert/>
            <form action="{{route('college.update', $college)}}" method="post" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')

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
                                name="name" type="text" value="{{$college->name}}">
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
                               name="shield" type="text" value="{{$college->shield}}">
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
                               name="foundation_date" type="date" value="{{$college->foundation_date}}" max="{{now()->toDateString()}}">
                        @error('foundation_date')
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
