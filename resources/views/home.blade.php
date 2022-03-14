@extends('layouts.main')

@section('content')
    <div>
        <h1 class="text-2xl font-semibold text-center mb-2">Soccer League</h1>
        <x-alert/>
        <main class="scale-90 grid grid-cols-1 grid-rows-1 lg:grid-cols-2 lg:grid-rows-2">
            <div class="mb-8 mt-8">
                <x-listing :entity="$colleges" type="college" from="home"/>
            </div>
            <div class="mb-8 mt-8">
                <x-listing :entity="$clubs" type="club" from="home"/>
            </div>
            <div class="mb-8 mt-8">
                <x-listing :entity="$teams" type="team" from="home"/>
            </div>
            <div class="mb-8 mt-8">
                <x-listing :entity="$matches" type="match" from="home"/>
            </div>
        </main>
    </div>
@endsection
