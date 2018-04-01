@extends('layouts.main')

@section('title', '| About Kelly')

@section('content')

    <section class="py-4 w-full bg-teal text-white">
        <div class="container mx-auto px-2">
            <h2 class="text-center text-4xl mb-4">Get to Know Kelly</h2>
            <div class="md:flex">
                <div class="w-full md:w-1/2 md:mr-2 mb-4">
                    <img class="w-full" src="{{ URL::asset('img/about.jpg') }}" alt="">
                </div>

                <div class="w-full md:w-1/2 md:ml-2 mb-4">
                    <p class="text-lg mb-4 leading-normal">Kelly Sullivan is a 5th generation South Dakotan with a deep love for her city of Sioux Falls, as well as for the state of South Dakota. Kelly began her volunteer work in Sioux Falls over 13 years ago, and has a true passion for serving her community. Her journey began at The Center in 2005, which, at the time, was the only resource for LGBT youth in our city. Kelly attended meetings and helped organize gatherings for youth in need. From there, she joined the Sioux Falls Roller Dollz, a nonprofit sports team empowering women and children. There, Kelly served as board member, and head of officials from 2007-2010. Kelly joined the board of the Sioux Falls AIDS Fund in 2011, a nonprofit group raising awareness in the fight against AIDS/HIV.</p> 

                    <p class="text-xl mb-4 leading-normal">Kelly is currently a member of the Sioux Empire Rock-a-Bettys, a local nonprofit empowering women through an educational scholarship program, as well as volunteering and fundraising. She worked on development for the organization from its inception and was a board member from 2013-2015. Kelly recently joined Dakota Rural Action through Homegrown Sioux Empire, an organization that builds community leadership on a grassroots level, with a focus on conservation and the environment. Additionally, Kelly is a board member with LEAD South Dakota (Leaders Engaged and Determined), a nonprofit organization working to empower women and engage them in the political process.</p>
                    
                    <p class="text-xl leading-normal">Kelly has excelled in the hospitality industry for over 15 years, more specifically in central Sioux Falls. She has been serving people from all backgrounds and is able to connect with people and find common ground with ease. Kelly is currently pursuing her degree in Sociology and Political Science at SDSU. Kelly enjoys cooking at home with her partner, playing softball and sand volleyball, nature and camping, yoga, coffee, and spending quality time with family and friends.</p>
                </div>

            </div>

        </div>
    </section>

@endsection