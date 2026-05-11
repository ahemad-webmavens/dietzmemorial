{{-- resources/views/pages/templates/about.blade.php --}}

{{-- Hero Banner --}}
<div class="relative py-28 overflow-hidden">

    @if ($page->hero_image)
        <img src="{{ asset('storage/' . $page->hero_image) }}"
             alt="{{ $page->title }}"
             class="absolute inset-0 w-full h-full object-cover object-center">
    @endif

    <div class="absolute inset-0 bg-[#2f3d24]/80"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <p class="uppercase tracking-[0.25em] text-sm text-[#c8a96e] mb-3">
            {{ $page->extra['eyebrow'] ?? 'Our Story' }}
        </p>
        <h1 class="text-4xl md:text-6xl font-light text-white leading-tight">
            {{ $page->extra['hero_heading'] ?? $page->title }}
        </h1>
        <div class="w-16 h-[2px] bg-[#c8a96e] mt-6"></div>
    </div>

</div>

{{-- Founded Strip --}}
<div class="bg-[#4a5e3a] py-6">
    <div class="max-w-7xl mx-auto px-6 flex flex-wrap items-center justify-center gap-10 text-center">
        @foreach ($page->extra['stats'] ?? [] as $stat)
            <div>
                <p class="text-[#c8a96e] text-xs uppercase tracking-widest mb-1">{{ $stat['label'] }}</p>
                <p class="text-white text-3xl font-light">{{ $stat['value'] }}</p>
            </div>
            {{-- Divider between stats (not after the last one) --}}
            @if (!$loop->last)
                <div class="hidden md:block w-px h-10 bg-white/20"></div>
            @endif
        @endforeach
    </div>
</div>

{{-- Story Section --}}
<section class="py-12 md:py-16 lg:py-20 bg-[#F0F0F0]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Image --}}
            <div class="relative bg-gray-100">
                @if ($page->hero_image)
                    <img src="{{ asset('storage/' . $page->hero_image) }}"
                         alt="{{ $page->extra['story_image_alt'] ?? 'About Us' }}"
                         loading="lazy" width="800" height="600"
                         class="w-full h-[550px] object-cover shadow-2xl">
                @endif

                {{-- Accent Box --}}
                <div class="absolute -bottom-8 -right-8 bg-[#4a5e3a] text-white p-8 hidden lg:block">
                    <p class="text-sm uppercase tracking-[0.25em] mb-2">
                        {{ $page->extra['accent_label'] ?? 'Established' }}
                    </p>
                    <h3 class="text-5xl font-light">
                        {{ $page->extra['accent_year'] ?? '1903' }}
                    </h3>
                </div>
            </div>

            {{-- Content --}}
            <div class="lg:pl-4">

                <p class="uppercase tracking-[0.25em] text-sm text-[#4a5e3a] mb-4">
                    {{ $page->extra['story_eyebrow'] ?? 'Our Legacy' }}
                </p>

                <h2 class="text-4xl md:text-5xl font-light text-[#2f3d24] leading-tight mb-6">
                    {{ $page->extra['story_heading'] ?? $page->title }}
                </h2>

                <div class="w-24 h-[2px] bg-[#d6d2c4] mb-8"></div>

                <div class="space-y-5 text-gray-600 leading-relaxed text-lg prose prose-strong:text-[#2f3d24] max-w-none">
                    {!! $page->content !!}
                </div>

                <div class="mt-10">
                    <a href="{{ url($page->extra['cta_url'] ?? '/contact') }}"
                       class="inline-flex items-center gap-3 bg-[#4a5e3a] text-white px-8 py-4 hover:bg-[#2f3d24] transition">
                        {{ $page->extra['cta_label'] ?? 'Get In Touch' }}
                        <span>→</span>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

{{-- Values Section --}}
@if (!empty($page->extra['values']))
<section class="py-12 md:py-16 lg:py-20 bg-[#f8f6f1]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <p class="uppercase tracking-[0.25em] text-sm text-[#4a5e3a] mb-3">
                {{ $page->extra['values_eyebrow'] ?? 'Why Choose Us' }}
            </p>
            <h2 class="text-4xl font-light text-[#2f3d24]">
                {{ $page->extra['values_heading'] ?? 'Our Commitment To You' }}
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($page->extra['values'] as $value)
                <div class="bg-white shadow-lg p-10 text-center">
                    <div class="w-16 h-[3px] bg-[#c8a96e] mx-auto mb-6"></div>
                    <h3 class="text-xl font-semibold text-[#2f3d24] mb-4">{{ $value['title'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $value['body'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endif

{{-- CTA Banner --}}
<section class="bg-[#4a5e3a] py-12 md:py-16 lg:py-20 text-center">
    <div class="max-w-3xl mx-auto px-6">
        <p class="uppercase tracking-[0.25em] text-sm text-[#c8a96e] mb-4">
            {{ $page->extra['bottom_cta_eyebrow'] ?? 'We Are Here For You' }}
        </p>
        <h2 class="text-3xl md:text-4xl font-light text-white mb-6">
            {{ $page->extra['bottom_cta_heading'] ?? 'Ready To Create A Lasting Memorial?' }}
        </h2>
        <div class="w-16 h-[2px] bg-[#c8a96e] mx-auto mb-8"></div>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ url($page->extra['bottom_cta_primary_url'] ?? '/contact') }}"
               class="inline-flex items-center gap-3 bg-white text-[#2f3d24] px-8 py-4 font-semibold hover:bg-[#d6d2c4] transition">
                {{ $page->extra['bottom_cta_primary_label'] ?? 'Contact Us' }} →
            </a>
            <a href="{{ url($page->extra['bottom_cta_secondary_url'] ?? '/locations') }}"
               class="inline-flex items-center gap-3 border-2 border-white text-white px-8 py-4 font-semibold hover:bg-white/10 transition">
                {{ $page->extra['bottom_cta_secondary_label'] ?? 'Visit A Location' }} →
            </a>
        </div>
    </div>
</section>
