@extends('layouts.tailwind.base')
@section('base-content')
    {{--    @include('layouts.tailwind.acessibility')--}}

    <div class="w-full h-full flex-1">
        @yield('content')
    </div>

@endsection
