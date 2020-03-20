<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta
        http-equiv="Content-Type"
        content="text/html;charset=UTF-8"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <title>Document</title>
    <link
        rel="stylesheet"
        href="{{ mix('css/tailwind.css')}}"
    >
    <link
        rel="stylesheet"
        href="{{ mix('css/app.css')}}"
    >
    <link
        rel="stylesheet"
        href="{{ mix('css/custom.css')}}"
    >
    <link
        rel="stylesheet"
        href="https://cdn.materialdesignicons.com/5.0.45/css/materialdesignicons.min.css"
    >
</head>
<body>
<div
    id="app"
    class="animated fadeIn flex flex-col justify-start align-content-stretch items-center w-full h-full min-h-screen"
>

{{--    @include('layouts.tailwind.acessibility')--}}

    <div class="w-full h-full flex-1">
        @yield('content')
    </div>

</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
