<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Event</title>
    @vite("resources/css/app.css","resources/js/app.js")
</head>
<body>
    @include("components.navigation.nonLoginNavigation")
    <div id="overlay" class="fixed inset-0 bg-black/80 z-40 hidden"></div>

     <div id="loader">
        <div class="spinner"></div>
        <p class="text-gray-700">Memuat sumber daya...</p>
    </div>
<div class="min-h-screen flex mt-20">

    <!-- Sidebar admin -->
    @include("components.adminPanel")

    <!-- Konten utama -->
    <main class="flex-1 p-6">

        <h1 class="text-2xl font-bold text-[#0c2b4b] mb-6">
            Kelola Event
        </h1>

        <a href="#"
           class="inline-block mb-6 px-4 py-2
           bg-[#0c2b4b] text-white font-semibold
           rounded-md shadow hover:bg-[#163e66]
           transition">
            + Tambah Event        
        </a>
        
        <div class="grid gap-6
            grid-cols-1
            sm:grid-cols-2
            md:grid-cols-3
            lg:grid-cols-4">

            @foreach ($data as $item)
            <div class="bg-white shadow-xl rounded-xl overflow-hidden
                hover:scale-105 transition-all hover:shadow-[#0c2b4b]/50
                flex flex-col">

                <img 
                    src="{{ $item->cover_link }}" 
                    alt="{{ $item->judul_event }}"
                    class="h-44 w-full object-cover">

                <div class="p-4 flex flex-col flex-1">
                    <h1 class="text-lg font-bold text-center">
                        {{ $item->judul_event }}
                    </h1>

                    <a href="{{ $item->google_link }}"
                        target="_blank"
                        class="mt-auto p-2 
                        my-2
                        text-center
                        bg-[#0c2b4b] text-white font-bold
                        rounded-md hover:bg-[#163e66] transition">
                        View
                    </a>
                    @auth
                    <a href="{{ $item->google_link }}"
                        target="_blank"
                        class="mt-auto p-2 text-center
                        my-2
                        bg-[#7b0303] text-white font-bold
                        rounded-md hover:bg-[#ad0707] transition">
                        Hapus
                    </a>     
                    
                    <a href="{{ $item->google_link }}"
                        target="_blank"
                        class="mt-auto p-2 text-center
                        my-2
                        bg-[#dbac00] text-white font-bold
                        rounded-md hover:bg-[#afbc03] transition">
                        Edit
                    </a>

                    @endauth

                </div>
            </div>
            @endforeach

        </div>
    </main>

</div>

    </div>
    @include("components.footer")
</body>
</html>