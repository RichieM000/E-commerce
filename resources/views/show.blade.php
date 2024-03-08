@extends('layouts.layout')
@section('content')
<div class="mx-4">
    <a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        
        <div
            class="flex flex-col items-center justify-center text-center"
        >
        
            <img
                class="w-48 mr-6 mb-6"
                src="images/acme.png"
                alt=""
            />

            <h3 class="text-2xl mb-2">{{$listitems->name}}</h3>
            <div class="text-xl font-bold mb-4">{{$listitems->category}}</div>

            <x-item-tags :typesCsv="$listitems->type"/>

            <div class="text-lg my-4">
                <i class="fa-solid fa-dollar"></i> {{$listitems->price}}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    Description
                </h3>
                <div class="text-lg space-y-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Eligendi non reprehenderit
                        facilis architecto autem quam
                        necessitatibus, odit quod, repellendus
                        voluptate cum. Necessitatibus a id tenetur.
                        Error numquam at modi quaerat.
                    </p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Quaerat praesentium eos
                        consequuntur ex voluptatum necessitatibus
                        odio quos cupiditate iste similique rem in,
                        voluptates quod maxime animi veritatis illum
                        quo sapiente.
                    </p>

                    <a
                        href="mailto:test@test.com"
                        class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-shopping-cart"></i>
                        Add to Cart</a
                    >

                    <a
                        href="https://test.com"
                        target="_blank"
                        class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-dollar"></i> Buy</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>
@endsection