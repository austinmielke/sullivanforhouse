@extends('layout.main')

@section('content')

    <section class="w-full py-4 bg-teal text-white">
        <div class="container mx-auto px-2">
            <h2 class="text-center text-3xl">Splash</h2>
        </div>
    </section>

    <section class="py-4">
        <h2 class="text-center text-3xl mb-4">Kelly's Vision</h2>
        <div class="container mx-auto px-2 sm:flex">
            <div class="sm:w-1/3">
                <span class="mb-2 block text-center text-orange"><i class="far fa-handshake fa-5x"></i></span>
                <h3 class="text-center text-2xl">Header</h2>
                <p class="text-xl p-2">South Dakota deserves a state government that is willing to work together and collaborate on policy that represents all South Dakotans, not the personal or professional interests of politicians.</p>
            </div>
            <div class="sm:w-1/3">
                <span class="mb-2 block text-center text-orange"><i class="fas fa-arrow-right fa-5x"></i></span>
                <h3 class="text-center text-2xl">Header</h2>
                <p class="text-xl p-2">We must elect leadership who stands up for freedom and liberty and allows all South Dakotans to pursue a life of happiness.</p>
            </div>
            <div class="sm:w-1/3">
                <span class="mb-2 block text-center text-orange"><i class="far fa-lightbulb fa-5x"></i></span>
                <h3 class="text-center text-2xl">Header</h2>
                <p class="text-xl p-2">We must build a future for our children by enacting social and economic policies that are forward-minded and will not only keep South Dakotans here, but will bring the best and brightest to our great state.</p>
            </div>
        </div>
    </section>

    <section class="py-4 w-full bg-teal text-white">
        <div class="container mx-auto px-2">
            <h2 class="text-center text-3xl">Join Kelly's Team</h2>
            <form class="md:w-1/2 mb-4 m-auto" action="{{ url('contact') }}" method="POST">
                {{ csrf_field() }}

                <div class="my-6">
                    <label for="name" class ="block my-2 font-bold font-xl">Name:</label>
                    <input type="text" name="name" id="name" class="w-full h-10 p-2">
                </div>

                <div class="my-6">
                    <label for="email" class="block my-2 font-bold font-xl">Email Address:</label>
                    <input type="text" name="email" id="email" class="w-full h-10 p-2">
                </div>

                <ul>
                    <li>Donate Your Time</li>
                    <li>Request Yard Sign</li>
                    <li>Host a House Party</li>
                    <li>Other</li>
                </ul>

                @if (count($errors))
                    <div class="my-6">
                        <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                        </div>
                    </div>
                @endif

                <button class="btn btn-orange block m-auto">Submit</button>

            </form>
        </div>
    </section>

    <section class="py-4">
        <div class="container mx-auto px-2 text-center md:w-1/3">
            <h2 class="text-center text-3xl my-2">How to Contribute</h2>
            <p class="my-2 text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur natus voluptatem veritatis quisquam, nesciunt esse. </p>
            <a href="#" class="my-2 btn btn-orange inline-block">Contribute</a>
        </div>
    </section>

@endsection