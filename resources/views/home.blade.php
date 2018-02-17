<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Kelly Sullivan for House | 2018</title>

    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body class="font-sans bg-white text-black">

        <div class="w-full bg-white shadow fixed pin-x pin-t">
            <div class="container mx-auto bg-white px-2 py-3">
                <div class="flex flex-col sm:flex-row items-start">
                    <ul class="list-reset flex items-center justify-start">
                        <li class="mr-3">
                            <a href="#" class="btn btn-orange">Contribute</a>
                        </li>
                        <li class="mr-3">
                            <a href="#" class="text-teal hover:text-teal-light"><i class="fab fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li class="mr-3">
                            <a href="#" class="text-teal hover:text-teal-light"><i class="fab fa-instagram fa-2x"></i></a>
                        </li>
                        <li class="mr-3">
                            <a href="#" class="text-teal hover:text-teal-light"><i class="fab fa-twitter-square fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <nav class="w-full bg-white">
        <div class="container mx-auto mt-12 px-2">
            <div class="flex flex-col items-start md:flex-row ">
                <ul class="list-reset flex align-center border-b-2 border-gray">
                    <li class="mx-2">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="mx-2">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="mx-2">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
                <a href="#" class="mx-auto my-6 md:ml-auto md:mr-0 md:my-0 md:text-right"><img class="h-48 lg:h-64"src="{{ URL::asset('img/brand2.svg') }}" alt="Kelly Sullivan for House District 13 2018"></a>
            </div>
        </div>
    </nav>

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

    <footer class="bg-teal text-white py-4">
        <div class="container mx-auto px-2 text-center">
            <span class="px-4 py-2 inline-block border-2 border-solid border-white uppercase">Paid for by Kelly Sullivan for House</span>
            <span class="block my-2 italic">1004 S. Dakota Ave., Sioux Falls, SD  57105</span>
            <span class="block my-2">&copy {{ date('Y') }} All rights reserved.</span>
            <span class="block my-2">Site by Austin Mielke.</span>
        </div>
    </footer>
    
</body>

</html>