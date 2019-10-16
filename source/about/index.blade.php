@extends('_layouts.master')

@section('body')
    <h1 class="uppercase text-center text-md font-sans text-yellow">Jeff Fitz-Maurice</h1>

    <article class="flex flex-col flex-col-reverse md:flex-row mt-8">
        <div class="w-full md:w-1/2 pr-4">
            <p class="mb-4 leading-loose text-lg">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <p class="mb-4 leading-loose text-lg">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis.</p>
        </div>
        <div class="w-full md:w-1/2">
            <img src="https://res.cloudinary.com/fitz/jeff/washington-post-sunday/washington-post-sunday.jpg" alt="Washington Post Sunday Article Piece">
        </div>
    </article>
@endsection
