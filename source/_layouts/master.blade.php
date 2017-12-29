<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $page->site_name }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Lato:100|Playfair+Display" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div id="jeff" class="border-solid border-t-4 border-black">
            <vue-progress-bar></vue-progress-bar>

            @include('_partials.menu')

            <div class="container mx-auto px-4 mt-4">
                @yield('body')
            </div>

            @include('_partials.footer')
        </div>

        <script src="/js/manifest.js"></script>
        <script src="/js/vendor.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
