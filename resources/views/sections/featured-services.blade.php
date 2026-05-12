@php
    $items = $section->items->where('is_active', true);
    $content = $section->content ?? [];
    $heading   = $content['heading']    ?? 'Crafting Meaningful Memorials For Texas Families';
@endphp

<section class="py-12 md:py-16 lg:py-20 bg-[#CAD0B6]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
    <div class="text-center mb-8 md:mb-10 lg:mb-10">
            <p class="uppercase tracking-[0.25em] text-sm text-[#4a5e3a] mb-3">
                Our Services
            </p>
            <h2 class="text-2xl md:text-4xl font-light text-[#2f3d24]">
                  {{ $heading }}
            </h2>
        </div>

        {{-- Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($items as $item)

                <a
                    href="{{ url($item->button_link) }}"
                    class="group bg-white rounded-2xl shadow hover:shadow-2xl transition duration-500 overflow-hidden flex flex-col"
                >

                    {{-- Image --}}
                    <div class="overflow-hidden h-72 shrink-0">
                        <img
                            src="{{ asset('storage/' . $item->image) }}"
                            alt="{{ $item->title }}"
                            width="400"
                            height="288"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                        >
                    </div>

                    {{-- Content --}}
                    <div class="p-6 flex flex-col flex-1">

                        <h3 class="text-2xl font-semibold text-[#2f3d24] mb-3">
                            {{ $item->title }}
                        </h3>

                        <p class="text-gray-600 leading-relaxed mb-5 flex-1">
                            {{ $item->description }}
                        </p>

                        <span class="inline-flex items-center gap-2 text-[#4a5e3a] font-semibold mt-auto">
                            Learn More
                            <span>→</span>
                        </span>

                    </div>

                </a>

            @endforeach

        </div>

    </div>
</section>
