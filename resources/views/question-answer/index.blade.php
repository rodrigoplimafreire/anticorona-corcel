@extends('layouts.tailwind.app-no-search-header')

@section('content')
    @php
        // $posts = \Corcel\Model\Post::published()->newest()->taxonomy('category', 'perguntas')->get();
        $posts = [];
    @endphp

    <div class="container px-4">
        <div class="flex flex-col w-full items-center">
            {{--        @include('question-answer.header')--}}
            @include('question-answer.canihelpyou')
            <perguntas-respostas/>
        </div>
    </div>

@endsection
