<nav>
    <div class="">
        <div class="flex h-16 items-center justify-between">
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-lg font-bold">CodeOcean</a>
            </div>
            <div class="hidden md:block">
                <ul class="flex space-x-4">
                    <li>
                        <a class="{{ Route::currentRouteName() == 'home' ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRouteName() == 'about' ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRouteName() == 'contact' ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button id="burger-btn" class="text-gray-600 hover:text-blue-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden">
        <ul class="flex flex-col space-y-2 p-2">
            <li>
                <a class="{{ Route::currentRouteName() == 'home' ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }}"
                    href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() == 'about' ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }}"
                    href="{{ route('about') }}">About</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() == 'contact' ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }}"
                    href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    const burgerBtn = document.getElementById('burger-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    burgerBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>


{{--
<nav>
    <ul>
        <li>
            <a class="{{ Route::currentRouteName() == 'home' ? 'text-blue-600' : '' }}"
                href="{{ route('home') }}">Home</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() == 'about' ? 'text-blue-600' : '' }}"
                href="{{ route('about') }}">About</a>
        </li>
        <li>
            <a class="{{ Route::currentRouteName() == 'contact' ? 'text-blue-600' : '' }}"
                href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>
</nav> --}}
