@extends('_layouts.master')

@section('body')

<div class="flex flex-col md:flex-row">
    <div class="w-full md:w-2/3">
        <div x-data="{ open: false }" class="flex justify-center">
            {{-- Trigger --}}
            <span x-on:click="open = true">
                <img loading="lazy" class="shadow hover:shadow-lg w-full" src="{{ $page->full($page->img) }}"  alt="{{ $page->title }}">
            </span>

            {{-- Modal --}}
            <div
                x-show="open"
                style="display: none"
                x-on:keydown.escape.prevent.stop="open = false"
                role="dialog"
                aria-modal="true"
                x-id="['modal-title']"
                :aria-labelledby="$id('modal-title')"
                class="fixed inset-0 z-10 overflow-y-auto"
            >
                {{-- Overlay --}}
                <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black/[0.7]"></div>

                {{-- Panel --}}
                <div
                    x-show="open" 
                    x-transition
                    x-on:click="open = false"
                    class="relative flex min-h-screen items-center justify-center"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8 text-gold absolute top-2 right-2 hover:cursor-pointer z-50">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                    <img
                        x-on:click.stop
                        x-trap.noscroll.inert="open" 
                        loading="lazy" 
                        class="shadow-lg w-full max-w-7xl h-auto"
                        src="{{ $page->full($page->img) }}"
                        alt="{{ $page->title }}"
                    >
                </div>
            </div>
        </div>
    </div>
    
    <div class="w-full md:w-1/3 md:px-4 mt-8 md:mt-0">
        <h1 class="border-b-2 border-gold pb-2 mb-4 font-serif text-4xl">{{ $page->title }}</h1>

        {{-- <div class="copy">
            @yield('content')
        </div> --}}
    </div>
</div>

@endsection
