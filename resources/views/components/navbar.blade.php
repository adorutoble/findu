<header class="fixed top-0 left-0 w-full z-50">
    <nav class="bg-white border-gray-200 shadow-sm text-sm p-6 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center">
                <img src="{{ asset('img/logo.png') }}" class="ml-16 h-2 sm:h-9" alt="FindU Logo" />
            </a>

            <div class="flex items-center lg:order-2">
                @auth
                    <div class="relative group">
                        <button class="text-[#233A75] text-xs font-medium px-8 py-2 focus:outline-none">
                            {{ Auth::user()->name }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.88l3.71-3.69a.75.75 0 011.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd"/>
                            </svg>
                            
                        </button>
                        <div class="absolute right-0 hidden bg-white shadow-md rounded-lg w-40 mt-2 group-hover:block">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-[#233A75] text-xs border-2 border-[#233A75] hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-full px-8 py-2 lg:py-2.5 focus:outline-none">
                        MASUK
                    </a>
                @endauth
                
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <ul class="flex flex-col mt-4 font-medium gap-4 lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="/" class="block py-2 pr-4 pl-3 text-white rounded bg-[#233A75] lg:bg-transparent lg:text-[#233A75] lg:p-0" aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('perguruan-tinggi') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#233A75] lg:p-0">Perguruan Tinggi</a>
                </li>
            
                @auth
                    <li>
                        <a href="{{ route('perbandingan') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#233A75] lg:p-0">Perbandingan</a>
                    </li>
                @endauth
            
                <li>
                    <a href="{{ route('beasiswa') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#233A75] lg:p-0">Beasiswa</a>
                </li>
                <li>
                    <a href="{{ route('berita') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#233A75] lg:p-0">Berita</a>
                </li>
            </ul>            
        </div>
    </nav>
</header>