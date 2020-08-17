@extends('layouts.main')

@section('title', '| Let\'s Talk!')

@section('content')

<div class="w-full m-auto">
    @include('includes.messages')
</div>

    <section class="py-4 w-full bg-teal text-white">
        <div class="container mx-auto px-2">

            <h2 class="text-center text-4xl mb-4">Let's Talk!</h2>
            <p class="md:w-1/2 m-auto text-xl leading-normal">As a citizen-run legislature, I believe South Dakotans should be able to openly speak to the people they elected to represent them. As your District 13 Representative, I'd love to hear from you! Whether you'd like to talk about your concerns, volunteer for the campaign, or host an event, I'm here for you, South Dakota.</p>
            
            <div class="md:w-1/2 m-auto">
                @include('includes.errors')
            </div>
            
            <form class="md:w-1/2 mb-4 m-auto" action="{{ url('contact') }}" method="POST">
                {{ csrf_field() }}

                <div class="my-6">
                    <label for="name" class ="block my-2 font-bold font-xl">Name *</label>
                    <input type="text" name="name" id="name" class="w-full h-10 p-2 rounded-lg" value="{{ old('name') }}">
                </div>

                <div class="my-6">
                    <label for="email" class="block my-2 font-bold font-xl">Email Address *</label>
                    <input type="text" name="email" id="email" class="w-full h-10 p-2 rounded-lg" value="{{ old('email') }}">
                </div>

                <div class="my-6">
                    <label for="subject" class="block my-2 font-bold font-xl">Subject *</label>
                    <input type="text" name="subject" id="subject" class="w-full h-10 p-2 rounded-lg" value="{{ old('subject') }}">
                </div>

                <div class="my-6">
                    <label for="message" class="block my-2 font-bold font-xl">Message *</label>
                    <textarea type="text" name="message" id="message" class="w-full h-48 p-2 rounded-lg">{{ old('message') }}</textarea>
                </div>

                <div class="my-6">
                    <p class="text-italic"><em>* Denotes Required Field</em></p>
                </div>

                <button class="btn btn-orange block m-auto">Submit</button>

            </form>
        </div>
    </section>

@endsection