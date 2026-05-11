@extends('layouts.app')

@section('content')

{{-- Hero Banner --}}
<div style="background-image: url('{{ asset('storage/pages/locations.webp') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; padding: 120px 24px; text-align: center; margin-bottom: 40px; border-top: 3px solid #c8a96e;">

    <div style="position: absolute; inset: 0; background-color: rgba(74, 94, 58, 0.62);"></div>

    <div style="position: relative; z-index: 1;">
        <p style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 12px;">
            Find Us
        </p>
        <h1 style="color: #ffffff; font-size: clamp(2rem, 5vw, 3rem); font-weight: 700; font-family: serif; margin-bottom: 16px;">
            Our Locations
        </h1>
        <p style="color: rgba(255,255,255,0.85); font-size: 1.05rem; max-width: 520px; margin: 0 auto; line-height: 1.7;">
            Serving Central Texas with two convenient locations — come visit us today.
        </p>
    </div>

</div>

<div style="max-width: 1280px; margin: 0 auto; padding: 0 24px 40px;">

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px;">

        @foreach($locations as $location)

            <div style="background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.08); display: flex; flex-direction: column; transition: box-shadow 0.25s ease, transform 0.25s ease;"
                 onmouseover="this.style.boxShadow='0 8px 28px rgba(0,0,0,0.14)'; this.style.transform='translateY(-4px)'"
                 onmouseout="this.style.boxShadow='0 2px 12px rgba(0,0,0,0.08)'; this.style.transform='translateY(0)'">

                {{-- Green header bar --}}
                <div style="background-color: #4a5e3a; padding: 24px 28px; position: relative;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; height: 3px; background-color: #c8a96e;"></div>
                    <h2 style="color: #ffffff; font-size: 1.4rem; font-weight: 700; font-family: serif; margin: 0 0 4px;">
                        {{ $location->name }}
                    </h2>
                    <p style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.15em; text-transform: uppercase; margin: 0;">
                        Dietz Memorial
                    </p>
                </div>

                {{-- Details --}}
                <div style="padding: 24px 28px; flex: 1; display: flex; flex-direction: column; gap: 16px;">

                    {{-- Address --}}
                    <div style="display: flex; gap: 14px; align-items: flex-start;">
                        <div style="width: 32px; height: 32px; background-color: #f0ede8; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                            <span style="font-size: 0.9rem;">📍</span>
                        </div>
                        <div>
                            <p style="color: #888; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; margin: 0 0 3px;">Address</p>
                            <p style="color: #2d2d2d; font-size: 0.95rem; line-height: 1.5; margin: 0;">
                                {{ $location->address }}<br>
                                {{ $location->city }}, {{ $location->state }} {{ $location->zip }}
                            </p>
                        </div>
                    </div>

                    {{-- Phone --}}
                    @if($location->phone)
                    <div style="display: flex; gap: 14px; align-items: flex-start;">
                        <div style="width: 32px; height: 32px; background-color: #f0ede8; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <span style="font-size: 0.9rem;">📞</span>
                        </div>
                        <div>
                            <p style="color: #888; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; margin: 0 0 3px;">Phone</p>
                            <a href="tel:{{ $location->phone }}" style="color: #4a5e3a; font-size: 0.95rem; font-weight: 600; text-decoration: none;">
                                {{ $location->phone }}
                            </a>
                        </div>
                    </div>
                    @endif

                    {{-- Hours --}}
                    @if($location->hours)
                    <div style="display: flex; gap: 14px; align-items: flex-start;">
                        <div style="width: 32px; height: 32px; background-color: #f0ede8; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <span style="font-size: 0.9rem;">🕐</span>
                        </div>
                        <div>
                            <p style="color: #888; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; margin: 0 0 3px;">Hours</p>
                            <p style="color: #2d2d2d; font-size: 0.95rem; margin: 0;">{{ $location->hours }}</p>
                        </div>
                    </div>
                    @endif

                </div>

                {{-- Full-width button at bottom --}}
                    <a
                    href="{{ url('/locations/' . $location->slug) }}"
                    style="display: block; background-color: #4a5e3a; color: #ffffff; padding: 14px 28px; font-size: 0.82rem; font-weight: 700; text-decoration: none; letter-spacing: 0.06em; text-transform: uppercase; text-align: center; transition: background-color 0.2s;"
                    onmouseover="this.style.backgroundColor='#c8a96e'; this.style.color='#2d2d2d'"
                    onmouseout="this.style.backgroundColor='#4a5e3a'; this.style.color='#ffffff'"
                >
                    View Location →
                </a>

            </div>

        @endforeach

    </div>

    {{-- Bottom CTA --}}
    <div style="margin-top: 40px; background-color: #4a5e3a; border-radius: 12px; padding: 48px 32px; text-align: center;">
        <p style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 12px;">
            Get In Touch
        </p>
        <h3 style="color: #ffffff; font-size: 1.8rem; font-weight: 700; font-family: serif; margin-bottom: 14px;">
            Not Sure Which Location to Visit?
        </h3>
        <p style="color: rgba(255,255,255,0.75); font-size: 0.95rem; margin-bottom: 28px; max-width: 440px; margin-left: auto; margin-right: auto; line-height: 1.7;">
            Our team is happy to help you find the right location and guide you through the process.
        </p>
            <a
            href="/contact"
            style="display: inline-block; background-color: #c8a96e; color: #2d2d2d; padding: 14px 32px; border-radius: 6px; font-size: 0.9rem; font-weight: 700; text-decoration: none; letter-spacing: 0.05em; text-transform: uppercase;"
            onmouseover="this.style.backgroundColor='#b8945a'"
            onmouseout="this.style.backgroundColor='#c8a96e'"
        >
            Contact Us
        </a>
    </div>

</div>

@endsection
