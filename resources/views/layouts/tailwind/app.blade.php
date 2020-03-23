@extends('layouts.tailwind.base')
@section('base-content')
    {{--    @include('layouts.tailwind.acessibility')--}}
    <x-header-layout />
    <div class="w-full h-full flex-1">
        @yield('content')
    </div>

    @include('layouts.tailwind.footer')
@endsection
