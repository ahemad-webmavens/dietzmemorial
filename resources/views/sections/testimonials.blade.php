@php
    $items = $section->items->where('is_active', true);
@endphp

<section class="py-24 bg-[#F0F0F0]">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-16">
            <p class="uppercase tracking-[0.25em] text-sm text-[#4a5e3a] mb-3">
                Testimonials
            </p>
            <h2 class="text-4xl md:text-5xl font-light text-[#2f3d24]">
                Trusted By Families Across Texas
            </h2>
        </div>

        {{-- Testimonials Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($items as $item)

                <div class="bg-white shadow-xl overflow-hidden group">

                    {{-- Image --}}
                    @if($item->image)
                        <div class="overflow-hidden h-64 bg-gray-100">
                            <img
                                src="{{ asset('storage/' . $item->image) }}"
                                alt="{{ $item->title }}"
                                loading="lazy"
                                width="400"
                                height="256"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            >
                        </div>
                    @endif

                    {{-- Content --}}
                    <div class="p-8 relative">

                        {{-- Quote Icon --}}
                        <div class="text-5xl text-[#d6d2c4] leading-none mb-5">"</div>

                        {{-- Testimonial --}}
                        <p class="text-gray-600 leading-relaxed italic mb-8">
                            {{ $item->description }}
                        </p>

                        {{-- Name --}}
                        <h3 class="text-xl font-semibold text-[#2f3d24]">
                            {{ $item->title }}
                        </h3>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>
