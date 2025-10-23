<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
   <body class="font-sans">
        <div class="flex-grow container-none mx-auto px-12 py-8"></div>
            <div class="grid grid-cols-4 w-full gap-10">
                <div>
                    <p>perfil</p>
                </div>
                
                <div class='col-span-2 h-screen'>
                    <main>
                        @yield('content')
                    </main>

                </div>
                <div>
                    <p>entrar</p>
                </div>
            </div>    

        </div>

            <footer class="bg-[#d97014] text-white justify-item-center px-8 py-8">

                <div class="container grid grid-cols-3">

                    <div class="mb-4 text-left">
                        <p class="text-2xl font-bold text-[#ffffff]">Sabor do Brasil</p>
                    </div>

                    <div class="flex justify-center pt-1.5 gap-20">
                        <div>
                            <img src="imagens\icones\Instagram.svg" alt="Instagram" class="h-7 w-7">
                        </div>
                        <div>
                            <img src="imagens\icones\Twitter.svg" alt="Twitter" class="h-7 w-7">
                        </div>
                        <div>
                            <img src="imagens\icones\Whatsapp.svg" alt="Whatsapp" class="h-7 w-7">
                        </div>
                        <div>
                            <img src="imagens\icones\Globe (1).svg" alt="Globe" class="h-7 w-7">
                        </div>
                    </div>

                    <div class="flex justify-end pt-1.5 gap-2">
                        <p class="text-2xl font-bold text-white">Copyright-2024</p>
                    </div>
                </div>
            </footer>

    </body>
</html>