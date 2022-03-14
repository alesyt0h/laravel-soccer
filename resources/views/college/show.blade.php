@extends('layouts.main')

@section('title', ($college->name ?? false) ? $college->name . ' - College' : 'Colleges')

@section('content')
    @if ($college)
        <div class="max-w-4xl mx-auto">
            <h1 class="font-semibold text-gray-700 text-center text-2xl mb-4">College</h1>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Name
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{$college->name}}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Foundation date
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{$college->foundation_date}}
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Created on
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{$college->created_at}}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Last updated
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{$college->updated_at->diffForHumans()}}
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Shield
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <img src="{{$college->shield ?? asset('images/no-shield.png')}}" width="100" height="100">
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <a href="{{route('college.edit', $college)}}" class="px-4 py-2 font-semibold text-sm bg-cyan-800 text-white rounded-lg shadow-sm mt-4" type="submit">
                Edit
            </a>
            <a href="{{route('college.delete', $college)}}" class="px-4 py-2 font-semibold text-sm bg-rose-600 text-white rounded-lg shadow-sm mt-4 float-right">
                Delete
            </a>
        </div>
    @else
        <x-listing :entity="$colleges" type="college" from="show"/>
    @endif
@endsection
