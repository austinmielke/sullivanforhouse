@extends('layouts.main')

@section('content')

    <div class="w-full m-auto">
        @include('includes.messages')
    </div>

    <div class="w-full lg:h-three-quarters bg-orange flex flex-col-reverse md:flex-row overflow-hidden">
        <div class="h-half md:h-auto w-full md:w-1/2 overflow-hidden md:overflow-visible">
            <img class="-mb-8" src="{{ URL::asset('img/splash-2.jpg') }}" alt="Kelly Sullivan">
        </div>
        <div class="w-full md:w-1/2 lg:p-8 p-4 flex flex-col justify-center items-center">
            <h4 class="text-center text-white text-xl lg:px-8 pb-4">I am running for re-election for the State House of Representatives because I am committed to continuing to be a strong voice that stands up for <span class="underline">YOU</span>!</h4>
            <h2 class="pt-8 -m-4 uppercase text-center text-white leading-loose md:text-2xl lg:text-3xl xl:text-4xl md:text-3xl text-4xl">Re-Elect</h2>
            <img class="md:h-48 xl:h-80 lg:h-64"src="{{ URL::asset('img/brand.svg') }}" alt="Re-Elect Kelly Sullivan for House District 13 2020">
            <h2 class="pt-4 uppercase text-center text-white leading-loose md:text-2xl lg:text-3xl xl:text-4xl text-3xl">Contribute</h2>
            <ul class="list-reset pt-4 flex flex-wrap justify-around items-center xl:flex-row sm:flex-row flex-col">
                <li class="lg:m-8 md:m-4 m-8">
                    <a href="https://secure.actblue.com/donate/sullivanforhouse?amount=10" target="_blank" class="lg:px-8 md:px-4 px-8 lg:py-4 md:py-2 py-4 font-bold text-white no-underline rounded-lg bg-teal">$10</a>
                </li>
                <li class="lg:m-8 md:m-4 m-8">
                    <a href="https://secure.actblue.com/donate/sullivanforhouse?amount=25" target="_blank" class="lg:px-8 md:px-4 px-8 lg:py-4 md:py-2 py-4 font-bold text-white no-underline rounded-lg bg-teal">$25</a>
                </li>
            </ul>
            <div class="flex-grow lg:m-8 md:m-4 m-8">
                <a href="https://secure.actblue.com/donate/sullivanforhouse" target="_blank" class="lg:px-8 md:px-4 px-8 lg:py-4 md:py-2 py-4 font-bold text-white no-underline rounded-lg bg-teal">Other Amount</a>
            </div>
        </div>
    </div>

    <div class="py-4">
        <h2 class="text-center text-4xl mb-4">My Vision</h2>
        <div class="container mx-auto px-2 md:flex">
            <div class="md:w-1/3">
                <img class="m-auto block h-32 lg:h-48 p-2" src="{{ URL:: asset('img/open-book.svg') }}" alt="an open book">
                <h3 class="text-center text-2xl p-2">Education</h3>
                <p class="text-xl p-2 leading-normal">I believe that investing in education is vital for the future of South Dakota. We must ensure that high-quality education, beginning in pre-kindergarten, is a priority, we must pay teachers competitive wages to attract and retain talent, we must make higher education affordable and accessible to ALL, and we must expand technical education to ensure a skilled and ready workforce.</p>
            </div>
            <div class="md:w-1/3">
                <img class="m-auto block h-32 lg:h-48 p-2" src="{{ URL:: asset('img/piggy-bank.svg') }}" alt="a piggy bank">
                <h3 class="text-center text-2xl p-2">Economic Opportunity</h3>
                <p class="text-xl p-2 leading-normal">As South Dakota continues to grow, we must find ways to allow ALL South Dakotans to thrive. We must shift our government to be open and transparent, ensuring your hard-earned tax-dollars are spent wisely, with all South Dakotans as the number one priority. We must pay a living wage so South Dakotans can support themselves and their families. We must attract innovative companies to South Dakota to ensure stable jobs and continuing economic growth.</p>
            </div>
            <div class="md:w-1/3">
                <img class="m-auto block h-32 lg:h-48 p-2" src="{{ URL:: asset('img/equal.svg') }}" alt="an equal sign">
                <h3 class="text-center text-2xl p-2">Equality</h3>
                <p class="text-xl p-2 leading-normal">All South Dakotans deserve to have equal rights and dignity. I will stand strong and be the voice in Pierre, fighting for LGBTQ equality and I will stand up for immigrants, Muslims, refugees, Native Americans, women, people of color, people with disabilities, our elderly and aging population, and beyond. I believe that South Dakota must be represented equally and be inclusive of those whose voices have been silenced. I will stand up for you, South Dakota.</p>
            </div>
        </div>
    </div>

    <div class="py-4 w-full bg-teal text-white">
        <div class="container mx-auto px-2 md:w-3/4 lg:w-1/2 m-auto">
            <h2 class="text-center text-4xl mb-4">Why I'm Running for Re-Election</h2>
            <p class="text-xl leading-normal mb-4">I am running for re-election for the State House of Representatives, because I am committed to continuing to be a strong voice that stands up for you. We must commit ourselves to be the citizen-run legislature that we are, by increasing transparency and ensuring every South Dakotan is represented. I believe that for South Dakota to move forward, our state government needs honesty, common sense, and accountable leadership. And that is the standard I will hold myself and my colleagues to, when elected. I will focus on education, equality, environment, and economic growth by voting on and introducing policy that protects families and individuals and serves underrepresented communities in our state.</p>

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

@endsection