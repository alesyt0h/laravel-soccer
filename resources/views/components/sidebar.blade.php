<aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
    <ul class="list-reset flex flex-col">
        <li class="w-full h-full py-3 px-2 cursor-pointer hover:text-gray-700 hover:font-semibold font-sans font-hairline
                   hover:font-normal text-sm text-nav-item no-underline border-b border-gray-300" id="college-menu">
            College
            <span><i class="fa fa-angle-right float-right" id="college-icon"></i></span>
            <ul class="list-reset -mx-2 bg-white-medium-dark hidden" id="college-section">
                <a href="{{route('college.create')}}"
                    class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <li class="px-4 hover:text-blue-500">
                    Create
                    </li>
                </a>
                <a href="{{route('college.show')}}"
                class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <li class="px-4 hover:text-blue-500">
                        Show all
                    </li>
                </a>
            </ul>
        </li>
        <li class="w-full h-full py-3 px-2 cursor-pointer hover:text-gray-700 hover:font-semibold font-sans font-hairline
                   hover:font-normal text-sm text-nav-item no-underline border-b border-gray-300" id="club-menu">
            Club
            <span><i class="fa fa-angle-right float-right" id="club-icon"></i></span>
            <ul class="list-reset -mx-2 bg-white-medium-dark hidden" id="club-section">
                <a href="{{route('club.create')}}"
                    class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <li class="px-4 hover:text-blue-500">
                    Create
                    </li>
                </a>
                <a href="{{route('club.show')}}"
                class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <li class="px-4 hover:text-blue-500">
                        Show all
                    </li>
                </a>
            </ul>
        </li>
        <li class="w-full h-full py-3 px-2 cursor-pointer hover:text-gray-700 hover:font-semibold font-sans font-hairline
                   hover:font-normal text-sm text-nav-item no-underline border-b border-gray-300" id="team-menu">
            Team
            <span><i class="fa fa-angle-right float-right" id="team-icon"></i></span>
            <ul class="list-reset -mx-2 bg-white-medium-dark hidden" id="team-section">
                <a href="{{route('team.create')}}"
                    class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <li class="px-4 hover:text-blue-500">
                    Create
                    </li>
                </a>
                <a href="{{route('team.show')}}"
                class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <li class="px-4 hover:text-blue-500">
                        Show all
                    </li>
                </a>
            </ul>
        </li>
        <li class="w-full h-full py-3 px-2 cursor-pointer hover:text-gray-700 hover:font-semibold font-sans font-hairline
                   hover:font-normal text-sm text-nav-item no-underline" id="match-menu">
            Match
            <span><i class="fa fa-angle-right float-right" id="match-icon"></i></span>
            <ul class="list-reset -mx-2 bg-white-medium-dark hidden" id="match-section">
                <a href="{{route('match.create')}}"
                    class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <li class="px-4 hover:text-blue-500">
                    Create
                    </li>
                </a>
                <a href="{{route('match.show')}}"
                class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <li class="px-4 hover:text-blue-500">
                        Show all
                    </li>
                </a>
            </ul>
        </li>

    </ul>
</aside>
<script src="{{asset('js/sidebar.js')}}"></script>
