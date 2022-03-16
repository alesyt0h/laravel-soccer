<div class="rounded overflow-hidden shadow-lg bg-white mx-2 w-full">
    <div class="px-6 py-2 border-b border-light-grey">
        <div class="font-bold text-xl">
            {{ ucfirst(Str::plural($type)) }}
        </div>
    </div>
    <div class="table-responsive">
        @if (count($entity) !== 0)
            <table class="table text-grey-darkest">
                <thead class="bg-grey-dark text-white text-normal">
                <tr>
                    <th scope="col">#</th>
                    @if ($type !== 'match')
                        <th scope="col">Shield</th>
                    @endif
                    <th scope="col">Name</th>
                    <th scope="col">{{ ($type === 'match') ? 'Match Date' : 'Foundation Year'}}</th>
                    <th scope="col">{{ ($type === 'match') ? 'Result' : 'Created on'}}</th>
                    <th scope="col">Last updated</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Deletion</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($entity as $ent)
                        <tr class="border-b border-light-grey">
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            @if ($type !== 'match')
                                <td>
                                    <div class="h-[40px] w-[40px] rounded-sm flex flex-shrink-0 justify-center items-center relative">
                                        <img src="{{$ent->shield ?? asset('images/no-shield.png')}}" width="40" height="40">
                                    </div>
                                </td>
                            @endif
                            <td>
                                <a href="{{route("${type}.show", $ent->id)}}">
                                    <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                        {{($ent->name) ? $ent->name : $ent->local . ' vs ' . $ent->visitor}}
                                    </button>
                                </a>
                            </td>
                            <td class="text-right text-sm align-middle">
                                {{( $type === 'match') ?
                                    Carbon\Carbon::parse($ent->match_date)->format('d/m/Y H:m') :
                                    Carbon\Carbon::parse($ent->foundation_date)->format('Y')
                                }}
                            </td>
                            <td class="pl-5 align-middle">
                                <div class="flex">
                                    <p class="text-sm text-gray-600 ml-2">
                                        @if ($type === 'match')
                                            {{ucwords($ent->result)}}
                                            @if ($ent->result === 'local' || $ent->result === 'visitor')
                                                <span> team wins</span>
                                            @endif
                                        @else
                                           {{$ent->created_at->toDateString()}}
                                        @endif
                                    </p>
                                </div>
                            </td>
                            <td class="pl-5 align-middle">
                                <div class="flex items-center">
                                    <p class="text-sm text-gray-600 ml-2">
                                        {{$ent->updated_at->diffForHumans()}}
                                    </p>
                                </div>
                            </td>
                            @if (isSameUserOrAdmin($ent))
                                <td class="pl-4">
                                    <a href="{{route("${type}.edit", $ent->id)}}" class="text-sm leading-none text-blue-600 hover:underline">Edit</a>
                                </td>
                                <td class="pl-4">
                                    <a href="{{route("${type}.delete", $ent->id)}}" class="text-sm leading-none text-blue-600 hover:underline">Delete</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
        @else
            <span class="m-4 block">
                There is no {{Str::plural($type)}} created, please, <a href="{{route("${type}.create")}}" class="text-blue-500">create</a> one to see it here
            </span>
        @endif
            </table>
            @if ($from === 'home' && count($entity) !== 0)
                <a href="{{route("${type}.show")}}" class="pl-4 pb-4 inline-block text-sm leading-none text-blue-500 hover:underline">
                    Show all {{Str::plural($type)}}
                </a>
            @elseif ($from !== 'home')
                {{$entity->links()}}
            @endif
        </div>
</div>
