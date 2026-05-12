{{-- resources/views/sections/hero.blade.php --}}

@php
    $items = $section->items->where('is_active', true)->values();
    $content = $section->content ?? [];

    $sinceYear = $content['since_year'] ?? '1903';
    $heading   = $content['heading']    ?? 'Crafting Meaningful Memorials For Texas Families';
@endphp

{{-- Swiper CSS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

{{-- Top Intro Strip --}}
<div class="bg-[#d6d2c4] border-y border-[#c4bfb1]">
    <div class="max-w-7xl mx-auto px-6 py-5 text-center">
        <p class="text-sm md:text-base uppercase tracking-[0.25em] text-[#4a5e3a] mb-2">
            Since {{ $sinceYear }}
        </p>
        <h2 class="text-2xl md:text-4xl font-light text-[#2f3d24]">
            {{ $heading }}
        </h2>
    </div>
</div>

{{-- Hero Swiper --}}
<div class="bg-[#4a5e3a] p-2">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">

            @foreach ($items as $slide)
                <div class="swiper-slide">
                    <a href="{{ url('/gallery') }}"
                        class="block relative h-72 md:h-[350px] overflow-hidden group shadow-2xl">

                        <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->title }}"
                            class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>

                        @if ($slide->title)
                            <div class="absolute bottom-0 left-0 w-full p-5">
                                <h2 class="text-white text-xl md:text-2xl font-light tracking-wide">
                                    {{ $slide->title }}
                                </h2>
                            </div>
                        @endif

                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>

{{-- Dots --}}
<div class="bg-[#3a4e2a] py-4 flex text-center justify-center">
    <div class="hero-pagination"></div>
</div>

{{-- Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.hero-swiper', {
            slidesPerView: 1,
            spaceBetween: 8,
            loop: true,
            speed: 700,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.hero-pagination',
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 8 },
                768: { slidesPerView: 4, spaceBetween: 8 },
            },
        });
    });
</script>

<style>
    .hero-swiper { width: 100%; }
    .hero-pagination .swiper-pagination-bullet {
        width: 10px; height: 10px;
        background: rgba(255,255,255,0.4);
        opacity: 1; transition: background 0.3s, transform 0.3s;
        margin: 0 6px !important;
    }
    .hero-pagination .swiper-pagination-bullet-active {
        background: #ffffff; transform: scale(1.25);
    }
</style>
