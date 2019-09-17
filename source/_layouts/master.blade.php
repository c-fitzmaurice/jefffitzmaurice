<!DOCTYPE html>
<html lang="en" class="bg-yellow">
    <head>
        <title>{{ $page->site_name }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100|Playfair+Display">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="bg-white">
        <div id="jeff" class="border-solid border-t-4 border-black flex flex-col min-h-screen">
            <vue-progress-bar></vue-progress-bar>

            @include('_partials.menu')

            <div class="flex-grow container mt-4">
                @yield('body')
            </div>

            @include('_partials.footer')
        </div>
        <script src="/js/main.js"></script>
    </body>
</html>
