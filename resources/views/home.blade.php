@extends('layouts.main')

@section('content')
    <div>
        <h1 class="text-2xl font-semibold text-center mb-2">Soccer League</h1>
        <x-alert/>
        <main style="display: grid; grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);" class="scale-90">
            <div class="mb-8">
                <x-listing :entity="$colleges" type="college" from="home"/>
            </div>
            <div>
                <x-listing :entity="$clubs" type="club" from="home"/>
            </div>
            <div>
                <x-listing :entity="$teams" type="team" from="home"/>
            </div>
            <div>
                <x-listing :entity="$matches" type="match" from="home"/>
            </div>
        </main>
    </div>
@endsection
