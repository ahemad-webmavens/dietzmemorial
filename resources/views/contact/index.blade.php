@extends('layouts.app')

@section('content')

{{-- Hero Banner --}}
<div class="relative text-center border-t-[3px] border-[#c8a96e]"
     style="background-image: url('{{ asset('storage/pages/contact.webp') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 120px 24px;">

    {{-- Dark overlay --}}
    <div class="absolute inset-0" style="background-color: rgba(74, 94, 58, 0.82);"></div>

    {{-- Content --}}
    <div class="relative z-10">
        <h1 class="text-white font-serif font-bold text-4xl md:text-5xl mb-4">Contact Us</h1>
        <p class="text-white text-lg max-w-lg mx-auto leading-relaxed">
            We're here to help guide you through the memorial process with compassion and care.
        </p>
    </div>

</div>

{{-- Breadcrumb --}}
<div class="bg-[#f9f7f4] border-b border-[#e5e0d8] py-3 px-8">
    <div class="max-w-6xl mx-auto text-xs text-gray-400">
        <a href="/" class="text-[#4a5e3a] hover:underline">Home</a>
        <span class="mx-2 text-[#c8a96e]">›</span>
        <span class="text-gray-500">Contact</span>
    </div>
</div>

{{-- Main Content --}}
<div class="max-w-7xl mx-auto px-6 py-10 pb-12 grid grid-cols-1 lg:grid-cols-[1fr_1.6fr] gap-14 items-start">

    {{-- Left: Location Info --}}
    <div>

        {{-- Section label --}}
        <div class="flex items-center gap-4 mb-8">
            <div class="h-px w-9 bg-[#c8a96e] shrink-0"></div>
            <span class="text-[#c8a96e] text-[0.7rem] font-bold uppercase tracking-[0.2em] whitespace-nowrap">Our Locations</span>
        </div>

        {{-- Waco --}}
        <div class="mb-9">
            <h3 class="font-serif text-xl font-bold text-gray-800 mb-4">Waco — Headquarters</h3>
            <div class="flex flex-col gap-3">
                <div class="flex items-start gap-3">
                    <span class="text-[#c8a96e] mt-0.5 shrink-0">📍</span>
                    <p class="text-gray-500 text-sm leading-relaxed">500 LaSalle Ave<br>Waco, TX 76706</p>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-[#c8a96e] shrink-0">📞</span>
                    <a href="tel:{{ setting('waco_phone') }}" class="text-[#4a5e3a] text-sm font-medium hover:underline">{{ setting('waco_phone') }}</a>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-[#c8a96e] shrink-0">✉️</span>
                    <a href="mailto:{{ setting('email', 'sales@dietzmemorial.com') }}" class="text-[#4a5e3a] text-sm font-medium hover:underline">{{ setting('email', 'sales@dietzmemorial.com') }}</a>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-[#c8a96e] shrink-0">🕐</span>
                    <p class="text-gray-400 text-sm">Mon–Fri: 9:00 AM – 5:00 PM</p>
                </div>
            </div>
        </div>

        {{-- Divider --}}
        <div class="h-px bg-gradient-to-r from-[#c8a96e] to-[#e5e0d8] mb-9"></div>

        {{-- New Braunfels --}}
        <div class="mb-10">
            <h3 class="font-serif text-xl font-bold text-gray-800 mb-4">New Braunfels</h3>
            <div class="flex flex-col gap-3">
                <div class="flex items-start gap-3">
                    <span class="text-[#c8a96e] mt-0.5 shrink-0">📍</span>
                    <p class="text-gray-500 text-sm leading-relaxed">628 S. Business IH 35<br>New Braunfels, TX 78130</p>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-[#c8a96e] shrink-0">📞</span>
                    <a href="tel:{{ setting('nb_phone') }}" class="text-[#4a5e3a] text-sm font-medium hover:underline">{{ setting('nb_phone') }}</a>
                </div>
            </div>
        </div>

        {{-- Trust badge --}}
        <div class="bg-[#f9f7f4] border-l-4 border-[#c8a96e] rounded-r-lg px-5 py-4">
            <p class="text-[#4a5e3a] text-xs font-bold uppercase tracking-wider mb-1">Family-Owned Since 1903</p>
            <p class="text-gray-400 text-sm leading-relaxed">Proudly serving Waco, New Braunfels, and all of Central Texas for over 120 years.</p>
        </div>

    </div>

    {{-- Right: Form --}}
    <div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 border-l-4 border-l-[#4a5e3a] text-green-800 px-5 py-4 rounded-lg mb-7 text-sm font-medium">
                ✓ &nbsp;{{ session('success') }}
            </div>
        @endif

        {{-- Form Card --}}
        <div class="bg-white rounded-xl shadow-[0_4px_24px_rgba(0,0,0,0.08)] overflow-hidden">

            {{-- Card Header --}}
            <div class="bg-[#4a5e3a] px-8 py-6">
                <p class="text-[#c8a96e] text-[0.7rem] font-bold uppercase tracking-[0.2em] mb-1">Send a Message</p>
                <h2 class="text-white font-serif text-xl font-bold">We'll respond as soon as possible</h2>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" class="px-8 py-9 flex flex-col gap-6">
                @csrf

                {{-- Location --}}
                <div>
                    <label class="block text-[0.78rem] font-bold text-gray-500 uppercase tracking-widest mb-2">
                        Select Location <span class="text-[#c8a96e]">*</span>
                    </label>
                    <div class="relative">
                        <select name="location_id" required
                            class="w-full appearance-none bg-[#fafaf9] border border-[#e0dbd2] rounded-lg px-4 py-3 pr-10 text-sm text-gray-700 outline-none cursor-pointer
                                   focus:border-[#c8a96e] focus:ring-2 focus:ring-[#c8a96e]/20 transition">
                            <option value="">— Choose a Location —</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>
                                    {{ $location->name }}
                                </option>
                            @endforeach
                        </select>
                        <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-[#c8a96e] text-xs">▼</span>
                    </div>
                    @error('location_id')
                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Name + Phone --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                    <div>
                        <label class="block text-[0.78rem] font-bold text-gray-500 uppercase tracking-widest mb-2">
                            Full Name <span class="text-[#c8a96e]">*</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}" required placeholder="Your name"
                            class="w-full bg-[#fafaf9] border border-[#e0dbd2] rounded-lg px-4 py-3 text-sm text-gray-700 outline-none
                                   focus:border-[#c8a96e] focus:ring-2 focus:ring-[#c8a96e]/20 transition placeholder:text-gray-300">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-[0.78rem] font-bold text-gray-500 uppercase tracking-widest mb-2">
                            Phone Number
                        </label>
                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="(xxx) xxx-xxxx"
                            class="w-full bg-[#fafaf9] border border-[#e0dbd2] rounded-lg px-4 py-3 text-sm text-gray-700 outline-none
                                   focus:border-[#c8a96e] focus:ring-2 focus:ring-[#c8a96e]/20 transition placeholder:text-gray-300">
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                {{-- Email --}}
                <div>
                    <label class="block text-[0.78rem] font-bold text-gray-500 uppercase tracking-widest mb-2">
                        Email Address
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com"
                        class="w-full bg-[#fafaf9] border border-[#e0dbd2] rounded-lg px-4 py-3 text-sm text-gray-700 outline-none
                               focus:border-[#c8a96e] focus:ring-2 focus:ring-[#c8a96e]/20 transition placeholder:text-gray-300">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Message --}}
                <div>
                    <label class="block text-[0.78rem] font-bold text-gray-500 uppercase tracking-widest mb-2">
                        Message <span class="text-[#c8a96e]">*</span>
                    </label>
                    <textarea name="message" rows="6" required placeholder="Tell us how we can help you…"
                        class="w-full bg-[#fafaf9] border border-[#e0dbd2] rounded-lg px-4 py-3 text-sm text-gray-700 outline-none resize-y leading-relaxed
                               focus:border-[#c8a96e] focus:ring-2 focus:ring-[#c8a96e]/20 transition placeholder:text-gray-300">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Footer row --}}
                <div class="flex items-center justify-between flex-wrap gap-4 pt-1">
                    <p class="text-gray-300 text-xs"><span class="text-[#c8a96e]">*</span> Required fields</p>
                    <button type="submit"
                        class="bg-[#4a5e3a] hover:bg-[#c8a96e] text-white hover:text-[#2d2d2d] px-9 py-3 rounded-lg text-sm font-bold uppercase tracking-widest transition-all duration-200 active:scale-95 cursor-pointer">
                        Send Message &nbsp;→
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>

@endsection
