<section>
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between">

            <div class="text-white text-lg font-bold inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 pr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
                Library
            </div>

            <div class="hidden md:flex space-x-6">
                <a href="#" class="text-white hover:text-gray-300">Home</a>
                <div class="relative group">
                    <button class="text-white hover:text-gray-300 flex items-center space-x-1">
                        <span>Notes</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute hidden group-hover:block bg-white border rounded shadow-md mt-[1px] w-48">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">1th Semester</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">2th Semester</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">3th Semester</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">4th Semester</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">5th Semester</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">6th Semester</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">7th Semester</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">8th Semester</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="text-white hover:text-gray-300 flex items-center space-x-1">
                        <span>Questions</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute hidden group-hover:block bg-white border rounded shadow-md mt-[1px] w-48">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">1th questions</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">2th questions</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">3th questions</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">4th questions</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">5th questions</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">6th questions</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">7th questions</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">8th questions</a>
                    </div>
                </div>

                <a href="{{route('upload.page')}}" class="text-white hover:text-gray-300">Upload Notes</a>
            </div>

            <div class="flex items-center space-x-4">
                <div class="relative hidden md:block">
                    <input
                        type="text"
                        placeholder="Search..."
                        class="pl-10 pr-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 h-5 w-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
                @guest
                <div>
                    <a href="{{ route('login') }}" class="no-underline">
                        <button
                            class="bg-white text-blue-600 px-4 py-2 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Login
                        </button>
                    </a>
                </div>
                @endguest

                @auth
                <div class="relative">
                    <button
                        class="bg-blue-600 text-white h-10 w-10 rounded-full flex items-center justify-center border border-black focus:outline-none focus:ring-2 focus:ring-gray-400"
                        id="user-menu-button"
                        aria-expanded="false"
                        aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>

                    </button>

                    <div
                        class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg py-1 hidden group-hover:block"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="user-menu-button">
                        <a href="{{route('profile')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="block">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
                @endauth
            </div>

            <div class="md:hidden">
                <button class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
</section>
<script>
    const button = document.getElementById('user-menu-button');
    const menu = document.querySelector('[role="menu"]');

    button.addEventListener('click', function(event) {
        menu.classList.toggle('hidden');
        event.stopPropagation();
    });

    document.addEventListener('click', function() {
        if (!menu.classList.contains('hidden')) {
            menu.classList.add('hidden');
        }
    });
</script>