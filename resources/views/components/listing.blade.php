<div class="sm:px-6 w-11/12 m-auto">
    <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-lg shadow-md">
        <div class="text-2xl text-center">
            {{ ucfirst(Str::plural($type)) }}
        </div>
        <div class="mt-7 overflow-auto">
            <table class="w-full whitespace-nowrap">
                @if (count($entity) !== 0)
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th></th>
                            <th>Name</th>
                            <th>{{ ($type === 'match') ? 'Match Date' : 'Foundation Year'}}</th>
                            @if ($from === 'show')
                                <th>Created on</th>
                                <th>Last updated</th>
                            @endif
                            <th>Edit</th>
                            <th>Deletion</th>
                        </tr>
                        @foreach ($entity as $ent)
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                {{-- Numeration --}}
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                            {{ $loop->index + 1 }}.
                                        </div>
                                    </div>
                                </td>
                                {{-- Shield --}}
                                <td>
                                    @if ($type !== 'match')
                                        <div class="ml-5">
                                            <div class="h-[40px] w-[40px] rounded-sm flex flex-shrink-0 justify-center items-center relative">
                                                <img src="{{$ent->shield ?? asset('images/no-shield.png')}}" width="40" height="40">
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                {{-- Name --}}
                                <td class="truncate max-w-[200px]">
                                    <div class="flex items-center pl-5">
                                        <p class="truncate text-base font-medium leading-none text-gray-700 mr-2">
                                            <a href="{{route("${type}.show", $ent->id)}}" class="text-sky-700">
                                                {{($ent->name) ? $ent->name : $ent->local . ' vs ' . $ent->visitor}}
                                            </a>
                                        </p>
                                    </div>
                                </td>
                                {{-- Foundation Date --}}
                                <td class="pl-24">
                                    <div class="flex items-center">
                                        <p class="text-sm leading-none text-gray-600 ml-2">
                                            {{( $type === 'match') ?
                                                    Carbon\Carbon::parse($ent->match_date)->format('d/m/Y H:m') :
                                                    Carbon\Carbon::parse($ent->foundation_date)->format('Y')
                                            }}
                                        </p>
                                    </div>
                                </td>
                                @if ($from === 'show')
                                    {{-- Created Date --}}
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <p class="text-sm leading-none text-gray-600 ml-2">
                                                {{$ent->created_at->toDateString()}}
                                            </p>
                                        </div>
                                    </td>
                                    {{-- Last updated --}}
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <p class="text-sm leading-none text-gray-600 ml-2">
                                                {{$ent->updated_at->diffForHumans()}}
                                            </p>
                                        </div>
                                    </td>
                                @endif
                                {{-- Edit & Delete --}}
                                @if (isSameUserOrAdmin($ent))
                                    <td class="pl-4">
                                        <a href="{{route("${type}.edit", $ent->id)}}" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Edit</a>
                                    </td>
                                    <td class="pl-4">
                                        <a href="{{route("${type}.delete", $ent->id)}}" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Delete</a>
                                    </td>
                                @endif
                            </tr>
                            <tr class="h-3"></tr>
                        @endforeach
                    </tbody>
                    @else
                        There is no {{Str::plural($type)}} created, please, <a href="{{route("${type}.create")}}" class="text-blue-500">create</a> one to see it here
                    @endif
                </table>
            </div>
            @if ($from === 'home' && count($entity) !== 0)
                <a href="{{route("${type}.show")}}" class="mt-4 inline-block focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">
                    Show all {{Str::plural($type)}}
                </a>
            @elseif ($from !== 'home')
                {{$entity->links()}}
            @endif
        </div>
    </div>
