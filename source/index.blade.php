@extends('_layouts.master')

@section('body')

<div class="flex flex-col sm:flex-row">
    <div class="w-full sm:w-1/2 px-0 sm:pr-4 my-4">
        <a href="">
            <img class="shadow hover:shadow-lg w-full" src="/images/acme/acme_products.png">
        </a>
    </div>
    <div class="w-full sm:w-1/2 px-0 sm:pl-4 my-4">
        <a href="">
            <img class="shadow hover:shadow-lg w-full" src="/images/acme/acme_products.png">
        </a>
    </div>
</div>

<div class="flex flex-col sm:flex-row mb-4">
    <div class="w-full sm:w-1/3 px-0 sm:pr-4 my-4">
        <a href="#">
            <img class="shadow hover:shadow-lg w-full" src="/images/acme/acme_products.png">
        </a>
    </div>
    <div class="w-full sm:w-1/3 px-0 sm:px-2 my-4">
        <a href="#">
            <img class="shadow hover:shadow-lg w-full" src="/images/acme/acme_products.png">
        </a>
    </div>
    <div class="w-full sm:w-1/3 px-0 sm:pl-4 my-4">
        <a href="#">
            <img class="shadow hover:shadow-lg w-full" src="/images/acme/acme_products.png">
        </a>
    </div>
</div>

@endsection
