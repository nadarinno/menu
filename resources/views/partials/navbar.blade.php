<header class="navbar">
    <div class="container navbar-content">
        <a href="{{ route('menu') }}" class="restaurant-logo">
            <span class="logo-icon">🍽️</span>

            <span>
                {{ $restaurant['name'] }}
            </span>
        </a>

        <nav>
            <a
                href="{{ url('/') }}"
                class="{{ request()->routeIs('menu') ? 'active' : '' }}"
            >
                Menu
            </a>
        </nav>
    </div>
</header>