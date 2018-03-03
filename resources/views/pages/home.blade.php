@extends('layouts.main')

@section('content')

    <div class="w-full bg-teal h-half lg:h-three-quarters splash-bg bg-cover relative flex items-center justify-end">
            <img class="h-48 lg:h-64 invisible md:visible mr-12 lg:mr-16"src="{{ URL::asset('img/brand.svg') }}" alt="Kelly Sullivan for House District 13 2018">
    </div>
    

    <div class="py-4">
            <h2 class="text-center text-3xl mb-4">My Vision</h2>
            <div class="container mx-auto px-2 sm:flex">
                <div class="sm:w-1/3">
                    <span class="mb-2 block text-center text-orange"><i class="far fa-handshake fa-5x"></i></span>
                    <p class="text-xl p-2 leading-normal">South Dakota deserves a state government that is willing to work together and collaborate on policy that represents all South Dakotans, not the personal or professional interests of politicians.</p>
                </div>
                <div class="sm:w-1/3">
                    <span class="mb-2 block text-center text-orange"><i class="fas fa-arrow-right fa-5x"></i></span>
                    <p class="text-xl p-2 leading-normal">We must elect leadership who stands up for freedom and liberty and allows all South Dakotans to pursue a life of happiness.</p>
                </div>
                <div class="sm:w-1/3">
                    <span class="mb-2 block text-center text-orange"><i class="far fa-lightbulb fa-5x"></i></span>
                    <p class="text-xl p-2 leading-normal">We must build a future for our children by enacting social and economic policies that are forward-minded and will not only keep South Dakotans here, but will bring the best and brightest to our great state.</p>
                </div>
            </div>
        </div>

    <div class="py-4 w-full bg-teal text-white">
        <div class="container mx-auto px-2 md:w-3/4 lg:w-1/2 m-auto">
            <h2 class="text-center text-3xl mb-4">Why I'm Running</h2>
            <p class="text-xl leading-normal mb-4">I am running for the House of Representatives in our South Dakota State Legislature because I believe the people of District 13 need a strong voice that is willing to stand up and engage. We have a citizen-run legislature in South Dakota, but I think due to the lack of transparency and underrepresentation of constituents, we have deviated from this. I believe that for South Dakota to move forward, our state government needs honesty, common sense, and accountable leadership. And that is the standard I will hold myself and my colleagues to when elected. I will focus on education, equality, and economic growth by voting on and introducing policy that protects families and individuals and serves underrepresented communities in our state.</p>
            <p class="text-xl leading-normal mb-4">I believe that by utilizing collaboration and teamwork within our government, we can do what's right for the people of our great state. Partisan politics will not propel South Dakota forward. For us to advance, we must spend tax-payer dollars responsibly, without leaving behind struggling South Dakotans. South Dakota leadership must be inclusive of all backgrounds and build upon that to ensure South Dakota values are reflective of the people. It is the people of our great state that makes South Dakota the best place to live. We are all worthy of life, liberty, and the pursuit of happiness. 
            </p>
        </div>
    </div>

    <div class="py-4">
        <div class="container mx-auto px-2 text-center md:w-1/3">
            <h2 class="text-center text-3xl my-2">How to Contribute</h2>
            <p class="my-2 text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur natus voluptatem veritatis quisquam, nesciunt esse. </p>
            <a href="#" class="my-2 btn btn-orange inline-block">Contribute</a>
        </div>
    </div>

    <div class="py-4 w-full bg-teal text-white">
            <div class="container mx-auto px-2">
                <h2 class="text-center text-3xl">Join My Team</h2>
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
        </div>

@endsection