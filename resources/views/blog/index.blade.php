@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')

@section('content')

{{-- Top bar --}}
<div class="pt-10 px-6 md:px-8" style="border-top: 3px solid #c8a96e; background-color: #f9f7f4;">
    <div class="max-w-7xl mx-auto">
        <p class="text-[0.72rem] font-semibold tracking-widest uppercase mb-1.5" style="color: #c8a96e;">
            Stories & Insights
        </p>
        <h1 class="font-bold font-serif mb-8" style="color: #2d2d2d; font-size: clamp(2rem, 5vw, 3rem); margin-top: 0;">
            Our Blogs
        </h1>
        <div class="h-px" style="background: linear-gradient(to right, #c8a96e, #e5e0d8);"></div>
    </div>
</div>

<div class="px-6 pb-10 pt-12 md:px-8" style="background-color: #f9f7f4;">
    <div class="max-w-7xl mx-auto">

        {{-- Featured post --}}
        @if($posts->count())
        @php $featured = $posts->first(); @endphp
        <a href="{{ url('/blog/' . $featured->slug) }}" class="no-underline block mb-12">
            <div
                class="bg-white rounded-xl overflow-hidden grid grid-cols-1 md:grid-cols-2 min-h-[320px] md:min-h-[380px] transition-shadow duration-300 hover:shadow-2xl"
                style="box-shadow: 0 4px 20px rgba(0,0,0,0.08);"
            >

                @if($featured->featured_image)
                <div class="overflow-hidden relative" style="min-height: 240px;">
                    <img
                        src="{{ asset('storage/' . $featured->featured_image) }}"
                        alt="{{ $featured->title }}"
                        loading="lazy"
                        class="w-full h-full object-cover block transition-transform duration-500 hover:scale-105"
                        style="min-height: 240px;"
                    >
                    <div class="absolute top-5 left-5 text-[0.7rem] font-bold tracking-widest uppercase px-3 py-1 rounded-full" style="background-color: #c8a96e; color: #2d2d2d;">
                        Featured
                    </div>
                </div>
                @endif

                <div class="p-8 md:p-10 flex flex-col justify-center">
                    <p class="text-[0.72rem] font-semibold tracking-widest uppercase mb-3" style="color: #c8a96e;">
                        {{ optional($featured->published_at)->format('F d, Y') }}
                    </p>
                    <h2 class="font-bold font-serif leading-snug mb-4" style="color: #2d2d2d; font-size: clamp(1.3rem, 3vw, 1.7rem);">
                        {{ $featured->title }}
                    </h2>
                    <div class="w-10 h-0.5 mb-4" style="background-color: #c8a96e;"></div>
                    <p class="text-sm leading-relaxed mb-7" style="color: #6b7280;">
                        {{ Str::limit($featured->excerpt, 180) }}
                    </p>
                    <span class="inline-flex items-center gap-2 text-[0.85rem] font-bold tracking-wide uppercase" style="color: #4a5e3a;">
                        Read Article <span class="text-lg">→</span>
                    </span>
                </div>

            </div>
        </a>
        @endif

        {{-- Remaining posts grid --}}
        @if($posts->count() > 1)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">

            @foreach($posts->skip(1) as $post)
            <a href="{{ url('/blog/' . $post->slug) }}" class="no-underline block h-full">
                <div
                    class="bg-white rounded-xl overflow-hidden flex flex-col h-full transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                    style="box-shadow: 0 2px 12px rgba(0,0,0,0.07);"
                >
                    @if($post->featured_image)
                    <div class="h-48 overflow-hidden relative">
                        <img
                            src="{{ asset('storage/' . $post->featured_image) }}"
                            alt="{{ $post->title }}"
                            loading="lazy"
                            class="w-full h-full object-cover block transition-transform duration-400 hover:scale-105"
                        >
                        <div class="absolute bottom-0 left-0 right-0 h-[3px]" style="background-color: #c8a96e;"></div>
                    </div>
                    @endif

                    <div class="p-6 flex-1 flex flex-col">
                        <p class="text-[0.7rem] font-semibold tracking-widest uppercase mb-2" style="color: #c8a96e;">
                            {{ optional($post->published_at)->format('M d, Y') }}
                        </p>
                        <h2 class="font-bold font-serif leading-snug mb-2.5 flex-1" style="color: #2d2d2d; font-size: 1.15rem;">
                            {{ $post->title }}
                        </h2>
                        <p class="text-sm leading-relaxed mb-4" style="color: #6b7280;">
                            {{ Str::limit($post->excerpt, 110) }}
                        </p>
                        <span class="inline-flex items-center gap-1.5 text-[0.8rem] font-bold tracking-wide uppercase" style="color: #4a5e3a;">
                            Read More <span>→</span>
                        </span>
                    </div>

                </div>
            </a>
            @endforeach

        </div>
        @endif

    </div>
</div>

@endsection
