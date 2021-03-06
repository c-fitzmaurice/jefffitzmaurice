@extends('_layouts.master')

@section('body')

<div class="flex flex-col flex-col-reverse md:flex-row">
    <div class="w-full md:w-2/3">
        <lightbox inline-template image="{{ $page->full($page->img) }}">
            <div>
                <img loading="lazy" class="shadow hover:shadow-lg w-full"@click="index = 0" src="{{ $page->full($page->img) }}"  alt="{{ $page->title }}">
                <gallery :images="images" :index="index" @close="index = null"></gallery>
            </div>
        </lightbox>
    </div>
    <div class="w-full md:w-1/3 md:px-4 mt-8 md:mt-0">
        <h1 class="border-b-2 border-gold pb-2 mb-4 font-serif text-4xl">{{ $page->title }}</h1>

        {{-- <div class="copy">
            @yield('content')
        </div> --}}
    </div>
</div>

@endsection
