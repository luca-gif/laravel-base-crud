<header>

    <ul>
        <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li><a class="{{ Route::currentRouteName() === 'index.index' ? 'active' : '' }}"
                href="{{ route('index.index') }}">Comics</a></li>
    </ul>

</header>
