<header class="relative">
    <div class="absolute top-0 w-full z-50">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center relative z-50">
            <div class="flex items-center">
                <a href="{{ route('website.home') }}" class="flex items-center">
                    <img src="{{ asset('icons/android-chrome-512x512.webp') }}" alt="ASRO Logo" class="h-16"
                         loading="lazy" width="60" height="60">
                </a>
            </div>
            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ route('website.home') }}"
                   class="nav-link {{ request()->routeIs('website.home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('website.downloads') }}"
                   class="nav-link {{ request()->routeIs('website.downloads') ? 'active' : '' }}">Downloads</a>
                <a href="{{ route('website.ranking') }}"
                   class="nav-link {{ request()->routeIs('website.ranking') ? 'active' : '' }}">Ranking</a>
                <a href="{{ route('website.events') }}"
                   class="nav-link {{ request()->routeIs('website.events') ? 'active' : '' }}">Events</a>
                <a href="{{ route('website.donate') }}"
                   class="nav-link {{ request()->routeIs('website.donate') ? 'active' : '' }}">Donation</a>
                <a href="{{ route('website.account') }}"
                   class="nav-link {{ request()->routeIs('website.account') ? 'active' : '' }}">Account</a>
                @guest
                    <a href="{{ route('website.login') }}"
                       class="login-btn {{ request()->routeIs('website.login') ? 'active' : '' }}">Login</a>
                    <a href="{{ route('website.register') }}"
                       class="register-btn {{ request()->routeIs('website.register') ? 'active' : '' }}">Register</a>
                @endguest
                @auth
                        <a class="logout-btn" href="{{ route('website.logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    <form id="logout-form" action="{{ route('website.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gold-dark hover:text-gold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </nav>
        <div id="mobile-menu" class="hidden md:hidden bg-midnight-dark bg-opacity-95 fixed w-full top-16 left-0 z-40">
            <div class="container mx-auto px-4 py-3">
                <a href="{{ route('website.home') }}"
                   class="mobile-nav-link {{ request()->routeIs('website.home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('website.downloads') }}"
                   class="mobile-nav-link {{ request()->routeIs('website.downloads') ? 'active' : '' }}">Downloads</a>
                <a href="{{ route('website.ranking') }}"
                   class="mobile-nav-link {{ request()->routeIs('website.ranking') ? 'active' : '' }}">Ranking</a>
                <a href="{{ route('website.events') }}"
                   class="mobile-nav-link {{ request()->routeIs('website.events') ? 'active' : '' }}">Events</a>
                <a href="{{ route('website.donate') }}"
                   class="nav-link {{ request()->routeIs('website.donate') ? 'active' : '' }}">Donation</a>
                @guest
                    <div class="flex space-x-2 pt-2 border-t border-gold-dark">
                        <a href="{{ route('website.login') }}"
                           class="mobile-login-btn {{ request()->routeIs('website.login') ? 'active' : '' }}">Login</a>
                        <a href="{{ route('website.register') }}"
                           class="mobile-register-btn {{ request()->routeIs('website.register') ? 'active' : '' }}">Register</a>
                    </div>
                @endguest
                @auth
                    <div class="flex space-x-2 pt-2 border-t border-gold-dark">
                        <a class="mobile-logout-btn" href="{{ route('website.logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>
                    <form id="logout-form" action="{{ route('website.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    <a href="{{ route('website.account') }}"
                       class="mobile-nav-link {{ request()->routeIs('website.account') ? 'active' : '' }}">Account</a>
                @endauth
            </div>
        </div>
    </div>

</header>
