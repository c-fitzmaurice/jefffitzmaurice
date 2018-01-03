@extends('_layouts.master')

@section('body')

<div class="flex flex-col sm:flex-row">
    <div class="w-2/3">
        <img class="shadow hover:shadow-lg w-full" src="{{ $page->img }}">
    </div>
    <div class="w-1/3 px-4">
        <h1 class="border-b-2 border-yellow pb-2 mb-4">{{ $page->title }}</h1>

        @yield('content')
    </div>
</div>

@endsection