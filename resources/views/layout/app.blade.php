<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>@yield('title', 'Laravel')</title>

    </head>
    <body>
        <div class="container">

            @include('inc.nav')
            @if(\Request::is('/'))
                @include('inc.showcase')
            @endif
            @include('inc.messages')
            <div class="row">
                <div class="col-md-8">
                    @yield('content')
                </div>
                <div class="col-md-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
    </body>
</html>
