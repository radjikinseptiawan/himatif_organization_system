@vite(["resources/js/app.js","resources/css/navigation.css"])

<!-- Navbar -->
<nav class="bg-[#0c2b4b] fixed top-0 w-full z-20 flex justify-between items-center px-4 py-2 shadow-md">
    
    <!-- Logo -->
    <div class="flex gap-2 items-center cursor-pointer" onclick="window.location.href='/'">
        <img src="/logo/logohimatif.png" alt="" class="w-12">
        <div class="leading-tight">
            <h1 class="text-white text-sm md:text-lg font-bold">HIMATIF</h1>
            <p class="text-white text-sm md:text-base font-semibold border-t border-white/40">
                Universitas Pelita Bangsa
            </p>
        </div>
    </div>

    <!-- Menu button -->
    <button id="menuBtn"
        class="text-white text-2xl px-3 py-1 rounded-md hover:bg-white/10 transition">
        ☰
    </button>
</nav>

<div id="overlay" class="fixed inset-0 bg-black/60 z-40 hidden"></div>

<div id="sliders"
    class="fixed right-0 top-0 w-72 h-full bg-white z-50 transform translate-x-full transition-transform duration-300 shadow-2xl">

    <div class="bg-gradient-to-r from-[#0c2b4b] to-[#164a7a] h-16 flex items-center justify-between px-5">
        <span class="text-white font-semibold tracking-wide">Menu</span>
        <button id="closeMenu"
            class="text-white text-lg w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/20 transition">
            ✕
        </button>
    </div>

    <div class="flex flex-col items-center py-6 border-b">
        <div class="flex gap-3 mb-2">
            <img src="/logo/logohimatif.png" class="w-14" alt="">
        </div>
        <h1 class="text-lg text-[#0c2b4b] font-bold tracking-wide">
            HIMATIF
        </h1>
    </div>

    <ul class="px-4 py-5 space-y-2 text-gray-700 font-medium">
        <li class="flex gap-2">
            <a href="{{ route('home') }}"
                class="flex items-center w-full gap-3 px-4 py-2 rounded-lg hover:bg-[#0c2b4b]/10 transition {{ request()->routeIs('home') ? 'bg-gray-300 text-white' : 'bg-white' }}">
            @include("components.icon.Home")
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('penju') }}"
                class="flex w-full items-center gap-3 px-4 py-2 rounded-lg hover:bg-[#0c2b4b]/10 transition {{ request()->routeIs('penju') ? 'bg-gray-300 text-white' : 'bg-white' }}">
                @include("components.icon.Mutu")
                Penjamin Mutu
            </a>
        </li>
        <li>
            <a href="{{ route('penti') }}"
                class="flex w-full items-center gap-3 px-4 py-2 rounded-lg hover:bg-[#0c2b4b]/10 transition {{ request()->routeIs('penti') ? 'bg-gray-300 text-white' : 'bg-white' }}">
                @include("components.icon.Pengurus")
                Pengurus Inti
            </a>
        </li>
        <li>
            <a href="{{ route('departemen') }}"
                class="flex items-center gap-3 px-4 py-2 w-full rounded-lg hover:bg-[#0c2b4b]/10 transition {{ request()->routeIs('departemen') ? 'bg-gray-300 text-white' : 'bg-white' }}">
                @include("components.icon.Department")
                Departemen
            </a>
        </li>
        <li>
            <a href="{{ route('galeri') }}"
                class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-[#0c2b4b]/10 transition {{ request()->routeIs('galeri') ? 'bg-gray-300 text-white' : 'bg-white' }}">
                @include("components.icon.Galeri")
                Galeri
            </a>
        </li>
        <li>
            <a href="{{ route('event') }}"
                class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-[#0c2b4b]/10 transition {{ request()->routeIs('event') ? 'bg-gray-300 text-white' : 'bg-white' }}">
                @include("components.icon.Pengurus")
                Event
            </a>
        </li>

        @auth
        <li class="pt-3 border-t">
            <a href="{{ route('admin.galeri') }}"
                class="{{ request()->routeIs('admin.galeri') ? 'bg-gray-200 text-white' : 'bg-white' }} flex items-center gap-3 px-4 py-2 rounded-lg text-gray-500 transition">
                @include("components.icon.Admin")
                Admin Panel
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
                class="{{ request()->routeIs('penti') ? 'bg-gray-300 text-white' : 'bg-white' }} flex items-center gap-3 px-4 py-2 rounded-lg text-gray-500 transition">
                @include("components.icon.exit")
                Keluar
            </a>
        </li>
        @endauth
    </ul>
</div>
</div>
