<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('meta_title', 'Dietz Memorial — Since 1903')</title>
    <meta name="description" content="@yield('meta_description', 'Quality granite and bronze memorials serving Central Texas since 1903.')">
    <link rel="canonical" href="{{ url()->current() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 font-sans">

<header>
    <div class="bg-[#4a5e3a]">
        <div class="max-w-7xl mx-auto px-4 flex items-stretch justify-between min-h-[80px]">

            <a href="/" class="flex items-center gap-3 py-3 no-underline">
                <img src="{{ asset('images/logo.png') }}"
                     alt="Dietz Memorial Logo"
                     class="h-14 w-auto object-contain"
                     onerror="this.style.display='none'; document.getElementById('logo-fallback').style.display='flex';">

                <div id="logo-fallback" class="items-center gap-3" style="display:none;">
                    <div class="border-2 border-[#c8a96e] px-3 py-1">
                        <span class="font-serif text-3xl font-bold text-white leading-none">D</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-serif text-xl font-bold text-white uppercase tracking-wide">Dietz Memorial</span>
                        <span class="text-[#c8a96e] text-xs uppercase tracking-widest">Serving Central Texas Since 1903</span>
                    </div>
                </div>
            </a>

            <nav class="hidden lg:flex items-stretch">
                <a href="/"
                   class="flex items-center px-4 text-white text-xs font-semibold uppercase tracking-widest border-b-[3px] border-transparent hover:bg-[#5a7048] hover:border-[#c8a96e] transition-all duration-200 {{ request()->is('/') ? 'bg-[#5a7048] border-[#c8a96e]' : '' }}">
                    Home
                </a>
                <a href="/about"
                   class="flex items-center px-4 text-white text-xs font-semibold uppercase tracking-widest border-b-[3px] border-transparent hover:bg-[#5a7048] hover:border-[#c8a96e] transition-all duration-200 {{ request()->is('about*') ? 'bg-[#5a7048] border-[#c8a96e]' : '' }}">
                    Our Story
                </a>
                <a href="/services"
                   class="flex items-center px-4 text-white text-xs font-semibold uppercase tracking-widest border-b-[3px] border-transparent hover:bg-[#5a7048] hover:border-[#c8a96e] transition-all duration-200 {{ request()->is('services*') ? 'bg-[#5a7048] border-[#c8a96e]' : '' }}">
                    Services
                </a>
                <a href="/memorial-design-guide"
                   class="flex items-center px-4 text-white text-xs font-semibold uppercase tracking-widest border-b-[3px] border-transparent hover:bg-[#5a7048] hover:border-[#c8a96e] transition-all duration-200 {{ request()->is('memorial*') ? 'bg-[#5a7048] border-[#c8a96e]' : '' }}">
                    Design Guide
                </a>
                <a href="/gallery"
                   class="flex items-center px-4 text-white text-xs font-semibold uppercase tracking-widest border-b-[3px] border-transparent hover:bg-[#5a7048] hover:border-[#c8a96e] transition-all duration-200 {{ request()->is('gallery*') ? 'bg-[#5a7048] border-[#c8a96e]' : '' }}">
                    Gallery
                </a>
                <a href="/locations"
                   class="flex items-center px-4 text-white text-xs font-semibold uppercase tracking-widest border-b-[3px] border-transparent hover:bg-[#5a7048] hover:border-[#c8a96e] transition-all duration-200 {{ request()->is('locations*') ? 'bg-[#5a7048] border-[#c8a96e]' : '' }}">
                    Locations
                </a>
                <a href="/blog"
                   class="flex items-center px-4 text-white text-xs font-semibold uppercase tracking-widest border-b-[3px] border-transparent hover:bg-[#5a7048] hover:border-[#c8a96e] transition-all duration-200 {{ request()->is('blog*') ? 'bg-[#5a7048] border-[#c8a96e]' : '' }}">
                    Blog
                </a>
                <a href="/contact"
                   class="flex items-center px-4 text-white text-xs font-semibold uppercase tracking-widest border-b-[3px] border-transparent hover:bg-[#5a7048] hover:border-[#c8a96e] transition-all duration-200 {{ request()->is('contact*') ? 'bg-[#5a7048] border-[#c8a96e]' : '' }}">
                    Contact
                </a>
                <a href="tel:2547565315"
                   class="flex items-center px-6 bg-[#3d5030] border-l border-white/20 text-[#c8a96e] font-bold text-base tracking-normal hover:bg-[#5a7048] transition-all duration-200">
                    (254) 756-5315
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
        <a href="/" class="block px-6 py-3 text-white text-sm font-semibold uppercase tracking-wider border-b border-white/10 hover:bg-[#5a7048] hover:text-[#c8a96e] transition-colors">Home</a>
        <a href="/about" class="block px-6 py-3 text-white text-sm font-semibold uppercase tracking-wider border-b border-white/10 hover:bg-[#5a7048] hover:text-[#c8a96e] transition-colors">Our Story</a>
        <a href="/services" class="block px-6 py-3 text-white text-sm font-semibold uppercase tracking-wider border-b border-white/10 hover:bg-[#5a7048] hover:text-[#c8a96e] transition-colors">Services</a>
        <a href="/memorial-design-guide" class="block px-6 py-3 text-white text-sm font-semibold uppercase tracking-wider border-b border-white/10 hover:bg-[#5a7048] hover:text-[#c8a96e] transition-colors">Design Guide</a>
        <a href="/gallery" class="block px-6 py-3 text-white text-sm font-semibold uppercase tracking-wider border-b border-white/10 hover:bg-[#5a7048] hover:text-[#c8a96e] transition-colors">Gallery</a>
        <a href="/locations" class="block px-6 py-3 text-white text-sm font-semibold uppercase tracking-wider border-b border-white/10 hover:bg-[#5a7048] hover:text-[#c8a96e] transition-colors">Locations</a>
        <a href="/blog" class="block px-6 py-3 text-white text-sm font-semibold uppercase tracking-wider border-b border-white/10 hover:bg-[#5a7048] hover:text-[#c8a96e] transition-colors">Blog</a>
        <a href="/contact" class="block px-6 py-3 text-white text-sm font-semibold uppercase tracking-wider border-b border-white/10 hover:bg-[#5a7048] hover:text-[#c8a96e] transition-colors">Contact</a>
        <a href="tel:2547565315" class="block px-6 py-4 text-[#c8a96e] text-base font-bold tracking-wide hover:bg-[#5a7048] transition-colors">
            &#128222; (254) 756-5315
        </a>
    </div>

