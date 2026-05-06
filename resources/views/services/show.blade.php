@extends('layouts.app')

@section('meta_description', $service->name . ' — Dietz Memorial. Quality memorials serving Central Texas since 1903.')

@section('content')

    {{-- Hero Image --}}
    @if($service->image)
        <div style="position: relative; width: 100%; height: clamp(280px, 45vw, 500px); overflow: hidden;">
            <img
                src="{{ asset('storage/' . $service->image) }}"
                alt="{{ $service->name }}"
                loading="lazy"
                style="width: 100%; height: 100%; object-fit: cover; display: block;"
            >
            {{-- Dark overlay --}}
            <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0,0,0,0.15), rgba(30,45,20,0.7));"></div>

            {{-- Title over image --}}
            <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 40px 32px;">
                <div style="max-width: 900px; margin: 0 auto;">
                    <p style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 10px;">
                        Our Services
                    </p>
                    <h1 style="color: #ffffff; font-size: clamp(1.8rem, 4vw, 3rem); font-weight: 700; font-family: serif; line-height: 1.2; margin: 0;">
                        {{ $service->name }}
                    </h1>
                </div>
            </div>
        </div>
    @else
        {{-- No image fallback banner --}}
        <div style="background-color: #4a5e3a; border-top: 3px solid #c8a96e; padding: 64px 32px; text-align: center;">
            <p style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 12px;">
                Our Services
            </p>
            <h1 style="color: #ffffff; font-size: clamp(1.8rem, 4vw, 3rem); font-weight: 700; font-family: serif; margin: 0;">
                {{ $service->name }}
            </h1>
        </div>
    @endif

    {{-- Breadcrumb --}}
    <div style="background-color: #f9f7f4; border-bottom: 1px solid #e5e0d8; padding: 12px 32px;">
        <div style="max-width: 900px; margin: 0 auto; font-size: 0.82rem; color: #888;">
            <a href="/" style="color: #4a5e3a; text-decoration: none;">Home</a>
            <span style="margin: 0 8px; color: #c8a96e;">›</span>
            <a href="/services" style="color: #4a5e3a; text-decoration: none;">Services</a>
            <span style="margin: 0 8px; color: #c8a96e;">›</span>
            <span style="color: #555;">{{ $service->name }}</span>
        </div>
    </div>

    {{-- Main Content --}}
    <div style="max-width: 900px; margin: 0 auto; padding: 56px 32px 80px;">

        {{-- Gold divider --}}
        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 36px;">
            <div style="height: 2px; width: 48px; background-color: #c8a96e;"></div>
            <span style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; white-space: nowrap;">
                Service Details
            </span>
            <div style="height: 2px; flex: 1; background-color: #e5e0d8;"></div>
        </div>

        {{-- Description --}}
        <div style="color: #444; font-size: 1.05rem; line-height: 1.85; margin-bottom: 56px;">
            {!! nl2br(e($service->description)) !!}
        </div>

        {{-- CTA Box --}}
        <div style="background-color: #4a5e3a; border-radius: 10px; padding: 40px 36px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 24px;">
            <div>
                <p style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 8px;">
                    Ready to Get Started?
                </p>
                <h3 style="color: #ffffff; font-size: 1.5rem; font-weight: 700; font-family: serif; margin: 0;">
                    Let's create something meaningful together.
                </h3>
            </div>
            <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                <a href="/contact"
                   style="display: inline-block; background-color: #c8a96e; color: #2d2d2d; padding: 12px 28px; border-radius: 6px; font-size: 0.85rem; font-weight: 700; text-decoration: none; letter-spacing: 0.05em; text-transform: uppercase; white-space: nowrap;"
                   onmouseover="this.style.backgroundColor='#b8945a'"
                   onmouseout="this.style.backgroundColor='#c8a96e'">
                    Contact Us
                </a>
                <a href="/services"
                   style="display: inline-block; background-color: transparent; color: #ffffff; padding: 12px 28px; border-radius: 6px; font-size: 0.85rem; font-weight: 600; text-decoration: none; letter-spacing: 0.05em; text-transform: uppercase; border: 1px solid rgba(255,255,255,0.4); white-space: nowrap;"
                   onmouseover="this.style.borderColor='#c8a96e'; this.style.color='#c8a96e'"
                   onmouseout="this.style.borderColor='rgba(255,255,255,0.4)'; this.style.color='#ffffff'">
                    All Services
                </a>
            </div>
        </div>

    </div>

@endsection
