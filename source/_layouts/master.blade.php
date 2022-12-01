<!DOCTYPE html>
<html lang="en" class="bg-gold">
    <head>
        <title>{{ $page->site_name }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description }}">
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap|Playfair+Display">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="https://unpkg.com/@alpinejs/focus@3.10.5/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    </head>
    <body class="bg-white">
        <div id="jeff" class="border-solid border-t-4 border-black flex flex-col min-h-screen">
            @include('_partials.menu')

            <div class="flex-grow container mt-4">
                @yield('body')
            </div>

            @include('_partials.footer')
        </div>
        {{-- <script src="{{ mix('js/main.js', 'assets/build') }}"></script> --}}
        @includeWhen($page->production, '_partials.analytics')
    </body>
</html>
