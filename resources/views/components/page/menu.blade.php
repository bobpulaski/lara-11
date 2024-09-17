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
</nav>
