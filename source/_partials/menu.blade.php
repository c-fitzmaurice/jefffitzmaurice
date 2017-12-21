<header class="container mx-auto px-4">
    <div class="flex content-around pt-6">
        <div class="w-1/3 font-sans">
            <a href="call:Call: 215.493.4755">Call: 215.493.4755</a>
        </div>
        <div class="w-1/3 font-serif text-center">
            <div>{{ $page->name }}</div>
            <div>{{ $page->illus }}</div>
        </div>
        <div class="w-1/3 font-sans text-right">
            <a href="{{ $page->email_comcast }}">email me</a>
        </div>
    </div>

    <nav class="font-sans flex items-center justify-center h-32">
       <ul class="inline-flex list-reset">
        @foreach ($page->collections as $name => $collection)
            <li>
                <a href="/{{ $name }}">{{ $page->links($name) }}</a>
            </li>
        @endforeach
        </ul>
    </nav>
</header>