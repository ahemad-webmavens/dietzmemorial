@php
    $item = $section->items
        ->where('is_active', true)
        ->first();
@endphp

@if($item)

<section class="py-24 bg-[#F0F0F0]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Image --}}
            <div class="relative bg-gray-100">
                <img
                    src="{{ asset('storage/' . $item->image) }}"
                    alt="{{ $item->title }}"
                    loading="lazy"
                    width="800"
                    height="600"
                    class="w-full h-[600px] object-cover shadow-2xl rounded-lg"
                >

                {{-- Accent Box --}}
                <div class="absolute -bottom-8 -right-8 bg-[#4a5e3a] text-white p-8 hidden lg:block">

                    <p class="text-sm uppercase tracking-[0.25em] mb-2">
                        Established
                    </p>

                    <h3 class="text-5xl font-light">
                        1903
                    </h3>

                </div>

            </div>

            {{-- Content --}}
            <div>

                <p class="uppercase tracking-[0.25em] text-sm text-[#4a5e3a] mb-4">
                    Our Legacy
                </p>

                <h2 class="text-4xl md:text-6xl font-light text-[#2f3d24] leading-tight mb-8">
                    {{ $item->title }}
                </h2>

                <div class="w-24 h-[2px] bg-[#d6d2c4] mb-8"></div>

                <p class="text-lg leading-relaxed text-gray-600 mb-10">
                    {{ $item->description }}
                </p>

                @if($item->button_text && $item->button_link)

                    <a
                        href="{{ url($item->button_link) }}"
                        class="inline-flex items-center gap-3 bg-[#4a5e3a] text-white px-8 py-4 hover:bg-[#2f3d24] transition"
                    >
                        {{ $item->button_text }}

                        <span>→</span>

                    </a>

                @endif

            </div>

        </div>

    </div>

</section>

@endif
