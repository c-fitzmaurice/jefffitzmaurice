<header class="container mx-auto px-4">
    <div class="flex content-around pt-6">
        <div class="w-1/3 font-sans">
            <a class="no-underline color-black uppercase" href="/about">about</a>
        </div>
        <div class="w-1/3 font-serif text-center">
            <div class="text-5xl">{{ $page->name }}</div>
            <div class="text-lg text-uppercase tracking-xwide">{{ $page->illus }}</div>
        </div>
        <div class="w-1/3 font-sans text-right">
            <a href="/contact">Contact</a>
        </div>
    </div>

    <nav class="font-sans flex items-center justify-center h-32">
       <ul class="inline-flex list-reset">
        @foreach ($page->collections as $name => $collection)
            <li>
                <a class="px-4 no-underline" href="/{{ $name }}">{{ $page->links($name) }}</a>
            </li>
        @endforeach
        </ul>
    </nav>
</header>