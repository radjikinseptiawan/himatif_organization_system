<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Galeri</title>
    @vite("resources/css/app.css","resources/js/app.js")
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    
    <!-- Navigation -->
    @include("components.navigation.nonLoginNavigation")

    <!-- Main Layout -->
    <div class="flex flex-1 mt-20">
        
        <!-- Sidebar -->
        @include("components.adminPanel")

        <!-- Content -->
        <main class="flex-1 p-6">
            <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-2xl p-8">
                
                <h1 class="text-2xl font-bold text-gray-800 mb-6">
                    Edit Galeri
                </h1>

                <form enctype="multipart/form-data" action="{{ route("edit.galeri",$data->galeri_id) }}" method="POST" class="space-y-5">
                    @csrf()
                    @method("PUT")
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Cover Link
                        </label>
                        <input 
                            type="file"
                            name="cover"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Judul Album
                        </label>
                        <input 
                            type="text"
                            name="album"
                            value="{{ $data->judul_album }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Google Drive Link
                        </label>
                        <input 
                            type="text"
                            name="gdrive"
                            value="{{ $data->google_link }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                    </div>

                    <div class="flex items-center justify-between pt-4">
                        <div class="space-x-2">
                            <button 
                                type="submit"
                                class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition"
                            >
                                Simpan
                            </button>

                            <a 
                                href="/admin/galeri"
                                class="bg-gray-200 text-gray-700 px-5 py-2 rounded-lg hover:bg-gray-300 transition"
                            >
                                Batalkan
                            </a>
                        </div>
                    </div>
                </form>

                <!-- Delete Form -->
                <form method="POST" action="{{ route('hapus.galeri',$data->galeri_id)}}" class="mt-6">
                    @csrf
                    @method("DELETE")
                    <button 
                        class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition"
                    >
                        Hapus Galeri
                    </button>
                </form>

            </div>
        </main>
    </div>

    @include("components.footer")

</body>
</html>
