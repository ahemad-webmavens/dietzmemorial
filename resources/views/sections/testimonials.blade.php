@php
    $items = $section->items->where('is_active', true);
    $content = $section->content ?? [];
    $heading   = $content['heading']    ?? 'Crafting Meaningful Memorials For Texas Families';
@endphp

<section class="pb-12 md:pb-16 lg:pb-20 bg-[#F0F0F0]">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-8 md:mb-10 lg:mb-10">
            <p class="uppercase tracking-[0.25em] text-sm text-[#4a5e3a] mb-3">
                Testimonials
            </p>
            <h2 class="text-2xl md:text-4xl font-light text-[#2f3d24]">
                {{ $heading }}
            </h2>
        </div>

        {{-- Testimonials Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($items as $item)

                <div class="bg-white shadow-xl overflow-hidden group rounded-xl flex flex-col">

                    {{-- Image --}}
                    @if($item->image)
                        <div class="overflow-hidden bg-gray-100 flex-shrink-0" style="height: 256px;">
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
                <div class="p-8 relative flex flex-col h-full">

                    {{-- Quote Icon --}}
                    <div class="text-5xl text-[#d6d2c4] leading-none mb-5">"</div>

                    {{-- Testimonial --}}
                    <p class="text-gray-600 leading-relaxed italic mb-8 flex-1">
                        {{ $item->description }}
                    </p>

                    {{-- Name — always at bottom --}}
                    <h3 class="text-xl font-semibold text-[#2f3d24] mt-auto">
                        {{ $item->title }}
                    </h3>

                </div>

                </div>

            @endforeach

        </div>

    </div>

</section>
