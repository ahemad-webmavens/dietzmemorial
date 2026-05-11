<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <x-seo-head :title="$seoTitle ?? null" :description="$seoDescription ?? null" :image="$seoImage ?? null" />

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-800 font-sans">

    @php
        $menuItems = \App\Models\MenuItem::where('is_active', true)->orderBy('order')->get();
    @endphp

    <header>
        <div class="bg-[#4a5e3a]">
            <div class="max-w-7xl mx-auto px-4 flex items-stretch justify-between min-h-[80px]">

                <a href="/" class="flex items-center gap-3 py-3 no-underline">
                    <img src="{{ setting('logo') ? asset('storage/' . setting('logo')) : asset('images/logo.png') }}"
                        alt="Dietz Memorial Logo" class="h-14 w-auto object-contain"
                        onerror="this.style.display='none'; document.getElementById('logo-fallback').style.display='flex';">

                    <div id="logo-fallback" class="items-center gap-3" style="display:none;">
                        <div class="border-2 border-[#c8a96e] px-3 py-1">
                            <span class="font-serif text-3xl font-bold text-white leading-none">D</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-serif text-xl font-bold text-white uppercase tracking-wide">Dietz
                                Memorial</span>
                            <span class="text-[#c8a96e] text-xs uppercase tracking-widest">Serving Central Texas Since
                                1903</span>
                        </div>
                    </div>
                </a>

                <nav class="hidden lg:flex items-stretch">
                    @foreach ($menuItems as $item)
                        @if (strtolower($item->label) === 'memorial design guide')
                            {{-- Dropdown --}}
                            <div class="relative group flex items-stretch">

                                <a href="{{ url('/memorial-design-guide') }}"
                                    class="flex items-center gap-2 px-4 text-white text-xs font-semibold uppercase tracking-widest border-b-[3px] border-transparent hover:bg-[#5a7048] hover:border-[#c8a96e] transition-all duration-200">
                                    {{ $item->label }}
                                    <span class="text-[10px]">▼</span>
                                </a>

                                <div
                                    class="absolute left-0 top-full pt-[1px] hidden group-hover:block min-w-[280px] z-50">
                                    <div class="bg-[#4a5e3a] py-2">

                                        @foreach ($memorialGuideMenu as $guide)
                                            <a href="{{ url('/memorial-design-guide/' . $guide->slug) }}"
                                                class="block px-6 py-3 text-white text-xs font-semibold uppercase tracking-widest hover:bg-[#5a7048] hover:text-[#c8a96e] transition-all duration-200">
                                                {{ $guide->title }}
                                            </a>
                                        @endforeach

                                        <a href="{{ url('/granite-colors') }}"
                                            class="block px-6 py-3 text-white text-xs font-semibold uppercase tracking-widest hover:bg-[#5a7048] hover:text-[#c8a96e] transition-all duration-200">
                                            Colors
                                        </a>

                                        <a href="{{ url('/services/bronze-memorials') }}"
                                            class="block px-6 py-3 text-white text-xs font-semibold uppercase tracking-widest hover:bg-[#5a7048] hover:text-[#c8a96e] transition-all duration-200">
                                            Bronze Memorials
                                        </a>

                                    </div>
                                </div>

                            </div>
                        @else
                            <a href="{{ url($item->url) }}"
                                class="flex items-center px-4 text-white text-xs font-semibold uppercase tracking-widest border-b-[3px] border-transparent hover:bg-[#5a7048] hover:border-[#c8a96e] transition-all duration-200
               {{ $item->url === '/'
                   ? (request()->is('/')
                       ? 'bg-[#5a7048] border-[#c8a96e]'
                       : '')
                   : (request()->is(ltrim($item->url, '/') . '*')
                       ? 'bg-[#5a7048] border-[#c8a96e]'
                       : '') }}">
                                {{ $item->label }}
                            </a>
                        @endif
                    @endforeach

                    <a href="tel:{{ setting('phone') }}"
                        class="flex items-center px-6 bg-[#3d5030] border-l border-white/20 text-[#c8a96e] font-bold text-base tracking-normal hover:bg-[#5a7048] transition-all duration-200">
                        {{ setting('phone') }}
                    </a>
                </nav>

                <button id="hamburger"
                    class="lg:hidden flex flex-col justify-center gap-[5px] p-3 bg-transparent border-none cursor-pointer"
                    aria-label="Toggle menu">
                    <span class="block w-6 h-[2px] bg-white transition-all duration-300"></span>
                    <span class="block w-6 h-[2px] bg-white transition-all duration-300"></span>
                    <span class="block w-6 h-[2px] bg-white transition-all duration-300"></span>
                </button>

            </div>
        </div>

        <div id="mobile-menu" class="hidden bg-[#4a5e3a] border-t border-white/10 lg:hidden">
            @foreach ($menuItems as $item)
                @if (strtolower($item->label) === 'memorial design guide')
                    {{-- Mobile Accordion --}}
                    <div x-data="{ open: false }">

                        <button type="button" @click="open = !open"
                            class="w-full flex items-center justify-between px-6 py-3 text-white text-sm font-semibold uppercase tracking-wider border-b border-white/10 hover:bg-[#5a7048] hover:text-[#c8a96e] transition-colors">
                            {{ $item->label }}
                            <span x-text="open ? '▲' : '▼'" class="text-[10px]"></span>
                        </button>

                        <div x-show="open" class="bg-[#3d5030]">

                            @foreach ($memorialGuideMenu as $guide)
                                <a href="{{ url('/memorial-design-guide/' . $guide->slug) }}"
                                    class="block font-semibold uppercase px-8 py-3 text-white/80 text-sm hover:text-[#c8a96e] border-b border-white/5 transition-colors">
                                    {{ $guide->title }}
                                </a>
                            @endforeach

                            <a href="{{ url('/granite-colors') }}"
                                class="block font-semibold uppercase px-8 py-3 text-white/80 text-sm hover:text-[#c8a96e] border-b border-white/5 transition-colors">
                                Colors
                            </a>

                            <a href="{{ url('/services/bronze-memorials') }}"
                                class="block font-semibold uppercase px-8 py-3 text-white/80 text-sm hover:text-[#c8a96e] border-b border-white/5 transition-colors">
                                Bronze Memorials
                            </a>

                        </div>

                    </div>
                @else
                    <a href="{{ url($item->url) }}"
                        class="block px-6 py-3 text-white text-sm font-semibold uppercase tracking-wider border-b border-white/10 hover:bg-[#5a7048] hover:text-[#c8a96e] transition-colors">
                        {{ $item->label }}
                    </a>
                @endif
            @endforeach

            <a href="tel:{{ setting('phone') }}"
                class="block px-6 py-4 text-[#c8a96e] text-base font-bold tracking-wide hover:bg-[#5a7048] transition-colors">
                &#128222; {{ setting('phone') }}
            </a>
        </div>

    </header>

    <main class="min-h-[60vh]">
        @yield('content')
    </main>

    <footer class="bg-[#3d5030] text-white/85 pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">

                {{-- Brand --}}
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <img src="{{ setting('logo') ? asset('storage/' . setting('logo')) : asset('images/logo.png') }}"
                            alt="Dietz Memorial" class="h-12 w-auto object-contain"
                            onerror="this.style.display='none';">
                    </div>
                    <p class="text-white/70 text-sm leading-relaxed">
                        Family-owned and operated for over 120 years. Serving Waco, New Braunfels,
                        and all of Central Texas with quality granite and bronze memorials crafted
                        with care and compassion.
                    </p>
                </div>

                {{-- Services --}}
                <div>
                    <h4 class="text-[#c8a96e] text-xs font-semibold uppercase tracking-widest mb-3">Services</h4>
                    <a href="/services/granite-memorials"
                        class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Granite
                        Memorials</a>
                    <a href="/services/bronze-memorials"
                        class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Bronze
                        Memorials</a>
                    <a href="/services/mausoleums-columbaria"
                        class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Mausoleums
                        & Columbaria</a>
                    <a href="/services/pet-memorials"
                        class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Pet
                        Memorials</a>
                    <a href="/services/cremation-memorials"
                        class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Cremation
                        Memorials</a>
                </div>

                <div>
                    <h4 class="text-[#c8a96e] text-xs font-semibold uppercase tracking-widest mb-3">Waco — HQ</h4>
                    <p class="text-white/70 text-sm leading-relaxed">500 LaSalle Ave<br>Waco, TX 76706</p>
                    <a href="tel:{{ setting('waco_phone') }}"
                        class="block text-white/75 text-sm mt-1 hover:text-white transition-colors">{{ setting('waco_phone') }}</a>
                    <a href="mailto:{{ setting('email', 'sales@dietzmemorial.com') }}"
                        class="block text-white/75 text-sm hover:text-white transition-colors">{{ setting('email', 'sales@dietzmemorial.com') }}</a>
                    <p class="text-white/60 text-xs mt-1">Mon–Fri: 9:00 AM – 5:00 PM</p>

                    <h4 class="text-[#c8a96e] text-xs font-semibold uppercase tracking-widest mt-6 mb-3">New Braunfels
                    </h4>
                    <p class="text-white/70 text-sm leading-relaxed">628 S. Business IH 35<br>New Braunfels, TX 78130
                    </p>
                    <a href="tel:{{ setting('nb_phone') }}"
                        class="block text-white/75 text-sm mt-1 hover:text-white transition-colors">{{ setting('nb_phone') }}</a>
                </div>

                <div>
                    <h4 class="text-[#c8a96e] text-xs font-semibold uppercase tracking-widest mb-3">Quick Links</h4>
                    @foreach ($menuItems as $item)
                        <a href="{{ url($item->url) }}"
                            class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">{{ $item->label }}</a>
                    @endforeach
                    <a href="/privacy-policy"
                        class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Privacy
                        Policy</a>
                </div>

            </div>

            <div class="border-t border-white/10 pt-5 flex flex-col sm:flex-row justify-between items-center gap-2">
                <p class="text-white/50 text-xs">&copy; {{ date('Y') }} Dietz Memorial. All rights reserved.</p>
                <p class="text-white/50 text-xs">Proudly serving Central Texas since 1903.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('hamburger').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        const header = document.querySelector('header');
        let lastScrollY = window.scrollY;
        let ticking = false;

        header.style.position = 'sticky';
        header.style.top = '0';
        header.style.zIndex = '50';
        header.style.transition = 'transform 0.3s ease';

        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const currentScrollY = window.scrollY;

                    if (currentScrollY < lastScrollY) {
                        header.style.transform = 'translateY(0)';
                    } else if (currentScrollY > 80) {
                        header.style.transform = 'translateY(-100%)';
                    }

                    lastScrollY = currentScrollY;
                    ticking = false;
                });
                ticking = true;
            }
        });
    </script>

</body>

</html>
