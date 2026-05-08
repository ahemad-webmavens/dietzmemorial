{{-- resources/views/pages/templates/memorial_guide.blade.php --}}

{{-- Hero Banner --}}
<div class="relative py-16 overflow-hidden">

    @if ($page->hero_image)
        <img src="{{ asset('storage/' . $page->hero_image) }}"
             alt="{{ $page->title }}"
             class="absolute inset-0 w-full h-full object-cover object-center">
    @endif

    <div class="absolute inset-0 bg-[#2f3d24]/80"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <p class="uppercase tracking-[0.25em] text-sm text-[#c8a96e] mb-3">
            Memorial Design Guide
        </p>
        <h1 class="text-4xl md:text-6xl font-light text-white leading-tight">
            {{ $page->title }}
        </h1>
        <div class="w-16 h-[2px] bg-[#c8a96e] mt-6"></div>
    </div>

</div>

{{-- Content with Sidebar --}}
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
                        <a href="{{ url('/memorial-design-guide/style') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Style
                        </a>
                        <a href="{{ url('/memorial-design-guide/shape') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Shape
                        </a>
                        <a href="{{ url('/memorial-design-guide/design') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Design
                        </a>
                        <a href="{{ url('/memorial-design-guide/personalization') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Personalization
                        </a>

                         <a href="{{ url('/memorial-design-guide/terms-definitions') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Terms & Definitions
                        </a>

                         <a href="{{ url('/memorial-design-guide/cemetery-regulations') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Cemetery Regulations
                        </a>

                         <a href="{{ url('/memorial-design-guide/accessories') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Accessories
                        </a>

                        <div class="mx-6 border-gray-100"></div>

                        <a href="{{ url('/granite-colors') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Colors
                        </a>
                        <a href="{{ url('/services/bronze-memorials') }}"
                            class="flex items-center gap-3 px-6 py-3 text-sm border-l-4 border-transparent text-gray-600 hover:border-[#c8a96e] hover:bg-[#f8f6f1] hover:text-[#4a5e3a] transition-all duration-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-current shrink-0"></span>
                            Bronze Memorials
                        </a>
                    </nav>

                </div>
            </aside>

            {{-- Main Content --}}
            <div class="lg:col-span-3">
                <div class="bg-white shadow-lg p-10">

                    <div class="w-16 h-[3px] bg-[#c8a96e] mb-8"></div>

                    <h2 class="text-3xl font-semibold mb-6">A Memorial Manufacturing Overview</h2>

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
                        {!! $page->content !!}
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
