<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite("resources/css/app.css","resources/js/app.js")
</head>
<body class="flex items-center justify-center h-screen">
    

    <div class="flex items-center justify-center gap-4 flex-col text-center rounded-md shadow-xl font-bold text-[#030530]  w-72 md:w-xl bg-white p-2">
        <div class="flex">
            <img src="/logohimatif.png" width="60" alt="">
            <img src="/kabinetIntegra.png" width="60" alt="">
        </div>
        <h1 class="text-xl">Login</h1>
        <form action="" class="flex w-54 md:w-80 flex-col gap-4 my-3" method="POST">
            @csrf
            <div class="border border-gray-400 flex  w-full flex-col rounded-md p-1 font-semibold">
                <label for="nim" class="text-sm text-left">Nomor Induk Mahasiswa*</label>
                <input type="text" name="nim" class="border rounded-md border-gray-400 p-1" id="nim">
            </div>

            <div class="border border-gray-400 flex  w-full flex-col rounded-md p-1 font-semibold">
                <label for="pw" class="text-sm text-left ">Password*</label>
                <input type="password" name="password" class="border rounded-md border-gray-400 p-1" id="pw">
            </div>

            <button class="text-white cursor-pointer transition-all hover:bg-[#0c0476] bg-[#01032e] p-2 rounded-md">Masuk</button>
        </form>

        <div>
        </div>
    </div>

</body>
</html>