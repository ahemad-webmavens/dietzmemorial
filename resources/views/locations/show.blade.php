@extends('layouts.app')

@section('meta_description', $location->name . ' — Dietz Memorial. ' . $location->address . ', ' . $location->city . ', ' . $location->state . '.')

@section('content')

{{-- Hero Banner --}}
<div style="background-color: #4a5e3a; border-top: 3px solid #c8a96e; padding: 64px 32px; text-align: center; margin-bottom: 0;">
    <p style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 12px;">
        Dietz Memorial
    </p>
    <h1 style="color: #ffffff; font-size: clamp(2rem, 5vw, 3rem); font-weight: 700; font-family: serif; margin: 0;">
        {{ $location->name }}
    </h1>
</div>

{{-- Breadcrumb --}}
<div style="background-color: #f9f7f4; border-bottom: 1px solid #e5e0d8; padding: 12px 32px;">
    <div style="max-width: 1000px; margin: 0 auto; font-size: 0.82rem; color: #888;">
        <a href="/" style="color: #4a5e3a; text-decoration: none;">Home</a>
        <span style="margin: 0 8px; color: #c8a96e;">›</span>
        <a href="/locations" style="color: #4a5e3a; text-decoration: none;">Locations</a>
        <span style="margin: 0 8px; color: #c8a96e;">›</span>
        <span style="color: #555;">{{ $location->name }}</span>
    </div>
</div>

<div style="max-width: 1000px; margin: 0 auto; padding: 56px 24px 80px;">

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: start;">

        {{-- Left: Info --}}
        <div>
            {{-- Gold divider --}}
            <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 32px;">
                <div style="height: 2px; width: 48px; background-color: #c8a96e;"></div>
                <span style="color: #c8a96e; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.15em; text-transform: uppercase; white-space: nowrap;">Location Info</span>
                <div style="height: 2px; flex: 1; background-color: #e5e0d8;"></div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 24px;">

                {{-- Address --}}
                <div style="display: flex; gap: 16px; align-items: flex-start;">
                    <div style="width: 40px; height: 40px; background-color: #4a5e3a; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <span style="font-size: 1rem;">📍</span>
                    </div>
                    <div>
                        <p style="color: #888; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; margin: 0 0 5px;">Address</p>
                        <p style="color: #2d2d2d; font-size: 1rem; line-height: 1.6; margin: 0;">
                            {{ $location->address }}<br>
                            {{ $location->city }}, {{ $location->state }} {{ $location->zip }}
                        </p>
                    </div>
                </div>

                {{-- Phone --}}
                @if($location->phone)
                <div style="display: flex; gap: 16px; align-items: flex-start;">
                    <div style="width: 40px; height: 40px; background-color: #4a5e3a; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <span style="font-size: 1rem;">📞</span>
                    </div>
                    <div>
                        <p style="color: #888; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; margin: 0 0 5px;">Phone</p>
                        <a href="tel:{{ $location->phone }}" style="color: #4a5e3a; font-size: 1rem; font-weight: 600; text-decoration: none;">
                            {{ $location->phone }}
                        </a>
                    </div>
                </div>
                @endif

                {{-- Email --}}
                @if($location->email)
                <div style="display: flex; gap: 16px; align-items: flex-start;">
                    <div style="width: 40px; height: 40px; background-color: #4a5e3a; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <span style="font-size: 1rem;">✉️</span>
                    </div>
                    <div>
                        <p style="color: #888; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; margin: 0 0 5px;">Email</p>
                        <a href="mailto:{{ $location->email }}" style="color: #4a5e3a; font-size: 1rem; font-weight: 600; text-decoration: none;">
                            {{ $location->email }}
                        </a>
                    </div>
                </div>
                @endif

                {{-- Hours --}}
                @if($location->hours)
                <div style="display: flex; gap: 16px; align-items: flex-start;">
                    <div style="width: 40px; height: 40px; background-color: #4a5e3a; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <span style="font-size: 1rem;">🕐</span>
                    </div>
                    <div>
                        <p style="color: #888; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; margin: 0 0 5px;">Hours</p>
                        <p style="color: #2d2d2d; font-size: 1rem; line-height: 1.6; margin: 0;">
                            {{ $location->hours }}
                        </p>
                    </div>
                </div>
                @endif

            </div>

            {{-- Action buttons --}}
            <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-top: 36px;">
                @if($location->phone)
                <a href="tel:{{ $location->phone }}"
                   style="display: inline-block; background-color: #4a5e3a; color: #ffffff; padding: 12px 24px; border-radius: 6px; font-size: 0.82rem; font-weight: 700; text-decoration: none; letter-spacing: 0.06em; text-transform: uppercase;"
                   onmouseover="this.style.backgroundColor='#c8a96e'; this.style.color='#2d2d2d'"
                   onmouseout="this.style.backgroundColor='#4a5e3a'; this.style.color='#ffffff'">
                    Call Us
                </a>
                @endif
                <a href="/contact"
                   style="display: inline-block; background-color: transparent; color: #4a5e3a; padding: 12px 24px; border-radius: 6px; font-size: 0.82rem; font-weight: 700; text-decoration: none; letter-spacing: 0.06em; text-transform: uppercase; border: 2px solid #4a5e3a;"
                   onmouseover="this.style.backgroundColor='#4a5e3a'; this.style.color='#ffffff'"
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='#4a5e3a'">
                    Send a Message
                </a>
            </div>
        </div>

        {{-- Right: Map --}}
        @if($location->map_embed)
        <div>
            <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 32px;">
                <div style="height: 2px; width: 48px; background-color: #c8a96e;"></div>
                <span style="color: #c8a96e; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.15em; text-transform: uppercase; white-space: nowrap;">Find Us</span>
                <div style="height: 2px; flex: 1; background-color: #e5e0d8;"></div>
            </div>
            <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.1); border: 3px solid #c8a96e;">
                {!! $location->map_embed !!}
            </div>
        </div>
        @endif

    </div>

</div>

{{-- Responsive: stack columns on mobile --}}
<style>
    @media (max-width: 700px) {
        .location-grid { grid-template-columns: 1fr !important; }
    }
</style>

@endsection
