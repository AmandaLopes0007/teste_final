@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center text-center  border-[#C2BEBE] border-2">
        <p class="text-2xl font-bold mb-4">Publicações</p>
    </div>
    <div class="flex flex-col  border-l-2 border-r-2 border-b-2 border-[#C2BEBE] p-2">
        <h2 class="text-2xl font-semibold"> Titulo do prato 01</h2>
        <div class="flex justify-center items-center h-64">
            <img src="public/imagens/publicações/publicacao01.png" alt="publicacao1" class="w-32 h-32 object-cover">
        </div>
        <div class="grid grid-cols-2  mt-6 justify-center w-full">
            <h6 class="font-bold">Local 01</h6>
            <h6 class="flex justify-end font-bold">Maceió-Al</h6>
        </div>
    </div>
    <div class="flex flex-col  border-l-2 border-r-2 border-b-2 border-[#C2BEBE] p-2">
        <h2 class="text-2xl font-semibold"> Titulo do prato 02</h2>
        <div class="flex justify-center items-center h-64">
            <img src="public/imagens/publicações/publicacao02.png" alt="publicacao2" class="w-32 h-32 object-cover">
        </div>
        <div class="grid grid-cols-2  mt-6 justify-center w-full">
            <h6 class="font-bold">Local 02</h6>
            <h6 class="flex justify-end font-bold">Maceió-Al</h6>
        </div>
    </div>
    <div class="flex flex-col  border-l-2 border-r-2 border-b-2 border-[#C2BEBE] p-2">
        <h2 class="text-2xl font-semibold"> Titulo do prato 03</h2>
        <div class="flex justify-center items-center h-64">
            <img src="public/imagens/publicações/publicacao01.png" alt="publicacao1" class="w-32 h-32 object-cover">
        </div>
        <div class="grid grid-cols-2  mt-6 justify-center w-full">
            <h6 class="font-bold">Local 03</h6>
            <h6 class="flex justify-end font-bold">Maceió-Al</h6>
        </div>
    </div>

@endsection