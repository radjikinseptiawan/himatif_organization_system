
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    @vite("resources/css/app.css","resources/js/app.js")
</head>
<body>
    

    @include("components.navigation.nonLoginNavigation")

    <div id="overlay" class="fixed inset-0 bg-black/80 z-40 hidden"></div>

     <div id="loader">
        <div class="spinner"></div>
        <p class="text-gray-700">Memuat sumber daya...</p>
    </div>


    <div class="relative w-full mt-12">
            <div class="inset-0 absolute bg-black/80"></div>
            <img src="/assets/pelantikan.jpg" class="my-4" alt="">        
        <div class="absolute inset-0 flex flex-row gap-2 items-center justify-center">
            <img src="logo/logohimatif.png" class="w-20 md:w-32" alt="">
            <h1 class="text-sm md:text-5xl font-bold text-white text-center">SELAMAT DATANG DI WEBSITE <br> <span class="text-yellow-500">HIMATIF</span></h1>
            <div class="bg-white rounded-full">
                <img src="logo/kabinetIntegra.png" class="w-20 md:w-32" alt="">
            </div>
        </div>
    </div>

    <div>
    @include("components.visimisi")
    </div>


<div class="w-full flex justify-center px-4 py-10 bg-gray-50">
    <div class="w-full max-w-4xl">
        
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="aspect-video">
                <iframe
                    class="w-full h-full"
                    src="https://www.youtube.com/embed/_Oqe7qaoE6Y?si=r7a9vvtI09NAp7Xi"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                </div>
            </div>
        </div>
    </div>


    <div id="departSection">
    @include("components.departemen")
    </div>

@include("components.kotakAspirasi")    
@include("components.footer")

</body>
</html>