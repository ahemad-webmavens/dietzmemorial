@extends('layouts.app')

@section('content')

<div
    x-data="{
        open: false,
        selectedImage: '',
        selectedName: '',
        selectedDescription: ''
    }"
    class="max-w-7xl mx-auto px-6 py-12"
>

    {{-- Header (match gallery theme) --}}
    <div class="text-center mb-12">
        <p class="text-[#c8a96e] text-xs font-semibold tracking-[0.2em] uppercase mb-3">
            Our Materials
        </p>

        <h1 class="text-3xl md:text-5xl font-serif font-bold text-[#2d2d2d] mb-4">
            Granite Colors
        </h1>

        <p class="text-gray-600 max-w-xl mx-auto leading-relaxed">
            Explore our selection of premium granite colors, each chosen for durability,
            beauty, and timeless elegance.
        </p>
    </div>

    {{-- Grid --}}
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @foreach($colors as $color)

            <div
                class="group bg-white rounded-xl overflow-hidden cursor-pointer transition duration-300 shadow-sm hover:shadow-xl hover:-translate-y-1"
                @click="
                    open = true;
                    selectedImage = '{{ asset('storage/' . $color->image) }}';
                    selectedName = '{{ $color->name }}';
                    selectedDescription = '{{ $color->description }}';
                "
            >

                {{-- Image --}}
                <div class="relative overflow-hidden h-48">
                    <img
                        src="{{ asset('storage/' . $color->image) }}"
                        alt="{{ $color->name }}"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105"
                    >

                    {{-- Gold bottom bar --}}
                    <div class="absolute bottom-0 left-0 w-full h-[3px] bg-[#c8a96e]"></div>
                </div>

                {{-- Content --}}
                <div class="p-4 text-center">

                    <h2 class="font-semibold text-md text-[#2d2d2d] font-serif tracking-wide">
                        {{ $color->name }}
                    </h2>

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

            {{-- Close Button --}}
            <button
                @click="open = false"
                class="absolute top-4 right-4 z-20 bg-black/60 hover:bg-black text-white w-10 h-10 rounded-full flex items-center justify-center text-lg transition"
            >
                ✕
            </button>

            {{-- Image --}}
            <img
                :src="selectedImage"
                class="w-full max-h-[80vh] object-contain rounded-lg shadow-2xl"
            >

            {{-- Content --}}
            <div class="mt-6 text-center">

                <h2
                    x-text="selectedName"
                    class="text-2xl md:text-3xl font-serif font-bold text-[#c8a96e] mb-3 tracking-wide"
                ></h2>

                <p
                    x-text="selectedDescription"
                    class="text-gray-300 max-w-xl mx-auto leading-relaxed"
                ></p>

            </div>

        </div>

    </div>

</div>

@endsection
