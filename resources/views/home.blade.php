<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>@lang('home.title')</h1>
                    <p>@lang('home.subtitle')</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <p>@lang('home.text')</p>
                </div>
                <div class="col-12 col-md-4">
                    
                </div>
                <div class="col-12 col-md-4">
                    <p>@lang('home.access.title')</p>
                    <p>@lang('home.access.text')</p>
                    <Button label="@lang('home.access.citizen')"></Button>
                    <Button label="@lang('home.access.professional')"
                </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
