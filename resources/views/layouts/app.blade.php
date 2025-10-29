<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans ">
    <div class="flex-grow container-none mx-auto px-12 p-1">
        <div class="grid grid-cols-4 w-full gap-10">
            <div class="items-center">
                <div class="flex flex-col items-center h-79">
                    @auth
                    <img src="{{ auth()->user()->foto }}" class="w-24 h-24 rounded-full mb-4 object-cover">
                    <h4 class="font-monaco font-bold text-lg">{{ auth()->user()->name }}</h4>
                    @endauth

                    @guest
                    <img src="imagens/logo/logo_sabor_do_brasil.png" class="w-24 h-24 rounded-full mb-4 object-cover">
                    <h4 class="font-monaco font-bold text-lg">Sabor do Brasil</h4>
                    @endguest
                </div>
                <div class="text-center">
                    <hr class="w-40 border-[1.3px] border-orange-500 mx-auto">
                </div>
                <div class="grid grid-cols-2 mt-6 justify-center w-full">
                    <p class="font-semibold text-md mt-4 text-center">
                        Total de likes: {{ $publicacoes->sum('like_count') }}
                    </p>
                    <p class="font-semibold text-md mt-4 text-center">
                        Total de deslikes: {{ $publicacoes->sum('deslike_count') }}
                    </p>
                </div>
            </div>

            <div class='col-span-2'>
                <main>
                    @yield('content')
                </main>
            </div>
            <!--modal-->
            <div class="items-center">

                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-[#d97014] hover:bg-[#b85d10] text-white font-semibold py-2 px-4 rounded">Sair</button>
                </form>
                @endauth

                @guest
                <button command="show-modal" commandfor="dialog" class="bg-[#d97014] hover:bg-[#b85d10] text-white font-semibold py-2 px-4 rounded">Entrar</button>
                @endguest

                <el-dialog>
                    <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50 transition-opacity"></el-dialog-backdrop>

                        <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                            <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-[#ffffff] text-left shadow-xl outline transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                <div class="bg-[#ffffff] px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="mt-3 w-full text-center">
                                            <h3 id="dialog-title" class="text-base font-semibold text-black mb-2">Login</h3>
                                            <div class="mt-2 w-full">

                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <input type="email" name="email" class="w-full rounded-md border-gray-300 shadow-sm p-2 mb-4" placeholder="Digite seu email" required>
                                                    <input type="password" name="password" class="w-full rounded-md border-gray-300 shadow-sm p-2 mb-4" placeholder="Digite sua senha" required>

                                                    <div class="flex gap-2">
                                                        <button type="button" command="close" commandfor="dialog" class="w-full justify-center rounded-md px-3 py-2 text-sm font-semibold text-black border border-[#d97014]">
                                                            Cancelar
                                                        </button>
                                                        <button type="submit" commandfor="dialog" class="w-full justify-center rounded-md bg-[#d97014] px-3 py-2 text-sm font-semibold text-white">
                                                            Entrar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </el-dialog-panel>
                        </div>
                    </dialog>
                </el-dialog>
            </div>

        </div>

    </div>
    </div>

    <footer class="bg-[#d97014] text-white px-8 py-8 flex items-center">

        <div class="container grid grid-cols-3">

            <div class="mb-4 text-left">
                <p class="text-2xl font-bold text-[#ffffff]">Sabor do Brasil</p>
            </div>

            <div class="flex justify-center pt-1.5 gap-20">
                <div class="flex justify-center pt-1.5 gap-20">
                    <a href="">
                        <img src="imagens\icones\Instagram.svg" alt="Instagram" class="h-7 w-7">
                    </a>
                    <a href="">
                        <img src="imagens\icones\Twitter.svg" alt="Twitter" class="h-7 w-7">
                    </a>
                    <a href="">
                        <img src="imagens\icones\Whatsapp.svg" alt="Whatsapp" class="h-7 w-7">
                    </a>
                    <a href="">
                        <img src="imagens\icones\Globe (1).svg" alt="Globe" class="h-7 w-7">
                    </a>
                </div>
            </div>

            <div class="flex justify-end pt-1.5 gap-2">
                <p class="text-2xl font-bold text-white">Copyright-2024</p>
            </div>
        </div>
    </footer>

</body>

</html>