<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite("resources/css/app.css","resources/js/app.js")
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8 text-[#030530]">
        
        <!-- Logo -->
        <div class="flex items-center justify-center gap-4 mb-6">
            <img src="/logohimatif.png" width="60" alt="">
            <img src="/kabinetIntegra.png" width="60" alt="">
        </div>

        <!-- Judul -->
        <h1 class="text-2xl font-bold text-center mb-6">Login</h1>

        <!-- Error message -->
        @if(session('error'))
            <div class="bg-red-500 text-white text-sm p-2 rounded mb-4 text-center">
                {{ session('error') }}
            </div>
        @endif

        <!-- Form -->
        <form action="" method="POST" class="flex flex-col gap-4">
            @csrf

            <div class="flex flex-col gap-1">
                <label for="email" class="text-sm font-semibold">
                    Email*
                </label>
                <input 
                    type="email" 
                    name="email"
                    id="email"
                    class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-[#0c2b4b]"
                    required>
            </div>

            <div class="flex flex-col gap-1">
                <label for="pw" class="text-sm font-semibold">
                    Password*
                </label>
                <input 
                    type="password" 
                    name="password"
                    id="pw"
                    class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-[#0c2b4b]"
                    required>
            </div>

            <button 
                type="submit"
                class="mt-2 bg-[#0c2b4b] text-white font-bold py-2 rounded-md 
                hover:bg-[#163e66] transition-all">
                Masuk
            </button>
        </form>

    </div>

</body>

</html>