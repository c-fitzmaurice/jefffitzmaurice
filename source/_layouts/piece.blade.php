@extends('_layouts.master')

@section('body')

<div class="flex flex-col md:flex-row">
    <div class="w-full md:w-60">
        <lightbox inline-template image="{{ $page->full($page->img) }}">
            <div>
                <img class="shadow hover:shadow-lg w-full"@click="index = 0" src="{{ $page->full($page->img) }}"  alt="{{ $page->title }}">
                <gallery :images="images" :index="index" @close="index = null"></gallery>
            </div>
        </lightbox>
    </div>
    <div class="w-full md:w-40 md:px-4 mt-4 md:mt-0">
        <h1 class="border-b-2 border-yellow pb-2 mb-4 font-serif">{{ $page->title }}</h1>

        {{-- <div class="copy">
            @yield('content')
        </div> --}}
    </div>
</div>

@endsection
