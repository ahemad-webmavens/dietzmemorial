@extends('layouts.app')

@section('content')

{{-- Hero Banner --}}
<div class="relative py-16 overflow-hidden">

    {{-- Background Image --}}
    @if($guide->featured_image)
        <img
            src="{{ asset('storage/' . $guide->featured_image) }}"
            alt="{{ $guide->title }}"
            class="absolute inset-0 w-full h-full object-cover object-center"
        >
    @endif

    {{-- Dark Overlay --}}
    <div class="absolute inset-0 bg-[#2f3d24]/80"></div>

    {{-- Hero Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- Left: Text --}}
            <div>
                <p class="uppercase tracking-[0.25em] text-sm text-[#c8a96e] mb-3">
                    Memorial Design Guide
                </p>
                <h1 class="text-4xl md:text-6xl font-light text-white leading-tight">
                    {{ $guide->title }}
                </h1>
                <div class="w-16 h-[2px] bg-[#c8a96e] mt-6"></div>
            </div>


        </div>
    </div>

</div>
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
                        @foreach($guides as $item)
                                <a
                                href="{{ url('/memorial-design-guide/' . $item->slug) }}"
                                class="flex items-center gap-3 px-6 py-3 text-sm transition-all duration-200 border-l-4
                                {{ $guide->id === $item->id
                                    ? 'border-[#4a5e3a] bg-[#f8f6f1] text-[#4a5e3a] font-semibold'
                                    : 'border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a]'
                                }}"
                            >
                                <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                                {{ $item->title }}
                            </a>
                        @endforeach

                        <div class="mx-6 border-gray-100"></div>

                            <a
                            href="{{ url('/granite-colors') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200"
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
            <div class="lg:col-span-3">

                {{-- Image --}}
                @if($guide->featured_image)
                    <div class="mb-10 overflow-hidden shadow-xl">
                        <img
                            src="{{ asset('storage/' . $guide->featured_image) }}"
                            alt="{{ $guide->title }}"
                            class="w-full h-[420px] object-cover"
                        >
                    </div>
                @endif

                {{-- Content Card --}}
                <div class="bg-white shadow-lg p-10">

                    <div class="w-16 h-[3px] bg-[#c8a96e] mb-8"></div>

                    <div class="prose prose-lg max-w-none
                        prose-headings:text-[#2f3d24]
                        prose-headings:font-light
                        prose-h2:text-3xl
                        prose-h3:text-xl
                        prose-h3:font-semibold
                        prose-a:text-[#4a5e3a]
                        prose-a:no-underline
                        prose-a:font-semibold
                        hover:prose-a:underline
                        prose-strong:text-[#2f3d24]
                        prose-li:text-gray-600
                        prose-p:text-gray-600
                        prose-p:leading-relaxed">
                        {!! $guide->content !!}
                    </div>

                </div>

                {{-- Prev / Next Navigation --}}
                @if($guides->count() > 1)
                <div class="mt-8 grid grid-cols-2 gap-4">

                    @php
                        $guideList = $guides->values();
                        $currentIndex = $guideList->search(fn($g) => $g->id === $guide->id);
                        $prev = $currentIndex > 0 ? $guideList[$currentIndex - 1] : null;
                        $next = $currentIndex < $guideList->count() - 1 ? $guideList[$currentIndex + 1] : null;
                    @endphp

                    <div>
                        @if($prev)
                            <a href="{{ url('/memorial-design-guide/' . $prev->slug) }}"
                               class="flex items-center gap-3 bg-white shadow px-6 py-4 text-sm text-[#4a5e3a] font-semibold hover:bg-[#4a5e3a] hover:text-white transition-all duration-300 group">
                                <span class="text-lg">←</span>
                                <span>{{ $prev->title }}</span>
                            </a>
                        @endif
                    </div>

                    <div class="flex justify-end">
                        @if($next)
                            <a href="{{ url('/memorial-design-guide/' . $next->slug) }}"
                               class="flex items-center gap-3 bg-white shadow px-6 py-4 text-sm text-[#4a5e3a] font-semibold hover:bg-[#4a5e3a] hover:text-white transition-all duration-300 group">
                                <span>{{ $next->title }}</span>
                                <span class="text-lg">→</span>
                            </a>
                        @endif
                    </div>

                </div>
                @endif

            </div>

        </div>
    </div>
</section>

@endsection
