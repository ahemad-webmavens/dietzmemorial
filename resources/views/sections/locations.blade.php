@php
    $locations = \App\Models\Location::where('is_active', true)->get();
@endphp

<section class="py-24 bg-[#f8f6f1]">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-16">

            <p class="uppercase tracking-[0.25em] text-sm text-[#4a5e3a] mb-3">
                Our Locations
            </p>

            <h2 class="text-4xl md:text-5xl font-light text-[#2f3d24] mb-6">
                Proudly Serving Families Across Central Texas
            </h2>

            <p class="max-w-3xl mx-auto text-gray-600 leading-relaxed">
                Visit one of our memorial locations to explore custom granite,
                bronze, cremation, and family memorial options with compassionate guidance.
            </p>

        </div>

        {{-- Locations Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            @foreach($locations as $location)

                <div class="bg-white shadow-xl overflow-hidden group">

                    {{-- Image --}}
                    @if($location->image)

                        <div class="overflow-hidden h-80">

                            <img
                                src="{{ asset('storage/' . $location->image) }}"
                                alt="{{ $location->name }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            >

                        </div>

                    @endif

                    {{-- Content --}}
                    <div class="p-8">

                        <h3 class="text-3xl font-light text-[#2f3d24] mb-4">
                            {{ $location->name }}
                        </h3>

                        {{-- Address --}}
                        @if($location->address)
                            <p class="text-gray-600 mb-3">
                                {{ $location->address }}
                            </p>
                        @endif

                        {{-- Phone --}}
                        @if($location->phone)
                            <p class="text-gray-600 mb-6">
                                {{ $location->phone }}
                            </p>
                        @endif

                        {{-- Button --}}
                        <a
                            href="{{ url('/locations/' . $location->slug) }}"
                            class="inline-flex items-center gap-2 text-[#4a5e3a] font-semibold"
                        >
                            View Location

                            <span>→</span>

                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>
