@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto" class="background-image">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-lg pb-14">
                    Do you want to go climbing?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read more</a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/04/27/07/26/climbing-2264698_960_720.jpg" width="600" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                    Struggling to find climbing partners?
            </h2>
            <p class="py-8 text-gray-500 text-l">
                You can not climb without a partner to belay you unless you want to risk your life doing free solos. 
                Which is why we decided to offer you this site!
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Our site offers users to register and then post their knowledge, 
                skills and gear for other climbers to see and contact you!
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find Out More</a>
        </div>
    </div>

    

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            For example I can climb...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Grades: 5a-6b
        </span>

        <span class="font-extrabold block text-4xl py-1">
            Style: Sport climbing, bouldering, indoor
        </span>

        <span class="font-extrabold block text-4xl py-1">
            Gear: shoes, belt, rope, 12 quickdraws
        </span>

        <span class="font-extrabold block text-4xl py-1">
            Location: Slovenia
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Rock Climbing divides into three separate disciplines: traditional climbing, sport climbing, and bouldering. Rock climbing can be done both indoors at a climbing gym or outdoors on real rock cliffs. Climbing is done in groups of two or more, using technical climbing equipment like harnesses, rock shoes, carabiners, quickdraws, cams, and a rope.
        </p>
    </div>

    <div>

    </div>

@endsection