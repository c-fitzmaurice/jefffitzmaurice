@extends('_layouts.master')

@section('body')

<div class="flex flex-wrap -mx-2">
    @foreach($pieces as $piece)
        <a class="inline-block w-1/2 md:w-1/3 px-2 mt-4" href="{{ $piece->link($piece->img) }}">
            <img class="shadow hover:shadow-lg min-w-full min-h-full" src="{{ $piece->thumb($piece->img) }}" alt="{{ $piece->title }}">
        </a>
    @endforeach
</div>

@endsection
