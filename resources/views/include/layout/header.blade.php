<section>
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between">

            <div class="text-white text-lg font-bold">MyLogo</div>

            <div class="hidden md:flex space-x-6">
                <a href="#" class="text-white hover:text-gray-300">Home</a>
                <a href="#" class="text-white hover:text-gray-300">About Us</a>
                <a href="#" class="text-white hover:text-gray-300">Contact</a>
                <a href="#" class="text-white hover:text-gray-300">Upload</a>
            </div>

            <div class="flex items-center space-x-4">
                <div class="relative hidden md:block">
                    <input
                        type="text"
                        placeholder="Search..."
                        class="pl-10 pr-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                    </svg>
                </div>

                <div>
                    <a href="{{route('login')}}" class="no-underline">  
                        <button
                            class="bg-white text-blue-600 px-4 py-2 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Login
                        </button>
                    </a>
                </div>
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