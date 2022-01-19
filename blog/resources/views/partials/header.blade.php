<header class="container ">
    <nav class="content-header">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
        </a>
        <ul>
            <li>
                <a href="{{ route('comics') }}"
                @if (Request::route()->getName() === 'comics') class="active" @endif
                >
                    Comics
                </a>
            </li>
            <li>
                <a href="{{ route('news') }}"
                @if (Request::route()->getName() === 'news') class="active" @endif
                >
                    News
                </a>
            </li>
        </ul>
    </nav>
</header>