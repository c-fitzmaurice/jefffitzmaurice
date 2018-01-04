@extends('_layouts.master')

@section('body')

<div class="flex flex-col md:flex-row">
    <div class="w-full md:w-2/3">
        <img class="shadow hover:shadow-lg w-full" src="{{ $page->img }}">
    </div>
    <div class="w-full md:w-1/3 md:px-4 mt-4 md:mt-0">
        <h1 class="border-b-2 border-yellow pb-2 mb-4">{{ $page->title }}</h1>

        @yield('content')
    </div>
</div>

@endsection