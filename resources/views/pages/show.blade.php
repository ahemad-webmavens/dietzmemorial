@extends('layouts.app')

@section('content')

    <h1 class="text-3xl font-bold mb-4">
        {{ $page->title }}
    </h1>

    @if($page->hero_image)
    <div class="w-full h-[300px] md:h-[450px] lg:h-[550px] overflow-hidden mb-4">
        <img src="{{ asset('storage/' . $page->hero_image) }}"
             class="w-full h-full object-cover object-center">
    </div>
    @endif

    <div>
        {{ $page->content }}
    </div>

@endsection
