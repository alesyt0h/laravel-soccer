<aside class="bg-gray-800 w-[300px] min-h-screen fixed shadow-2xl text-white shadow-[10px_0_5px_-2px_rgba(68,68,68,1)] border-r-2 border-gray-500/60">
    {{-- Logo --}}
    <a href="{{route('home')}}">
        <img src="{{asset('images/soccer-league-logo.png')}}" class="m-4">
    </a>
    {{-- College --}}
    <div class="border-b border-gray-200/20 py-2">
        <h3 class="-my-3 flow-root">
            <button type="button" id="college-btn" class="py-3 w-full flex items-center justify-between text-sm text-gray-300 hover:text-gray-400">
                <span class="font-semibold text-xl pl-2">
                    College
                </span>
                <span class="ml-6 flex items-center pr-2">
                    {{-- Expand Icon --}}
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" id="college-expand">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    {{-- Collapse Icon --}}
                    <svg class="h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" id="college-collapse">
                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </button>
        </h3>
        <div class="pt-6 hidden" id="college-section">
            <div class="space-y-4">
                <div class="flex items-center">
                    <a href="{{route('college.create')}}" class="ml-3 text-lm font-medium text-gray-400 hover:text-gray-100">Create</a>
                </div>

                <div class="flex items-center">
                    <a href="{{route('college.show')}}" class="ml-3 text-lm font-medium text-gray-400 hover:text-gray-100">Show all</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Club --}}
    <div class="border-b border-gray-200/20 py-2">
        <h3 class="-my-3 flow-root">
            <button type="button" id="club-btn" class="py-3 w-full flex items-center justify-between text-sm text-gray-300 hover:text-gray-400">
                <span class="font-semibold text-xl pl-2">
                    Club
                </span>
                <span class="ml-6 flex items-center pr-2">
                    {{-- Expand Icon --}}
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" id="club-expand">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    {{-- Collapse Icon --}}
                    <svg class="h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" id="club-collapse">
                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </button>
        </h3>
        <div class="pt-6 hidden" id="club-section">
            <div class="space-y-4">
                <div class="flex items-center">
                    <a href="{{route('club.create')}}" class="ml-3 text-lm font-medium text-gray-400 hover:text-gray-100">Create</a>
                </div>

                <div class="flex items-center">
                    <a href="{{route('club.show')}}" class="ml-3 text-lm font-medium text-gray-400 hover:text-gray-100">Show all</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Team --}}
    <div class="border-b border-gray-200/20 py-2">
        <h3 class="-my-3 flow-root">
            <button type="button" id="team-btn" class="py-3 w-full flex items-center justify-between text-sm text-gray-300 hover:text-gray-400">
                <span class="font-semibold text-xl pl-2">
                    Team
                </span>
                <span class="ml-6 flex items-center pr-2">
                    {{-- Expand Icon --}}
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" id="team-expand">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    {{-- Collapse Icon --}}
                    <svg class="h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" id="team-collapse">
                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </button>
        </h3>
        <div class="pt-6 hidden" id="team-section">
            <div class="space-y-4">
                <div class="flex items-center">
                    <a href="{{route('team.create')}}" class="ml-3 text-lm font-medium text-gray-400 hover:text-gray-100">Create</a>
                </div>

                <div class="flex items-center">
                    <a href="{{route('team.show')}}" class="ml-3 text-lm font-medium text-gray-400 hover:text-gray-100">Show all</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Match --}}
    <div class="border-b border-gray-200/20 py-2">
        <h3 class="-my-3 flow-root">
            <button type="button" id="match-btn" class="py-3 w-full flex items-center justify-between text-sm text-gray-300 hover:text-gray-400">
                <span class="font-semibold text-xl pl-2">
                    Match
                </span>
                <span class="ml-6 flex items-center pr-2">
                    {{-- Expand Icon --}}
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" id="match-expand">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    {{-- Collapse Icon --}}
                    <svg class="h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" id="match-collapse">
                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </button>
        </h3>
        <div class="pt-6 hidden" id="match-section">
            <div class="space-y-4">
                <div class="flex items-center">
                    <a href="{{route('match.create')}}" class="ml-3 text-lm font-medium text-gray-400 hover:text-gray-100">Create</a>
                </div>

                <div class="flex items-center">
                    <a href="{{route('match.show')}}" class="ml-3 text-lm font-medium text-gray-400 hover:text-gray-100">Show all</a>
                </div>
            </div>
        </div>
    </div>
</aside>

<script src="{{asset('js/sidebar.js')}}"></script>
