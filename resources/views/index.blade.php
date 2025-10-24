@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center text-center  border-black border-2">
        <p class="text-2xl font-bold mb-4">Publicações</p>
    </div>
    <div class="flex flex-col  border-l-2 border-r-2 border-b-2 border-black p-2">
        <p class="font-semibold"> Titulo do prato 1</p>
        <div class="flex justify-center items-center h-64">
            <img src="public/imagens/publicações/publicacao03.png" alt="foto1" class="w-32 h-32 object-cover">
        </div>
    </div>

@endsection