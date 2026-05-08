@extends('layouts.app')

@section('content')

{{-- Hero Banner --}}
<div class="relative py-16 bg-[#4a5e3a]">
    <div class="absolute inset-0 bg-[#2f3d24]/60"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <p class="uppercase tracking-[0.25em] text-sm text-[#c8a96e] mb-3">
            Memorial Design Guide
        </p>
        <h1 class="text-4xl md:text-6xl font-light text-white leading-tight">
            Granite Colors
        </h1>
        <div class="w-16 h-[2px] bg-[#c8a96e] mt-6"></div>
    </div>
</div>

{{-- Main Section --}}
<section class="bg-[#f8f6f1] py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">

            {{-- Sidebar --}}
            <aside class="lg:col-span-1">
                <div class="bg-white shadow-lg sticky top-24">

                    <div class="bg-[#4a5e3a] px-6 py-5">
                        <h2 class="text-lg font-semibold text-white uppercase tracking-widest">
                            Guide Topics
                        </h2>
                    </div>

                    <nav class="py-4">
                        @foreach($memorialGuideMenu as $item)
                                <a
                                href="{{ url('/memorial-design-guide/' . $item->slug) }}"
                                class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200"
                            >
                                <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                                {{ $item->title }}
                            </a>
                        @endforeach

                        <div class="mx-6 border-gray-100"></div>

                            <a
                            href="{{ url('/granite-colors') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-[#4a5e3a] bg-[#f8f6f1] text-[#4a5e3a] font-semibold transition-all duration-200"
                        >
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Colors
                        </a>

                            <a
                            href="{{ url('/services/bronze-memorials') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200"
                        >
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Bronze Memorials
                        </a>
                    </nav>

                </div>
            </aside>

            {{-- Main Content --}}
            <div
                class="lg:col-span-3"
                x-data="{
                    open: false,
                    selectedImage: '',
                    selectedName: '',
                    selectedDescription: ''
                }"
            >

                {{-- Intro Card --}}
                <div class="bg-white shadow-lg p-10 mb-8">
                    <div class="w-16 h-[3px] bg-[#c8a96e] mb-6"></div>
                    <h2 class="text-2xl font-light text-[#2f3d24] mb-4">
                        Granite Memorial Design — Color
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Granite is found in a variety of colors and patterns. The color is dependant upon which
                        granite quarry the stone is from. Granite quarries exist throughout the world resulting
                        in exotic and classic colors that can be used to create unique memorials. Dietz carries
                        a wide range of colors allowing our customers greater flexibility. The best way to see
                        the true color of granite is to visit one of our locations and look at samples.
                    </p>
                </div>

                {{-- Colors Grid --}}
                <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 gap-5">

                    @foreach($colors as $color)
                        <div
                            class="group bg-white shadow hover:shadow-xl overflow-hidden cursor-pointer transition duration-300 hover:-translate-y-1"
                            @click="
                                open = true;
                                selectedImage = '{{ asset('storage/' . $color->image) }}';
                                selectedName = '{{ $color->name }}';
                                selectedDescription = '{{ $color->description }}';
                            "
                        >
                            {{-- Image --}}
                            <div class="relative overflow-hidden h-40">
                                <img
                                    src="{{ asset('storage/' . $color->image) }}"
                                    alt="{{ $color->name }}"
                                    loading="lazy"
                                    width="300"
                                    height="160"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105"
                                >
                                <div class="absolute bottom-0 left-0 w-full h-[3px] bg-[#c8a96e]"></div>
                            </div>

                            {{-- Name --}}
                            <div class="px-4 py-3 text-center">
                                <h3 class="text-sm font-semibold text-[#2f3d24] uppercase tracking-wide">
                                    {{ $color->name }}
                                </h3>
                            </div>

                        </div>
                    @endforeach

                </div>

                {{-- Modal --}}
                <div
                    x-show="open"
                    x-transition
                    x-cloak
                    class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center z-50 px-4"
                >
                    <div class="relative max-w-3xl w-full">

                        <button
                            @click="open = false"
                            class="absolute top-4 right-4 z-20 bg-black/60 hover:bg-black text-white w-10 h-10 rounded-full flex items-center justify-center text-lg transition"
                        >
                            ✕
                        </button>

                        <img
                            :src="selectedImage"
                            class="w-full max-h-[80vh] object-contain shadow-2xl"
                        >

                        <div class="mt-6 text-center">
                            <h2
                                x-text="selectedName"
                                class="text-2xl md:text-3xl font-light text-[#c8a96e] mb-3 tracking-wide uppercase"
                            ></h2>
                            <p
                                x-text="selectedDescription"
                                class="text-gray-300 max-w-xl mx-auto leading-relaxed"
                            ></p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
