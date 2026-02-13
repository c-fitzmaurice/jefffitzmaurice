@extends('_layouts.master')

@section('body')

<div class="text-center">
    <h1 class="uppercase text-md font-sans text-gold">Contact</h1>

    <!-- FormSubmit endpoint: https://formsubmit.co/ -->
    <form name="contact" method="POST" action="https://formsubmit.co/{{ $page->email_gmail }}" class="w-full lg:w-2/3 flex flex-col m-auto mt-6">
        <input type="hidden" name="_next" value="{{ $page->url }}success/">
        <input type="hidden" name="_captcha" value="false">

        <div class="bg-yellow-200 border-t border-b border-yellow-500 px-4 py-3 mb-4" role="alert">
            <p class="font-bold">Thank you!</p>
            <p class="text-sm">I got your email and I will get back to you as soon as I can.</p>
        </div>


        <div class="flex flex-col md:flex-row">
            <div class="w-full field flex items-center border-b border-b-2 border-grey-light my-4 mr-0 md:mr-6">
                <input id="name" name="name" type="text"
                    class="appearance-none bg-transparent border-none w-full text-gray-500 p-2 focus:bg-grey-lighter"
                    required>
                <label for="name" class="py-1 px-2 absolute inline-block">Name</label>
            </div>

            <div class="w-full field flex items-center border-b border-b-2 border-grey-light my-4">
                <input id="email" name="email" type="email"
                    class="appearance-none bg-transparent border-none w-full text-gray-500 p-2 focus:bg-grey-lighter"
                    required>
                <label for="email" class="py-1 px-2 absolute inline-block">Email</label>
            </div>
        </div>

        <div class="field flex items-center border-b border-b-2 border-grey-light my-4">
            <input id="subject" name="subject" type="text"
                class="appearance-none bg-transparent border-none w-full text-gray-500 p-2 focus:bg-grey-lighter"
                required>
            <label for="subject" class="py-1 px-2 absolute inline-block">Subject</label>
        </div>

        <div class="field flex flex-col border-b border-b-2 border-grey-light my-4">
            <textarea id="message" name="message" rows="9"
                class="appearance-none bg-transparent border-none w-full text-gray-500 p-2 focus:bg-grey-lighter resize-none"
                required></textarea>
            <label for="subject" class="py-1 px-2 absolute inline-block">Message</label>
        </div>

        <button type="submit"
            class="w-1/2 md:w-24 border border-black py-2 px-4 rounded hover:bg-gold hover:text-white hover:border-gold">Submit</button>
    </form>
</div>

@endsection
