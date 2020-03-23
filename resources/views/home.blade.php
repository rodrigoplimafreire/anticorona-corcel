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
                    <h1>@lang('profissional_saude.title')</h1>
                    <p>@lang('profissional_saude.subtitle')</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <p>@lang('profissional_saude.text')</p>
                </div>
                <div class="col-12 col-md-4">

                </div>
                <div class="col-12 col-md-4">
                    <p>@lang('profissional_saude.access.title')</p>
                    <p>@lang('profissional_saude.access.text')</p>
                    <Button label="@lang('profissional_saude.access.citizen')"></Button>
                    <Button label="@lang('profissional_saude.access.professional')"
                </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
