@extends('layouts.main')

@section('content')

    <section class="py-4 w-full bg-teal text-white">
        <div class="container mx-auto px-2">
            <h2 class="text-center text-4xl mb-4">About Kelly</h2>
            <div class="md:flex">
                <div class="w-full md:w-1/2 md:mr-2 mb-4">
                    <img class="w-full" src="{{ URL::asset('img/about.jpg') }}" alt="">
                </div>

                <div class="w-full md:w-1/2 md:ml-2 mb-4">
                    <p class="text-lg mb-4 leading-normal">Kelly Sullivan is a 5th generation South Dakotan. She has a deep love for her city of Sioux Falls as well as for the state of South Dakota. Kelly has been volunteering in Sioux Falls for over 13 years and has a true passion for serving her community. Her journey began at the Center in 2005, which was the only resource for LGBT youth in our city. Kelly attended meetings and helped with small gatherings the group hosted for youth in need. From there, she joined the Sioux Falls Roller Dollz, a nonprofit sports team empowering women and children. She volunteered as a skater, board member, and head of non-skating officials from 2007-2010. In 2011, Kelly joined the board for the Sioux Falls AIDS Fund, a nonprofit group raising awareness in the fight against AIDS/HIV.</p> 

                    <p class="text-xl mb-4 leading-normal">Kelly is currently a member of the local nonprofit, the Sioux Empire Rock-a-Bettys who empower women through volunteerism, an educational scholarship program, and fundraising. Kelly assisted on continuing development of the organization as it grew from inception and was a board member from 2013-2015. Kelly recently joined Dakota Rural Action through Homegrown Sioux Falls, an organization who strives to build community leadership on a grassroots level, with a focus on conservation and environment. Lastly, Kelly joined LEAD (Leaders Engaged and Determined) South Dakota when it began in November of 2017 and joined the board within a couple of months. LEAD is a nonprofit organization working on a grassroots level to empower women and engage them in the political process.</p>
                    
                    <p class="text-xl leading-normal">Kelly has excelled in the hospitality industry for over 15 years, more specifically in central Sioux Falls. She has been serving people her entire adult life from all backgrounds and is able to connect with people and find common ground with ease. Kelly is currently pursuing her degree in Sociology and Political Science at SDSU. Kelly enjoys cooking at home with her partner, playing softball and sand volleyball, nature adventures and camping, yoga, drinking coffee, and spending quality time with family and friends.</p>
                </div>

            </div>

        </div>
    </section>

@endsection