<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departemen</title>
    @vite("resources/css/app.css","resources/js/app.js")
</head>
<body>
        @include("components.navigation.nonLoginNavigation")

    <div id="overlay" class="fixed inset-0 bg-black/80 z-40 hidden"></div>

     <div id="loader">
        <div class="spinner"></div>
        <p class="text-gray-700">Memuat sumber daya...</p>
    </div>


    <div class="min-h-screen mt-20">
        @include("components.departemen")
    </div>

    @include("components.footer")
</body>
</html>