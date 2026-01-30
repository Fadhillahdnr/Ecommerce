<nav x-data="{ open:false }"
     class="sticky top-0 z-50 border-b bg-white">

    <div class="max-w-7xl mx-auto px-4">
        <div class="flex h-16 items-center justify-between">

            {{-- LEFT --}}
            <div class="flex items-center gap-8">

                {{-- LOGO --}}
                <a href="{{ route('admin.dashboard') }}"
                   class="flex items-center gap-2 font-bold text-lg text-gray-800">
                    <x-application-logo class="h-8 w-auto fill-indigo-600" />
                    <span>Admin Panel</span>
                </a>

                {{-- MENU DESKTOP --}}
                <div class="hidden md:flex items-center gap-6 text-sm font-medium">
                    <a href="{{ route('admin.dashboard') }}"
                       class="hover:text-indigo-600 {{ request()->routeIs('admin.dashboard') ? 'text-indigo-600' : 'text-gray-600' }}">
                        📊 Dashboard
                    </a>

                    <a href="{{ route('admin.orders') }}"
                       class="hover:text-indigo-600 {{ request()->routeIs('admin.orders*') ? 'text-indigo-600' : 'text-gray-600' }}">
                        📦 Pesanan
                    </a>

                    <a href="{{ route('admin.products.index') }}"
                       class="hover:text-indigo-600 {{ request()->routeIs('admin.products*') ? 'text-indigo-600' : 'text-gray-600' }}">
                        🛒 Produk
                    </a>
                </div>
            </div>

            {{-- RIGHT --}}
            <div class="hidden md:flex items-center gap-4">

                {{-- USER DROPDOWN --}}
                <div x-data="{ openUser:false }" class="relative">
                    <button @click="openUser=!openUser"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition">
                        <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                        </svg>
                    </button>

                    <div x-show="openUser"
                         x-transition
                         @click.away="openUser=false"
                         class="absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-lg overflow-hidden">

                        <a href="{{ route('profile.edit') }}"
                           class="block px-4 py-2 text-sm hover:bg-gray-100">
                            👤 Profile
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                🚪 Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- HAMBURGER --}}
            <button @click="open=!open"
                    class="md:hidden text-2xl">
                ☰
            </button>
        </div>
    </div>

    {{-- MOBILE MENU --}}
    <div x-show="open"
         x-transition
         class="md:hidden border-t bg-white px-4 py-4 space-y-2">

        <a href="{{ route('admin.dashboard') }}" class="block py-2">📊 Dashboard</a>
        <a href="{{ route('admin.orders') }}" class="block py-2">📦 Pesanan</a>
        <a href="{{ route('admin.products.index') }}" class="block py-2">🛒 Produk</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="block py-2 text-red-600">
                Logout
            </button>
        </form>
    </div>
</nav>
