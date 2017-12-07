<header>
    <nav> 
       <ul>
        @foreach ($page->collections as $name => $collection)
            <li>
                <a href="/{{ $name }}">{{ $page->links($name) }}</a>
            </li>
        @endforeach
        </ul>
    </nav>
</header>