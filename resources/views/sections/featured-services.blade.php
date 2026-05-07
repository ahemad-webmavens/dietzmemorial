@php
    $items = $section->items->where('is_active', true);
@endphp

<section class="py-20 bg-[#CAD0B6]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-14">
            <p class="uppercase tracking-[0.25em] text-sm text-[#4a5e3a] mb-3">
                Our Services
            </p>
            <h2 class="text-4xl md:text-5xl font-light text-[#2f3d24]">
                Crafted Memorials With Meaning
            </h2>
        </div>

        {{-- Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($items as $item)

                <a
                    href="{{ url($item->button_link) }}"
                    class="group bg-white shadow hover:shadow-2xl transition duration-500 overflow-hidden flex flex-col"
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
