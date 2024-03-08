@props(['typesCsv'])

@php
    $types = explode(',', $typesCsv);
@endphp

<ul class="flex">
    @foreach($types as $type)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/?type={{$type}}">{{$type}}</a>
    </li>
    @endforeach
   
</ul>
