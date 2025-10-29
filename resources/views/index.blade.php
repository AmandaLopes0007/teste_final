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
            <form action="{{ route('publicacao.like', $publicacao) }}" method="post">
                @csrf
                @auth
                <button class="flex items-center gap-1" type="submit">
                    @php
                    $liked = $publicacao->like->where('user_id', auth()->id())->count() > 0;
                    @endphp
                    <img src="{{ asset($liked ? '/imagens/icones/flecha_cima_cheia.svg' : '/imagens/icones/flecha_cima_vazia.svg') }}" alt="Like" class="w-6 h-6">
                    <span class="text-sm">{{ $publicacao->like_count }}</span>
                </button>
                @endauth
                @guest
                <button class="flex items-center gap-1" type="button" command="show-modal" commandfor="dialog">
                    <img src="{{ asset('/imagens/icones/flecha_cima_vazia.svg') }}" alt="Like" class="w-6 h-6">
                    <span class="text-sm">{{ $publicacao->like_count }}</span>
                </button>
                @endguest
            </form>

            <form action="{{ route('publicacao.deslike', $publicacao) }}" method="post">
                @csrf
                @auth
                <button class="flex items-center gap-1" type="submit">
                    @php
                    $desliked = $publicacao->deslike->where('user_id', auth()->id())->count() > 0;
                    @endphp
                    <img src="{{ asset($desliked ? '/imagens/icones/flecha_baixo_cheia.svg' : '/imagens/icones/flecha_baixo_vazia.svg') }}" class="w-6 h-6">
                    <span class="text-sm">{{ $publicacao->deslike_count }}</span>
                </button>
                @endauth
                @guest
                <button class="flex items-center gap-1" type="button" command="show-modal" commandfor="dialog">
                    <img src="{{ asset('/imagens/icones/flecha_baixo_vazia.svg') }}" class="w-6 h-6">
                    <span class="text-sm">{{ $publicacao->deslike_count }}</span>
                </button>
                @endguest
            </form>

        </div>
    </div>
    @endforeach
</div>

@endsection