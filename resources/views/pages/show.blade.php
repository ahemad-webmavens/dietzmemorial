@extends('layouts.app')

@section('content')

    {{-- Homepage --}}
    @if ($page->slug === 'home')
        @foreach ($page->sections->where('is_active', true) as $section)
            @switch($section->type)
                @case('hero')
                    @include('sections.hero', ['section' => $section])
                @break
                @case('featured_services')
                    @include('sections.featured-services', ['section' => $section])
                @break
                @case('story')
                    @include('sections.story', ['section' => $section])
                @break
                @case('testimonials')
                    @include('sections.testimonials', ['section' => $section])
                @break
                @case('locations')
                    @include('sections.locations', ['section' => $section])
                @break
                @case('value_cta')
                    @include('sections.value-cta', ['section' => $section])
                @break
            @endswitch
        @endforeach

    @else
        @include('pages.templates.' . $page->template, ['page' => $page])
    @endif

@endsection
{{-- Nothing goes here --}}
