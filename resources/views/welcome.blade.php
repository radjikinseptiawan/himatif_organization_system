
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

    @include("components.visimisi")


    @include("components.departemen")



    <div class="px-5 bg-[#0c2b4b] mt-2 w-full bottom-0 justify-between h-72 flex">
        <div class="p-5">
            <h1 class="text-yellow-300 font-bold text-3xl my-4 border-b-2">HIMATIF</h1>
            <div class="flex gap-2 items-center w-72 my-2 text-white">
                <img src="/icon/map-pin.svg" alt="">
                <p>
                Jl. Inspeksi Kalimalang No.9, Cibatu, Cikarang Sel., Kabupaten Bekasi, Jawa Barat 17530
                </p>
            </div>
            <div class="flex gap-2 items-center text-white my-2">
                <img src="/icon/phone.svg" alt="">
                <p>
                    089523807345
                </p>
            </div>
            <div class="flex gap-2 items-center text-white my-2">
                <img src="/icon/mail.svg" alt="">
                <p>
                    himatif@pelitabangsa.ac.id
                </p>
            </div>
        </div>

        <div class="p-5">
            <h1 class="text-yellow-300 font-bold text-3xl my-4 border-b-2">Follow us</h1>

            <div class="flex gap-2">
                <a href="https://www.youtube.com/@himatifupb455" target="blank">
                <div class="bg-white rounded-full">
                <img src="/icon/youtube.png" class="w-10 h-10"  alt="">
                </div>
                </a>

                <a href="https://www.instagram.com/himatif.pb/" target="blank">
                <div class="bg-white rounded-full">
                <img src="/icon/instagram.png" class="w-10 h-10 rounded-full" alt="">
                </div>
                </a>
            </div>
        </div>
    </div>


    <script>
        window.addEventListener("load",()=>{
            document.getElementById("loader").style.display = "none"
             document.getElementById("content").style.display = "block"
        })
    </script>
</body>
</html>