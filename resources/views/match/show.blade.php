@extends('layouts.main')

@section('title', ($match ?? false) ? $match->visitor->name . ' vs ' . $match->local->name . ' - Match' : 'Matches')

@section('content')
    @if ($match)
        <div class="max-w-4xl mx-auto">
            <h1 class="font-semibold text-gray-700 text-center text-2xl mb-4">Match</h1>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Teams
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <a href="{{route('team.show', $match->visitor->id)}}" class="text-blue-400">
                                    <strong>{{$match->visitor->name}}</strong>
                                </a>
                                (visitor) vs
                                <a href="{{route('team.show', $match->local->id)}}" class="text-blue-400">
                                    <strong>{{$match->local->name}}</strong>
                                </a>
                                (local)
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Match date
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{$match->match_date}}
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Game status
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ucwords($match->status)}}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Game result
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ucwords($match->result)}}
                                @if ($match->result === 'local' || $match->result === 'visitor')
                                    <span> team wins</span>
                                @endif
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Created on
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{$match->created_at}}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Last updated
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{$match->updated_at->diffForHumans()}}
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Shields
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 flex">
                                <img src="{{$match->visitor->shield ?? asset('images/no-shield.png')}}" width="100" height="100" class="self-center">
                                <span class="self-center font-bold">VS</span>
                                <img src="{{$match->local->shield ?? asset('images/no-shield.png')}}" width="100" height="100" class="self-center">
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <a href="{{route('match.edit', $match)}}" class="px-4 py-2 font-semibold text-sm bg-cyan-800 text-white rounded-lg shadow-sm mt-4" type="submit">
                Edit
            </a>
            <a href="{{route('match.delete', $match)}}" class="px-4 py-2 font-semibold text-sm bg-rose-600 text-white rounded-lg shadow-sm mt-4 float-right">
                Delete
            </a>
        </div>
    @else
        <x-listing :entity="$matches" type="match" from="show"/>
    @endif
@endsection
