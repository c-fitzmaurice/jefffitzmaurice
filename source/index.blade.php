@extends('_layouts.master')

@section('body')

@foreach ($pieces->chunk(3) as $_pieces)
    <div class="flex flex-col sm:flex-row mb-1">
        @foreach($_pieces as $piece)
            <div class="w-full sm:w-1/3 px-0 sm:pr-4 mt-4">
                <a href="#">
                    <img class="shadow hover:shadow-lg w-full" src="{{ $piece->thumb($piece->img) }}" alt="{{ $piece->title }}">
                </a>
            </div>
        @endforeach
    </div>
@endforeach

@endsection
