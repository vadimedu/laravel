<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <header>Здесь HEADER</header>
        <main>
            <div>
                @yield('content')
            </div>
        </main>
        <header>Здесь FOOTER</header>
    </body>
</html>
