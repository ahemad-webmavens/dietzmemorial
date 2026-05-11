@extends('layouts.app')

@section('meta_description', $location->name . ' — Dietz Memorial. ' . $location->address . ', ' . $location->city . ', ' . $location->state . '.')

@section('content')

{{-- Force map iframe to be fully responsive --}}
<style>
    .map-embed iframe {
        width: 100% !important;
        height: 400px !important;
        display: block;
    }
</style>

{{-- Hero Banner --}}
<div
    style="background-image: url('{{ asset('storage/pages/locations.webp') }}'); border-top: 3px solid #c8a96e;"
    class="relative text-center bg-cover bg-center bg-no-repeat py-24 px-6 mb-14"
>
    <div class="absolute inset-0" style="background-color: rgba(74, 94, 58, 0.62);"></div>
    <div class="relative z-10">
        <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #c8a96e;">
            Dietz Memorial
        </p>
        <h1 class="text-white font-bold font-serif m-0" style="font-size: clamp(2rem, 5vw, 3rem);">
            {{ $location->name }}
        </h1>
    </div>
</div>

{{-- Breadcrumb --}}
<div class="px-8 py-3" style="background-color: #f9f7f4; border-bottom: 1px solid #e5e0d8;">
    <div class="max-w-7xl mx-auto text-xs" style="color: #888;">
        <a href="/" class="no-underline" style="color: #4a5e3a;">Home</a>
        <span class="mx-2" style="color: #c8a96e;">›</span>
        <a href="/locations" class="no-underline" style="color: #4a5e3a;">Locations</a>
        <span class="mx-2" style="color: #c8a96e;">›</span>
        <span style="color: #555;">{{ $location->name }}</span>
    </div>
</div>

{{-- Main Content --}}
<div class="max-w-7xl mx-auto px-6 py-14 md:px-8">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-12 items-start">

        {{-- Left: Info --}}
        <div>
            {{-- Gold divider --}}
            <div class="flex items-center gap-4 mb-8">
                <div class="h-0.5 w-12 shrink-0" style="background-color: #c8a96e;"></div>
                <span class="text-[0.72rem] font-semibold tracking-widest uppercase whitespace-nowrap" style="color: #c8a96e;">Location Info</span>
                <div class="h-0.5 flex-1" style="background-color: #e5e0d8;"></div>
            </div>

            <div class="flex flex-col gap-6">

                {{-- Address --}}
                <div class="flex gap-4 items-start">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0" style="background-color: #4a5e3a;">
                        <span class="text-base">📍</span>
                    </div>
                    <div>
                        <p class="text-[0.72rem] font-semibold tracking-widest uppercase mb-1" style="color: #888;">Address</p>
                        <p class="text-base leading-relaxed m-0" style="color: #2d2d2d;">
                            {{ $location->address }}<br>
                            {{ $location->city }}, {{ $location->state }} {{ $location->zip }}
                        </p>
                    </div>
                </div>

                {{-- Phone --}}
                @if($location->phone)
                <div class="flex gap-4 items-start">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0" style="background-color: #4a5e3a;">
                        <span class="text-base">📞</span>
                    </div>
                    <div>
                        <p class="text-[0.72rem] font-semibold tracking-widest uppercase mb-1" style="color: #888;">Phone</p>
                        <a href="tel:{{ $location->phone }}" class="text-base font-semibold no-underline" style="color: #4a5e3a;">
                            {{ $location->phone }}
                        </a>
                    </div>
                </div>
                @endif

                {{-- Email --}}
                @if($location->email)
                <div class="flex gap-4 items-start">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0" style="background-color: #4a5e3a;">
                        <span class="text-base">✉️</span>
                    </div>
                    <div>
                        <p class="text-[0.72rem] font-semibold tracking-widest uppercase mb-1" style="color: #888;">Email</p>
                        <a href="mailto:{{ $location->email }}" class="text-base font-semibold no-underline" style="color: #4a5e3a;">
                            {{ $location->email }}
                        </a>
                    </div>
                </div>
                @endif

                {{-- Hours --}}
                @if($location->hours)
                <div class="flex gap-4 items-start">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0" style="background-color: #4a5e3a;">
                        <span class="text-base">🕐</span>
                    </div>
                    <div>
                        <p class="text-[0.72rem] font-semibold tracking-widest uppercase mb-1" style="color: #888;">Hours</p>
                        <p class="text-base leading-relaxed m-0" style="color: #2d2d2d;">{{ $location->hours }}</p>
                    </div>
                </div>
                @endif

            </div>

            {{-- Action Buttons --}}
            <div class="flex flex-wrap gap-3 mt-9">
                @if($location->phone)
                <a href="tel:{{ $location->phone }}"
                   class="inline-block px-6 py-3 rounded-md text-[0.82rem] font-bold tracking-wide uppercase no-underline text-white transition-colors duration-200"
                   style="background-color: #4a5e3a;"
                   onmouseover="this.style.backgroundColor='#c8a96e'; this.style.color='#2d2d2d'"
                   onmouseout="this.style.backgroundColor='#4a5e3a'; this.style.color='#ffffff'">
                    Call Us
                </a>
                @endif
                <a href="/contact"
                   class="inline-block px-6 py-3 rounded-md text-[0.82rem] font-bold tracking-wide uppercase no-underline transition-colors duration-200"
                   style="background-color: transparent; color: #4a5e3a; border: 2px solid #4a5e3a;"
                   onmouseover="this.style.backgroundColor='#4a5e3a'; this.style.color='#ffffff'"
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='#4a5e3a'">
                    Send a Message
                </a>
            </div>
        </div>

        {{-- Right: Map --}}
        @if($location->map_embed)
        <div>
            <div class="flex items-center gap-4 mb-8">
                <div class="h-0.5 w-12 shrink-0" style="background-color: #c8a96e;"></div>
                <span class="text-[0.72rem] font-semibold tracking-widest uppercase whitespace-nowrap" style="color: #c8a96e;">Find Us</span>
                <div class="h-0.5 flex-1" style="background-color: #e5e0d8;"></div>
            </div>
            <div class="map-embed rounded-xl overflow-hidden" style="box-shadow: 0 2px 12px rgba(0,0,0,0.1); border: 3px solid #c8a96e;">
                {!! $location->map_embed !!}
            </div>
        </div>
        @endif

    </div>

</div>

@endsection
