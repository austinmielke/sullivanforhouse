<div class="w-full bg-white shadow fixed pin-x pin-t z-50">
    <div class="container mx-auto bg-white px-2 py-3">
        <div class="flex flex-col sm:flex-row items-start">
            <ul class="list-reset flex items-center justify-start">
                 <li class="mr-3">
                    <a href="https://secure.actblue.com/donate/sullivanforhouse" target="_blank" class="btn btn-orange">Contribute</a>
                </li> 
                <li class="mr-3">
                    <a href="https://www.facebook.com/sullivanforhouse/" target="_blank" class="text-teal hover:text-teal-light"><i class="fab fa-facebook-square fa-2x"></i></a>
                </li>
                <li class="mr-3">
                    <a href="https://www.instagram.com/sullivanforhouse/" target="_blank" class="text-teal hover:text-teal-light"><i class="fab fa-instagram fa-2x"></i></a>
                </li>
                <li class="mr-3">
                    <a href="https://twitter.com/hashtag605" target="_blank" class="text-teal hover:text-teal-light"><i class="fab fa-twitter-square fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<nav class="w-full bg-white">
    <div class="container mx-auto mt-12 px-2">
        <div class="flex flex-col items-start md:flex-row ">
            <ul class="list-reset flex-col mx-auto sm:mx-0 text-center sm:flex-row flex align-center mb-4">
                <li class="mx-2">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="mx-2">
                    <a href="/about" class="nav-link">About</a>
                </li>
                <li class="mx-2">
                    <a href="/contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <a href="#" class="mx-auto my-6 md:ml-auto md:mr-0 md:my-0 md:text-right">

                @if(Request::is('/'))

                    <img class="h-48 lg:h-64 md:hidden"src="{{ URL::asset('img/brand.svg') }}" alt="Kelly Sullivan for House District 13 2018">

                @else

                    <img class="h-48 lg:h-64"src="{{ URL::asset('img/brand.svg') }}" alt="Kelly Sullivan for House District 13 2018">

                @endif

            </a>
        </div>
    </div>
</nav>