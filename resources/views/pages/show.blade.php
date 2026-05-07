@extends('layouts.app')

@section('content')

    {{-- Homepage --}}
    @if ($page->slug === 'home')
        @foreach ($page->sections->where('is_active', true) as $section)
            @switch($section->type)
                @case('hero')
                    @include('sections.hero', [
                        'section' => $section,
                    ])
                @break

                @case('featured_services')
                    @include('sections.featured-services', [
                        'section' => $section,
                    ])
                @break

                @case('story')
                    @include('sections.story', [
                        'section' => $section,
                    ])
                @break
                @case('testimonials')
                    @include('sections.testimonials', [
                        'section' => $section
                    ])
                @break
                @case('locations')
                    @include('sections.locations', [
                        'section' => $section
                    ])
                @break
                @case('value_cta')
                    @include('sections.value-cta', [
                        'section' => $section
                    ])
                @break
            @endswitch
        @endforeach
    @else
        {{-- Normal Pages --}}

        <div class="max-w-7xl mx-auto py-12">

            <h1 class="text-5xl font-bold mb-6">
                {{ $page->title }}
            </h1>

            @if ($page->hero_image)
                <img src="{{ asset('storage/' . $page->hero_image) }}" class="w-full rounded mb-8">
            @endif

            <div class="prose max-w-none">
                {{ $page->content }}
            </div>

        </div>
    @endif

@endsection
