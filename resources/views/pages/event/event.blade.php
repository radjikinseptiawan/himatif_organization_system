<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeri</title>
    @vite("resources/css/app.css","resources/js/app/js")
</head>
<body>
    @include("components.navigation.nonLoginNavigation")

    <div id="overlay" class="fixed inset-0 bg-black/80 z-40 hidden"></div>

     <div id="loader">
        <div class="spinner"></div>
        <p class="text-gray-700">Memuat sumber daya...</p>
    </div>
    <div class="h-screen p-2">
  
     <div class="flex items-center text-center flex-col justify-center">
        <h1 class="text-3xl text-yellow-600 mt-35 font-bold">Galeri</h1>
    <div class=" p-1 flex item-center justify-center rounded-md my-3 bg-yellow-600 w-32"></div>  
    <div class="min-h-screen px-4 py-10 max-w-7xl mx-auto">

    <div class="mt-10 grid gap-6 
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
                    target="blank"
                    class="mt-auto p-2 text-center 
                    bg-[#0c2b4b] text-white font-bold 
                    rounded-md hover:bg-[#163e66] transition">
                    View
                </a>
            </div>
        </div>
        @endforeach

    </div>
</div>

    @include("components.footer")
</body>
</html>