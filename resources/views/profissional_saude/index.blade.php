@extends('layouts.tailwind.app')

@section('content')
    <div class="w-full flex flex-col items-center">
        <div class="flex flex-col md:flex-row items-center md:items-stretch container">
            <div class="w-full">
                @include('profissional_saude.nome_logo')
                @include('profissional_saude.informacoes')
            </div>
            <div class="w-full">
                @include('profissional_saude.destaque_noticias')
            </div>
        </div>
        <div class="w-full">
            @include('profissional_saude.duvidas')
        </div>
        <div class="">
            @include('profissional_saude.base_informacoes_oficiais')
        </div>
    </div>

@endsection
