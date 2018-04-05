@extends('layouts.main')

@section('content')

    <div class="w-full m-auto">
        @include('includes.messages')
    </div>

    <div class="w-full bg-teal h-half lg:h-three-quarters splash-bg bg-cover relative flex items-center justify-end">
        <img class="md:h-48 xl:h-half lg:h-64 invisible md:visible mr-12 lg:mr-16"src="{{ URL::asset('img/brand.svg') }}" alt="Kelly Sullivan for House District 13 2018">
    </div>

    <div class="py-4">
        <h2 class="text-center text-4xl mb-4">My Vision</h2>
        <div class="container mx-auto px-2 md:flex">
            <div class="md:w-1/3">
                <img class="m-auto block h-32 lg:h-48" src="{{ URL:: asset('img/handshake.svg') }}" alt="handshake">
                <p class="text-xl p-2 leading-normal">South Dakota deserves a state government that is willing to work together and collaborate on policy that represents all South Dakotans, not the personal or professional interests of politicians.</p>
            </div>
            <div class="md:w-1/3">
                <img class="m-auto block h-32 lg:h-48" src="{{ URL:: asset('img/megaphone.svg') }}" alt="megaphone">
                <p class="text-xl p-2 leading-normal">We must elect leaders who stand up for freedom and liberty and allow all South Dakotans to pursue a life of happiness.</p>
            </div>
            <div class="md:w-1/3">
                <img class="m-auto block h-32 lg:h-48" src="{{ URL:: asset('img/people.svg') }}" alt="people">
                <p class="text-xl p-2 leading-normal">We must build a future for our children by enacting social and economic policies that are forward-minded and will not only keep South Dakotans here, but will bring the best and brightest to our great state.</p>
            </div>
        </div>
    </div>

    <div class="py-4 w-full bg-teal text-white">
        <div class="container mx-auto px-2 md:w-3/4 lg:w-1/2 m-auto">
            <h2 class="text-center text-4xl mb-4">Why I'm Running</h2>
            <p class="text-xl leading-normal mb-4">I am running for the South Dakota State Legislature House of Representatives because I believe the people of District 13 need a strong voice that is willing to stand up and engage. Now is the time to re-commit ourselves to be the citizen-run legislature that we are, by increasing transparency and ensuring every South Dakotan is represented. I believe that for South Dakota to move forward, our state government needs honesty, common sense, and accountable leadership. And that is the standard I will hold myself and my colleagues to, when elected. I will focus on education, equality, environment, and economic growth by voting on and introducing policy that protects families and individuals and serves underrepresented communities in our state.</p>

            <p class="text-xl leading-normal mb-4">I believe that we can do what's right for the people of our great state by utilizing collaboration and teamwork within our government. Partisan politics will not propel South Dakota forward. For us to advance, we must spend tax-payer dollars responsibly, without leaving behind struggling South Dakotans. South Dakota leadership must be inclusive of all backgrounds to ensure South Dakota values are reflective of the people. It is the people of our great state that make South Dakota the best place to live. We are all worthy of life, liberty, and the pursuit of happiness.</p>
        </div>
    </div>

     <div class="py-4">
        <div class="container mx-auto px-2 text-center md:w-1/3">
            <h2 class="text-center text-4xl my-2">How to Contribute</h2>
            <p class="my-2 text-xl text-left">Thank you for investing in me! Your contribution is fueling my campaign, leading us toward a bright future. Together, we will affect positive change for South Dakota.</p>
            <a href="https://secure.actblue.com/donate/sullivanforhouse" target="_blank" class="my-2 btn btn-orange inline-block">Contribute</a>
        </div>
    </div> 

    <div class="py-4 w-full bg-teal text-white">
            <div class="container mx-auto px-2">

                <div class="md:w-1/2 m-auto">
                    @include('includes.errors')
                </div>

                <h2 class="text-center text-4xl">Join My Team</h2>

                <form id="form" class="md:w-1/2 mb-4 m-auto" action="{{ url('/') }}" method="POST">
                    {{ csrf_field() }}
    
                    <div class="my-6">
                        <label for="name" class ="block my-2 font-bold text-xl">Name:</label>
                        <input type="text" name="name" id="name" class="w-full h-10 p-2 rounded-lg" value="{{ old('name') }}">
                    </div>
    
                    <div class="my-6">
                        <label for="email" class="block my-2 font-bold text-xl">Email Address:</label>
                        <input type="text" name="email" id="email" class="w-full h-10 p-2 rounded-lg" value="{{ old('email') }}">
                    </div>
    
                    <div class="my-6">
                        <fieldset>
                            <legend class="my-2 font-bold text-xl">Interest(s):</legend>
                            <div class="mb-2">
                                <input type="checkbox" id="donateTime" name="interests[]" value="Donating Their Time">
                                <label class="text-lg" for="donateTime">Donate Your Time</label>
                            </div>

                            <div class="mb-2">
                                <input type="checkbox" id="yardSign" name="interests[]" value="Requesting a Yard Sign">
                                <label class="text-lg" for="yardSign">Request Yard Sign</label>
                            </div>

                            <div class="mb-2">
                                <input type="checkbox" id="houseParty" name="interests[]" value="Hosting a House Party">
                                <label class="text-lg" for="houseParty">Host A House Party</label>
                            </div>

                            <div>
                                <input type="checkbox" id="other" name="interests[]" value="Other">
                                <label class="text-lg" for="other">Other</label>
                            </div>
                        </fieldset>
                    </div>
    
                    <button class="btn btn-orange block m-auto">Submit</button>
    
                </form>
            </div>
        </div>

@endsection