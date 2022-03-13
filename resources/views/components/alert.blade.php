@if( Session::has('result') )
    <div class="{{ (Session::get('success')) ? 'bg-green-200 text-green-700 border-green-800/70' : 'bg-red-200 text-red-700 border-red-800/70' }} p-4 rounded-lg border border-red-800/70 mb-2 m-auto w-fit">
        {{ Session::get('result') }}
    </div>
@endif
