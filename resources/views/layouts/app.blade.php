<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC Comics</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>
        <header>
            <div class="row">
                <div class="col text-center">
                    <h1>HEADER</h1>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
        <footer>
            <div class="row">
                <div class="col text-center">
                    <h1>FOOTER</h1>
                </div>
            </div>
        </footer>
    </body>
</html>
