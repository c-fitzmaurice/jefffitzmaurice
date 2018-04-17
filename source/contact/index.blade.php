@extends('_layouts.master')

@section('body')

    <div class="text-center">
        <h1 class="uppercase text-md font-sans text-yellow">Contact</h1>

        <contact inline-template>
            <form class="w-full lg:w-2/3 flex flex-col m-auto mt-6">

                <div class="bg-yellow-lightest border-t border-b border-yellow px-4 py-3 mb-4" role="alert" v-if="success">
                    <p class="font-bold">Thank you!</p>
                    <p class="text-sm">I got your email and I will get back to you as soon as I can.</p>
                </div>


                <div class="flex flex-col md:flex-row">
                    <div class="w-full field flex items-center border-b border-b-2 border-grey-light my-4 mr-0 md:mr-6">
                        <input id="name" name="name" v-model="form.name" type="text" class="appearance-none bg-transparent border-none w-full text-grey-darker p-2 focus:bg-grey-lighter" required>
                        <label for="name" class="py-1 px-2 absolute inline-block">Name</label>
                    </div>

                    <div class="w-full field flex items-center border-b border-b-2 border-grey-light my-4">
                        <input id="email" name="email" v-model="form.email" type="email" class="appearance-none bg-transparent border-none w-full text-grey-darker p-2 focus:bg-grey-lighter" required>
                        <label for="email" class="py-1 px-2 absolute inline-block">Email</label>
                    </div>
                </div>

                <div class="field flex items-center border-b border-b-2 border-grey-light my-4">
                    <input id="subject" name="subject" v-model="form.subject" type="text" class="appearance-none bg-transparent border-none w-full text-grey-darker p-2 focus:bg-grey-lighter" required>
                    <label for="subject" class="py-1 px-2 absolute inline-block">Subject</label>
                </div>

                <div class="field flex flex-col border-b border-b-2 border-grey-light my-4">
                    <textarea id="message" name="message" v-model="form.message" rows="9" class="appearance-none bg-transparent border-none w-full text-grey-darker p-2 focus:bg-grey-lighter resize-none" required></textarea>
                    <label for="subject" class="py-1 px-2 absolute inline-block">Message</label>
                </div>

                <button @click.prevent="submit()" class="w-1/2 md:w-24 border border-black py-2 px-4 rounded hover:bg-yellow hover:text-white hover:border-yellow">Submit</button>
            </form>
        </contact>
    </div>

@endsection