@php
    $item = $section->items
        ->where('is_active', true)
        ->first();
@endphp

@if($item)

<section class="relative py-28 overflow-hidden bg-[#2f3d24]">

    {{-- Background Image --}}
    @if($item->image)
        <img
            src="{{ asset('storage/' . $item->image) }}"
            alt="{{ $item->title }}"
            loading="lazy"
            width="1920"
            height="600"
            class="absolute inset-0 w-full h-full object-cover object-center"
        >
    @endif

    {{-- Dark Overlay --}}
    <div class="absolute inset-0 bg-black/70"></div>

    {{-- Content --}}
    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center text-white">

        <p class="uppercase tracking-[0.3em] text-sm text-[#d6d2c4] mb-5">
            Why Families Choose Dietz Memorial
        </p>

        <h2 class="text-4xl md:text-6xl font-light leading-tight mb-8">
            {{ $item->title }}
        </h2>

        <div class="w-24 h-[2px] bg-[#d6d2c4] mx-auto mb-8"></div>

        <p class="text-lg md:text-xl leading-relaxed text-gray-200 mb-10 max-w-3xl mx-auto">
            {{ $item->description }}
        </p>

        @if($item->button_text && $item->button_link)

            <a
                href="{{ url($item->button_link) }}"
                class="inline-flex items-center gap-3 bg-white text-black px-8 py-4 font-semibold hover:bg-[#d6d2c4] transition"
            >
                {{ $item->button_text }}

                <span>→</span>

            </a>

        @endif

    </div>

</section>

@endif
