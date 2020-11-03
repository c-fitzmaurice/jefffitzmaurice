<header class="container w-full flex-no-grow">
    <div class="flex content-around pt-6">
        <div class="w-1/3 font-sans hidden sm:block">
            <a class="no-underline text-black uppercase border-solid border-b-2 border-yellow" href="/about">About</a>
        </div>
        <a href="/" class="text-black w-full font-serif text-center no-underline jeff-no-hover">
            <div class="text-4xl md:text-5xl">Fitz<span class="text-yellow">-</span>Maurice</div>
            <div class="text-uppercase tracking-wider md:tracking-widest sm:text-md md:text-lg">{{ $page->illus }}</div>
        </a>
        <div class="w-1/3 font-sans hidden sm:block text-right">
            <a class="no-underline text-black uppercase border-solid border-b-2 border-yellow" href="/contact">Contact</a>
        </div>
    </div>

    <div class="mt-8 font-sans border-solid border-grey-light border-b border-t sm:hidden">
        <ul class="jeff-nav w-full text-center list-reset overflow-hidden">
            <li class="inline-flex w-full sm:w-auto text-center">
                <div class="w-1/2 font-sans text-center border-solid border-r border-grey-light">
                    <a class="sm:mx-4 py-4 no-underline inline-block w-full sm:w-auto" href="/about">About</a>
                </div>
                <div class="w-1/2 font-sans text-center">
                    <a class="sm:mx-4 py-4 no-underline inline-block w-full sm:w-auto" href="/contact">Contact</a>
                </div>
            </li>
        </ul>
    </div>
</header>