</header>

<main class="min-h-[60vh]">
    @yield('content')
</main>

<footer class="bg-[#3d5030] text-white/85 pt-12 pb-6 mt-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-10">

            {{-- Brand --}}
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}"
                         alt="Dietz Memorial"
                         class="h-12 w-auto object-contain"
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
                <h4 class="text-[#c8a96e] text-xs font-semibold uppercase tracking-widest mb-4">Services</h4>
                <a href="/services/granite-memorials" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Granite Memorials</a>
                <a href="/services/bronze-memorials" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Bronze Memorials</a>
                <a href="/services/mausoleums-columbaria" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Mausoleums & Columbaria</a>
                <a href="/services/pet-memorials" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Pet Memorials</a>
                <a href="/services/cremation-memorials" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Cremation Memorials</a>
            </div>

            <div>
                <h4 class="text-[#c8a96e] text-xs font-semibold uppercase tracking-widest mb-4">Waco — HQ</h4>
                <p class="text-white/70 text-sm leading-relaxed">500 LaSalle Ave<br>Waco, TX 76706</p>
                <a href="tel:2547565315" class="block text-white/75 text-sm mt-1 hover:text-white transition-colors">(254) 756-5315</a>
                <a href="mailto:sales@dietzmemorial.com" class="block text-white/75 text-sm hover:text-white transition-colors">sales@dietzmemorial.com</a>
                <p class="text-white/60 text-xs mt-1">Mon–Fri: 9:00 AM – 5:00 PM</p>

                <h4 class="text-[#c8a96e] text-xs font-semibold uppercase tracking-widest mt-6 mb-4">New Braunfels</h4>
                <p class="text-white/70 text-sm leading-relaxed">628 S. Business IH 35<br>New Braunfels, TX 78130</p>
                <a href="tel:8306270261" class="block text-white/75 text-sm mt-1 hover:text-white transition-colors">(830) 627-0261</a>
            </div>

            <div>
                <h4 class="text-[#c8a96e] text-xs font-semibold uppercase tracking-widest mb-4">Quick Links</h4>
                <a href="/about" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Our Story</a>
                <a href="/gallery" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Gallery</a>
                <a href="/memorial-design-guide" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Design Guide</a>
                <a href="/locations" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Our Locations</a>
                <a href="/blog" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Blog</a>
                <a href="/contact" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Contact Us</a>
                <a href="/privacy-policy" class="block text-white/75 text-sm leading-loose hover:text-white transition-colors">Privacy Policy</a>
            </div>

        </div>

        <div class="border-t border-white/10 pt-5 flex flex-col sm:flex-row justify-between items-center gap-2">
            <p class="text-white/50 text-xs">&copy; {{ date('Y') }} Dietz Memorial. All rights reserved.</p>
            <p class="text-white/50 text-xs">Proudly serving Central Texas since 1903.</p>
        </div>
    </div>
</footer>

<script>
    document.getElementById('hamburger').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>

</body>
</html>
