@extends('_layouts.master')

@section('body')

<div class="flex flex-wrap -mx-2">
    @foreach($pieces as $piece)
    <a href="{{ $piece->link($piece->img) }}" class="inline-block w-1/2 md:w-1/3 px-2 mt-4">
        <img loading="lazy" class="shadow hover:shadow-lg min-w-full min-h-full" @click="index = 0"
            src="{{ $piece->thumb($piece->img) }}" alt="{{ $piece->title }}">
    </a>
    @endforeach
</div>

@endsection
