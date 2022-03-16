<header class="bg-nav">
    <div class="flex justify-between">
        <div class="p-1 mx-3 inline-flex items-center">
            <i class="fas fa-bars pr-2 text-white cursor-pointer" onclick="sidebarToggle()"></i>
            <a href="{{route('home')}}">
                <img src="{{asset('images/soccer-league-logo.png')}}" class="ml-4 h-[65px]">
            </a>
        </div>
        <div class="p-1 flex flex-row items-center">
            @auth
                <div class="text-gray-200 py-2 flex flex-col text-right justify-between pb-4 pl-2 mr-2">
                    <span>Welcome, <strong>{{ auth()->user()->username }}</strong></span>
                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                        @csrf
                        <a onclick="document.querySelector('#logoutForm').submit(); return false;" class="underline cursor-pointer hover:text-gray-400">Logout</a>
                    </form>
                </div>
            @endauth
            @guest
                <div class="py-2 flex justify-start items-center pb-4 pl-2 mr-2">
                    <a href="{{route('login')}}" class="px-4 py-2 font-semibold text-sm bg-cyan-800 text-white rounded-lg shadow-sm mr-4">
                        Login
                    </a>
                    <a href="{{route('register')}}" class="px-4 py-2 font-semibold text-sm bg-cyan-600 text-white rounded-lg shadow-sm">
                        Register
                    </a>
                </div>
            @endguest
        </div>
    </div>
</header>
