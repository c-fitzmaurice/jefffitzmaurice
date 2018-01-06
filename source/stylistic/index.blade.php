@extends('_layouts.master')

@section('body')

    <h1 class="text-center mb-6">Stylistic</h1>

    <div class="flex flex-col md:flex-row justify-center mt-4">

        <div class="flex flex-row md:flex-col flex-wrap items-center justify-between w-full md:w-1/5">
            <a href="#" class="shadow hover:shadow-lg rounded border-4 border-black mb-2 w-1/2 md:w-full pr-1 md:pr-0">
                <img class="w-full rounded" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg rounded border-4 border-black mb-2 w-1/2 md:w-full">
                <img class="w-full rounded" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg rounded border-4 border-black mb-2 w-1/2 md:w-full">
                <img class="w-full rounded" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg rounded border-4 border-black mb-2 w-1/2 md:w-full">
                <img class="w-full rounded" src="/images/acme/acme_thumb.png">
            </a>
        </div>

        <div class="flex-grow min-w-screen px-4">
            <lightbox inline-template image="/images/acme/acme_thumb.png">
                <div>
                    <img class="shadow hover:shadow-lg w-full rounded cursor-pointer" src="/images/acme/acme_thumb.png" @click="index = 0">
                    <gallery :images="images" :index="index" @close="index = null"></gallery>
                </div>
            </lightbox>
        </div>

        <div class="flex flex-row md:flex-col flex-wrap items-center justify-between w-full md:w-1/5">
            <a href="#" class="shadow hover:shadow-lg rounded border-4 border-black mb-2 w-1/2 md:w-full">
                <img class="w-full rounded" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg rounded border-4 border-black mb-2 w-1/2 md:w-full">
                <img class="w-full rounded" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg rounded border-4 border-black mb-2 w-1/2 md:w-full">
                <img class="w-full rounded" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg rounded border-4 border-black mb-2 w-1/2 md:w-full">
                <img class="w-full rounded" src="/images/acme/acme_thumb.png">
            </a>
        </div>
    </div>

@endsection