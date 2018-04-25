@extends('_layouts.master')

@section('body')

<div class="flex flex-col sm:flex-row mb-4">
    @foreach($pieces as $piece)
        <div class="w-full sm:w-1/3 px-0 sm:pr-4 my-4">
            <a href="#">
                <img class="shadow hover:shadow-lg w-full" src="{{ $piece->thumb($piece->img) }}" alt="{{ $piece->title }}">
            </a>
        </div>
    @endforeach
</div>

@endsection
