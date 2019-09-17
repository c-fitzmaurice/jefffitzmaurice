@extends('_layouts.master')

@section('body')

<div class="flex flex-col md:flex-row">
    <div class="w-full md:w-2/3">
        <lightbox inline-template image="{{ $page->img }}">
            <div>
                <img class="shadow hover:shadow-lg w-full"@click="index = 0" src="{{ $page->img }}"  alt="{{ $page->title }} >
                <gallery :images="images" :index="index" @close="index = null"></gallery>
            </div>
        </lightbox>
    </div>
    <div class="w-full md:w-1/3 md:px-4 mt-4 md:mt-0">
        <h1 class="border-b-2 border-yellow pb-2 mb-4">{{ $page->title }}</h1>

        @yield('content')
    </div>
</div>

@endsection