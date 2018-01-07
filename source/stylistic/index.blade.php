@extends('_layouts.master')

@section('body')

    <h1 class="text-center mb-6">Stylistic</h1>

    <div class="flex flex-col md:flex-row justify-center mt-4">

        <div class="flex flex-row md:flex-col flex-wrap items-center justify-between w-full md:w-1/5">
            <a href="#" class="shadow hover:shadow-lg border-2 border-black mb-2 w-49 md:w-full mr-1 md:mr-0">
                <img class="w-full" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg border-2 border-black mb-2 w-49 md:w-full">
                <img class="w-full" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg border-2 border-black mb-2 w-49 md:w-full mr-1 md:mr-0">
                <img class="w-full" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg border-2 border-black mb-2 w-49 md:w-full">
                <img class="w-full" src="/images/acme/acme_thumb.png">
            </a>
        </div>

        <div class="flex-grow min-w-screen my-4 md:my-0 md:px-4">
            <lightbox inline-template image="/images/acme/acme_thumb.png">
                <div>
                    <img class="shadow hover:shadow-lg w-full cursor-pointer" src="/images/acme/acme_thumb.png" @click="index = 0">
                    <gallery :images="images" :index="index" @close="index = null"></gallery>
                </div>
            </lightbox>

        </div>

        <div class="flex flex-row md:flex-col flex-wrap items-center justify-between w-full md:w-1/5">
            <a href="#" class="shadow hover:shadow-lg border-2 border-black mb-2 w-49 md:w-full mr-1 md:mr-0">
                <img class="w-full" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg border-2 border-black mb-2 w-49 md:w-full">
                <img class="w-full" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg border-2 border-black mb-2 w-49 md:w-full mr-1 md:mr-0">
                <img class="w-full" src="/images/acme/acme_thumb.png">
            </a>
            <a href="#" class="shadow hover:shadow-lg border-2 border-black mb-2 w-49 md:w-full">
                <img class="w-full" src="/images/acme/acme_thumb.png">
            </a>
        </div>
    </div>

@endsection