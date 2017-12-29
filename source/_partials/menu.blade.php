<header class="container mx-auto px-4">
    <div class="flex content-around pt-6">
        <div class="w-1/3 font-sans hidden sm:block">
            <a class="no-underline text-black uppercase border-solid border-b-2 border-yellow" href="/about">About</a>
        </div>
        <div class="w-full font-serif text-center">
            <div class="text-4xl md:text-5xl">Fitz<span class="text-yellow">-</span>Maurice</div>
            <div class="text-uppercase tracking-xwide sm:text-md md:text-lg">{{ $page->illus }}</div>
        </div>
        <div class="w-1/3 font-sans hidden sm:block text-right">
            <a class="no-underline text-black uppercase border-solid border-b-2 border-yellow" href="/contact">Contact</a>
        </div>
    </div>

    <navigation inline-template class="mt-8 font-sans border-solid border-b border-t sm:border-none border-black">
        <div>
            <ul class="jeff-nav-u w-full text-center list-reset overflow-hidden" :class="{ 'open': open }">
                <li class="inline-block w-full sm:w-auto text-center border-solid border-b border-black sm:border-none">
                    <a class="sm:mx-4 py-4 no-underline inline-block w-full sm:w-auto sm:hidden" @click="toggle()">Menu</a>
                </li>
                <li class="sm:hidden inline-flex w-full sm:w-auto text-center border-solid border-b border-black sm:border-none">
                    <div class="w-1/2 font-sans text-center border-solid border-r border-black">
                        <a class="sm:mx-4 py-4 no-underline inline-block w-full sm:w-auto" href="/about">About</a>
                    </div>
                    <div class="w-1/2 font-sans text-center">
                        <a class="sm:mx-4 py-4 no-underline inline-block w-full sm:w-auto" href="/contact">Contact</a>
                    </div>
                </li>
                @foreach ($page->collections as $name => $collection)
                <li class="inline-block w-full sm:w-auto text-center border-solid border-b border-black sm:border-none">
                    <a class="sm:mx-4 py-4 no-underline inline-block w-full sm:w-auto" href="/{{ $name }}">{{ $page->links($name) }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </navigation>
</header>