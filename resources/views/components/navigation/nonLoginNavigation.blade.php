@vite("resources/js/app.js","resources/css/navigation.css")
<nav class="bg-[#0c2b4b] flex w-full fixed z-20 justify-between p-2 items-center top-0">
    
    <div class="flex gap-2 items-center cursor-pointer" onclick="window.location.href = '/'">
        <img src="logo/logohimatif.png" alt="" class="w-12">
        <div>
            <h1 class="text-white text-[12px] md:text-xl font-bold">HIMATIF</h1>
            <p class="text-white font-semibold text-[12px] md:text-xl border-t-2">
                Universitas Pelita Bangsa
            </p>
        </div>
    </div>


    <button id="menuBtn" class="text-white text-2xl cursor-pointer hover:border transition-all hover:rounded-md px-2">
        ☰
    </button>
</nav>

<div id="sliders" class="fixed w-72 right-0 top-0 h-full bg-white z-50 transform translate-x-full transition-transform duration-300">
    <div class="bg-yellow-500 w-full h-14 p-2">
        <button id="closeMenu" class="p-1 text-white rounded-md transition-all hover:bg-red-900 hover:text-red-950 hover:cursor-pointer hover:shadow-xl 
        border w-10 "> X </button>
    </div>

    <div class="flex justify-center items-center">
        <img src="/logo/logohimatif.png" class="w-20" alt="">
        <img src="/logo/kabinetIntegra.png" class="w-20" alt="">
    </div>

    <ul class="p-2">
        <a href="{{ route("home") }}"><li class="p-2 my-1 border rounded-md text border-yellow-500 cursor-pointer font-semibold transition-all hover:bg-[#69849f] text-[#0c2b4b] ">Home</li></a>
        <a href="{{ route("penju") }}"><li class="p-2 my-1 border rounded-md text border-yellow-500 cursor-pointer font-semibold transition-all hover:bg-[#69849f] text-[#0c2b4b] ">Penjamin Mutu</li></a>
        <a href="{{ route("penti") }}"><li class="p-2 my-1 border rounded-md text border-yellow-500 cursor-pointer font-semibold transition-all hover:bg-[#69849f] text-[#0c2b4b] ">Pengurus Inti</li></a>
        <a href="{{ route("departemen") }}"><li class="p-2 my-1 border rounded-md text border-yellow-500 cursor-pointer font-semibold transition-all hover:bg-[#69849f] text-[#0c2b4b] ">Departemen</li></a>
        <a href="{{ route("galeri") }}"><li class="p-2 my-1 border rounded-md text border-yellow-500 cursor-pointer font-semibold transition-all hover:bg-[#69849f] text-[#0c2b4b] ">Galeri</li></a>
        <a href="{{ route("event") }}"><li class="p-2 my-1 border rounded-md text border-yellow-500 cursor-pointer font-semibold transition-all hover:bg-[#69849f] text-[#0c2b4b] ">Event</li></a>
    </ul>

</div>
