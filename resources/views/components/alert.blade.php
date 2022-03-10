@if( Session::has('result') )
    <div class="bg-red-200 text-red-700 p-4 rounded-lg border border-red-800/70 mb-2">
        {{ Session::get('result') }}
    </div>
@endif
