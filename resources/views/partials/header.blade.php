<header>

    <ul>
        <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li><a class="{{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}"
                href="{{ route('comics.index') }}">Comics</a></li>

    </ul>

</header>
