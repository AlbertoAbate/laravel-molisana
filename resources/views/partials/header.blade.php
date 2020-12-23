{{-- header --}}

<header>
    <a href="{{ route('home') }}" class="brand">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </a>

    <nav>
        <li>
            <a href="{{ route('home') }}">HOME</a>
        </li>
        <li>
            <a href="{{ route('news') }}">NEWS</a>
        </li>
    </nav>
</header>