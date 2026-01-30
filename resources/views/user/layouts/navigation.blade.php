<nav
    x-data="{ open: false, openUser: false }"
    class="sticky top-0 z-50 backdrop-blur-xl border-b border-slate-700/40"
    style="background: linear-gradient(to bottom, rgba(2,6,23,.9), rgba(2,6,23,.75));"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

            {{-- ================= LEFT ================= --}}
            <div class="flex items-center gap-8">

                {{-- LOGO --}}
                <a href="{{ route('beranda') }}"
                   class="flex items-center gap-3 group">
                    <x-application-logo
                        class="h-9 w-auto transition-transform group-hover:scale-105 fill-indigo-500"/>
                    <span class="font-bold text-lg tracking-wide text-slate-100">
                        Toko Online
                    </span>
                </a>

                {{-- DESKTOP LINKS --}}
                <div class="hidden sm:flex items-center gap-5">
                    @php
                        function navActive($route) {
                            return request()->routeIs($route)
                                ? 'text-indigo-400 font-semibold'
                                : 'text-slate-300 hover:text-white';
                        }
                    @endphp

                    <a href="{{ route('beranda') }}"
                       class="{{ navActive('beranda') }} transition">
                        Beranda
                    </a>

                    <a href="{{ route('cart.index') }}"
                       class="{{ navActive('cart.*') }} transition">
                        Keranjang
                    </a>

                    <a href="{{ route('about') }}"
                       class="{{ navActive('about') }} transition">
                        Tentang Kami
                    </a>

                    @auth
                        <a href="{{ route('user.orders') }}"
                           class="{{ navActive('user.orders*') }} transition">
                            📦 Riwayat Pesanan
                        </a>
                    @endauth
                </div>
            </div>

            {{-- ================= RIGHT ================= --}}
            <div class="hidden sm:flex items-center gap-4">
                @auth
                    {{-- USER DROPDOWN --}}
                    <div class="relative">
                        <button
                            @click="openUser = !openUser"
                            class="flex items-center gap-3 px-3 py-2 rounded-xl border border-slate-700 bg-slate-800/70 hover:bg-slate-700/70 transition"
                        >
                            <div class="w-8 h-8 rounded-full bg-indigo-500 text-white flex items-center justify-center font-bold text-sm">
                                {{ strtoupper(substr(Auth::user()->name,0,1)) }}
                            </div>

                            <span class="text-slate-100 font-medium">
                                {{ Auth::user()->name }}
                            </span>

                            <svg class="w-4 h-4 text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                            </svg>
                        </button>

                        {{-- DROPDOWN --}}
                        <div
                            x-show="openUser"
                            x-transition
                            @click.outside="openUser = false"
                            class="absolute right-0 mt-3 w-48 rounded-xl overflow-hidden bg-slate-800 border border-slate-700 shadow-xl"
                        >
                            <a href="{{ route('profile.edit') }}"
                               class="block px-4 py-3 text-slate-200 hover:bg-slate-700 transition">
                                👤 Profile
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button
                                    class="w-full text-left px-4 py-3 text-red-400 hover:bg-slate-700 transition">
                                    🚪 Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth

                @guest
                    <a href="{{ route('login') }}"
                       class="px-5 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-medium transition shadow">
                        Login
                    </a>
                @endguest
            </div>

            {{-- ================= MOBILE BUTTON ================= --}}
            <button
                @click="open = !open"
                class="sm:hidden text-2xl text-slate-200 px-3 py-2 rounded-lg hover:bg-slate-800 transition"
            >
                ☰
            </button>
        </div>
    </div>

    {{-- ================= MOBILE MENU ================= --}}
    <div
        x-show="open"
        x-transition
        class="sm:hidden px-4 py-4 space-y-2 bg-slate-900 border-t border-slate-700"
    >
        <a href="{{ route('beranda') }}" class="block text-slate-200 hover:text-white">Beranda</a>
        <a href="{{ route('cart.index') }}" class="block text-slate-200 hover:text-white">Keranjang</a>
        <a href="{{ route('about') }}" class="block text-slate-200 hover:text-white">Tentang Kami</a>

        @auth
            <a href="{{ route('user.orders') }}" class="block text-slate-200 hover:text-white">
                📦 Riwayat Pesanan
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="block w-full text-left text-red-400 hover:text-red-300">
                    Logout
                </button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="block text-indigo-400 hover:text-indigo-300">
                Login
            </a>
        @endguest
    </div>
</nav>
