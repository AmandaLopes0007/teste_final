@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 p-2">
    <div class="flex flex-col items-center text-center  border-[#C2BEBE] border-2">
        <p class="text-2xl font-bold mb-4">Publicações</p>
    </div>
    @foreach($publicacoes as $publicacao)
    <div class="flex flex-col border-l-2 border-r-2 border-b-2 border-[#C2BEBE] p-2">
        <div class="">
            <h3 class="text-2xl font-semibold">{{ $publicacao->titulo }}</h3>
        </div>
        <div class="flex justify-center items-center ">
            <img src="{{ $publicacao->foto }}" alt="Publicação" class="w-full h-auto object-cover">
        </div>
        <div class="grid grid-cols-2">
            <div class="">
                <p class="font-semibold">{{ $publicacao->local }}</p>
            </div>
            <div class="justify-end text-right">
                <p class="font-semibold">{{ $publicacao->cidade }}</p>
            </div>
        </div>

        <div class="flex gap-4 mt-4 items-center">
            <button command="show-modal" commandfor="dialog" type="button">
               @php
             $liked = 
            @endphp 
            <img src=" /imagens/icones/flecha_cima_vazia.svg" alt="Like" class="w-6 h-6">
            </button>

            <button command="show-modal" commandfor="dialog" type="button">
                <img src="/imagens/icones/flecha_baixo_vazia.svg" alt="Dislike" class="w-6 h-6">
            </button>
            
        </div>
    </div>
    @endforeach
</div>

@endsection