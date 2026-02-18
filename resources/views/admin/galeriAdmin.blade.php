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

    @include("components.adminPanel")

    <main class="flex-1 p-6">

        <h1 class="text-2xl font-bold text-[#0c2b4b] mb-6">
            Kelola Galeri
        </h1>

        <button
           id="addAlbumBtn"
           class="inline-block mb-6 px-4 py-2
           bg-[#0c2b4b] text-white font-semibold
           rounded-md shadow hover:bg-[#163e66]
           transition">
            + Tambah Album
        </button>

        <div class="grid gap-6
            grid-cols-1
            sm:grid-cols-2
            md:grid-cols-3
            lg:grid-cols-4">

@foreach ($data as $item)
<div class="bg-white shadow-xl rounded-xl overflow-hidden flex flex-col">
    <img src="{{ asset('storage/' . $item->cover_link) }}" class="object-cover h-54">
    <div class="p-4 flex flex-col flex-1">
        <h1 class="text-lg font-bold text-center">{{ $item->judul_album }}</h1>
        <a href="{{ $item->google_link }}"
            target="_blank"
            class="my-2 mt-auto p-2 text-center
            bg-[#0c2b4b] text-white font-bold
            rounded-md hover:bg-[#163e66] transition">
            View
            </a>
        @auth
        <form method="POST" action="{{ route('hapus.galeri', $item->galeri_id) }}">
            @csrf
            @method("DELETE")
            <button type="submit" class="w-full mt-auto p-2 text-center my-2 bg-[#7b0303] text-white font-bold rounded-md">
                Hapus
            </button> 
        </form>
        
        <form action="{{ route('admin.selectGaleri',$item->galeri_id) }}" method="GET">
        @csrf()
        <button 
        type="submit"
        class="edit-btn-trigger w-full mt-auto p-2 text-center my-2 bg-[#dbac00] text-white font-bold rounded-md">
            Edit
        </button>
        </form>
        @endauth
    </div>
</div>
@endforeach

        </div>
    </main>
</div>
    </div>

<div id="modalAlbum"
     class="fixed inset-0 flex items-center justify-center z-50 hidden">

    <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Tambah Album</h2>
            <button id="closeModal" class="text-red-600 font-bold">X</button>
        </div>

        <form method="POST" action="{{ route('add.galeri') }}" class="flex flex-col gap-3" enctype="multipart/form-data">
            @csrf
            @method("POST")
            <label for="cover">Cover</label>
            <input type="file" name="cover" id="cover" class="border p-2 rounded">

            <label for="album">Nama Album</label>
            <input type="text" name="album" id="album" class="border p-2 rounded">

            <label for="gdrive">Link Google Drive</label>
            <input type="text" id="gdrive" name="gdrive" class="border p-2 rounded">

            <button type="submit"
                class="bg-[#0c2b4b] text-white py-2 rounded hover:bg-[#163e66]">
                Simpan
            </button>
        </form>
    </div>
</div>

    @include("components.footer")
</body>
</html>