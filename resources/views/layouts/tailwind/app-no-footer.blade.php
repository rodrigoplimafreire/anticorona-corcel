@extends('layouts.tailwind.base')
@section('base-content')
    {{--    @include('layouts.tailwind.acessibility')--}}
    @include('layouts.tailwind.header')

    <div class="w-full h-full flex-1">
        @yield('content')
    </div>

@endsection
