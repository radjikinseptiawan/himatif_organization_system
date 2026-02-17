<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Divisi</title>
    @vite("resources/css/app.css","resources/js/app.js")
</head>
<body>
    @include("components.navigation.nonLoginNavigation")

    <div id="overlay" class="fixed inset-0 bg-black/80 z-40 hidden"></div>

     <div id="loader">
        <div class="spinner"></div>
        <p class="text-gray-700">Memuat sumber daya...</p>
    </div>

    <div class="min-h-screen">

    <div class="flex items-center text-center flex-col justify-center">
        <h1 class="text-3xl text-yellow-600 mt-35 font-bold">{{$data['nama_departemen']}}</h1>
    <div class=" p-1 flex item-center justify-center rounded-md my-3 bg-yellow-600 w-32"></div>

   <div class="w-full mt-2 gap-4 flex items-center justify-center bg-gray-50 p-6">
        <div class="bg-white p-4 rounded-md shadow w-80 text-center cursor-pointer hover:shadow-[#0c2b4b] hover:shadow-xl transition-all">
            <img src="{{ $anggota[0]->foto_anggota }}" alt="">
       <h1 class="font-semibold p-2  text-[#0c2b4b]">
            {{ $anggota[0]->nama_anggota }}
        </h1>
    <div class="w-20 h-1 bg-[#0c2b4b] mx-auto mb-6 rounded-full"></div>
        <p class="text-gray-700 text-center leading-relaxed">
            {{ $anggota[0]->jabatan_anggota }}
        </p>
    </div>



    <div class="bg-white p-4 rounded-md shadow w-80 text-center cursor-pointer hover:shadow-[#0c2b4b] hover:shadow-xl transition-all">
            <img src="{{ $anggota[1]->foto_anggota }}" alt="">
        <h1 class="font-semibold p-2  text-[#0c2b4b]">
            {{ $anggota[1]->nama_anggota }}
        </h1>
    <div class="w-20 h-1 bg-[#0c2b4b] mx-auto mb-6 rounded-full"></div>
            <p class="text-gray-700 text-center leading-relaxed">
            {{ $anggota[1]->jabatan_anggota }}
            </p>
        </div>
    </div>


    <div class="w-full bg-gray-50 py-12 px-4">
    <div class="max-w-6xl mx-auto">

        <h1 class="text-3xl md:text-4xl font-bold text-center text-[#0c2b4b] mb-10">
            Visi & Misi 
            <br>
            {{ $data->nama_departemen }}
        </h1>

        <div class="grid md:grid-cols-2 gap-8">

            <div class="bg-white rounded-2xl shadow-xl p-8 border-t-4 border-yellow-400">
                <h2 class="text-2xl font-bold text-[#0c2b4b] mb-4">
                    Visi
                </h2>
                <p class="text-gray-700 leading-relaxed">
                    {{ 
                    $data["visi_departemen"]
                    }}
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-8 border-t-4 border-[#0c2b4b]">
                <h2 class="text-2xl font-bold text-[#0c2b4b] mb-4">
                    Misi
                </h2>

                <ul class="space-y-3 text-gray-700">
                    @foreach ( $misi as $item )
                    <li class="flex gap-3">
                        <span class="text-yellow-500 font-bold">{{$loop->iteration}}</span>
                        <span>{{$item->misi}}</span>
                    </li>                        
                    @endforeach
                </ul>
            </div>

        </div>
    </div>


    </div>

    @include("components.footer")
</body>
</html>