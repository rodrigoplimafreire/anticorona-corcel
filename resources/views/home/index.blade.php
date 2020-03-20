@extends('layouts.tailwind.app')

@section('content')
    <div class="w-full flex flex-col items-center">
        <div class="flex flex-col lg:flex-row items-center lg:items-stretch container">
            <div class="w-full">
                @include('home.nome_logo')
                @include('home.informacoes')
            </div>
            <div class="w-full">
                @include('home.destaque_noticias')
            </div>
        </div>
        <div class="w-full">
            @include('home.duvidas')
        </div>
        <div class="w-full">
            @include('home.base_informacoes_oficiais')
        </div>
    </div>

@endsection
