@extends('layouts.layout')
@section('content')
    
@include('partials._hero')
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


    @unless(count($listitems) == 0)
    @foreach($listitems as $listitem)
        
    
    <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex">
            <img
                class="hidden w-48 mr-6 md:block"
                src="images/acme.png"
                alt=""
            />
            <div>
                <h3 class="text-2xl">
                    <a href="/{{$listitem->id}}">{{$listitem->name}}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{$listitem->category}}</div>

                <x-item-tags :typesCsv="$listitem->type"/>

                <div class="text-lg mt-4">
                    <i class="fa-solid fa-dollar"></i>{{$listitem->price}}
                </div>
            </div>
        </div>
    </div>
    
    @endforeach

    @else
    <p>No Items Found</p>
    @endunless
</div>
<div class="mt-6 p-4">
    {{$listitems->links()}}
</div>
@endsection