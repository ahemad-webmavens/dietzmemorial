@extends('layouts.app')

@section('content')

<div class="min-h-[60vh] flex flex-col items-center justify-center px-6 py-24 text-center" style="background-color: #f9f7f4;">

    <div class="w-16 h-0.5 mb-8 mx-auto" style="background-color: #c8a96e;"></div>

    <p class="text-xs font-semibold tracking-widest uppercase mb-4" style="color: #c8a96e;">
        Error 500
    </p>

    <h1 class="font-bold font-serif mb-4" style="color: #2d2d2d; font-size: clamp(2rem, 5vw, 3rem);">
        Something Went Wrong
    </h1>

    <p class="text-base leading-relaxed max-w-md mx-auto mb-10" style="color: #6b7280;">
        We're experiencing a technical issue. Please try again in a moment or contact us if the problem continues.
    </p>

    <div class="flex flex-wrap gap-3 justify-center">
        <a href="/"
           class="inline-block px-6 py-3 rounded-md text-sm font-bold tracking-wide uppercase no-underline text-white transition-colors duration-200"
           style="background-color: #4a5e3a;"
           onmouseover="this.style.backgroundColor='#c8a96e'; this.style.color='#2d2d2d'"
           onmouseout="this.style.backgroundColor='#4a5e3a'; this.style.color='#ffffff'">
            Back to Home
        </a>
        <a href="/contact"
           class="inline-block px-6 py-3 rounded-md text-sm font-bold tracking-wide uppercase no-underline transition-colors duration-200"
           style="color: #4a5e3a; border: 2px solid #4a5e3a; background-color: transparent;"
           onmouseover="this.style.backgroundColor='#4a5e3a'; this.style.color='#ffffff'"
           onmouseout="this.style.backgroundColor='transparent'; this.style.color='#4a5e3a'">
            Contact Us
        </a>
    </div>

    <div class="w-16 h-0.5 mt-8 mx-auto" style="background-color: #c8a96e;"></div>

</div>

@endsection
