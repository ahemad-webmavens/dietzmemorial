@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')

@section('meta_description', 'Explore our full range of memorial services including granite, bronze, mausoleums, pet memorials and more.')

@section('content')

    {{-- Hero Banner --}}
    <div style="background-color: #4a5e3a; padding: 64px 24px; text-align: center; margin-bottom: 64px; border-top: 3px solid #c8a96e;">
        <p style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 12px;">
            What We Offer
        </p>
        <h1 style="color: #ffffff; font-size: clamp(2rem, 5vw, 3rem); font-weight: 700; margin-bottom: 16px; font-family: serif;">
            Our Services
        </h1>
        <p style="color: rgba(255,255,255,0.75); font-size: 1.05rem; max-width: 560px; margin: 0 auto; line-height: 1.7;">
            Crafting meaningful tributes with care and compassion for over 120 years.
        </p>
    </div>

    <div class="max-w-7xl mx-auto px-4" style="padding-bottom: 80px;">

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 32px;">

            @foreach($services as $service)

                <div style="background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.08); display: flex; flex-direction: column; transition: box-shadow 0.25s ease, transform 0.25s ease;"
                     onmouseover="this.style.boxShadow='0 8px 32px rgba(0,0,0,0.14)'; this.style.transform='translateY(-4px)'"
                     onmouseout="this.style.boxShadow='0 2px 12px rgba(0,0,0,0.08)'; this.style.transform='translateY(0)'">

                    {{-- Image --}}
                    @if($service->image)
                        <div style="position: relative; overflow: hidden; height: 220px;">
                            <img
                                src="{{ asset('storage/' . $service->image) }}"
                                alt="{{ $service->name }}"
                                loading="lazy"
                                style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.4s ease;"
                                onmouseover="this.style.transform='scale(1.04)'"
                                onmouseout="this.style.transform='scale(1)'"
                            >
                            {{-- Gold accent bar --}}
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 3px; background-color: #c8a96e;"></div>
                        </div>
                    @else
                        {{-- Placeholder if no image --}}
                        <div style="height: 220px; background-color: #4a5e3a; display: flex; align-items: center; justify-content: center;">
                            <span style="color: #c8a96e; font-size: 3rem; opacity: 0.5;">✦</span>
                        </div>
                    @endif

                    {{-- Content --}}
                    <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">

                        <h2 style="color: #2d2d2d; font-size: 1.3rem; font-weight: 700; margin-bottom: 10px; font-family: serif; line-height: 1.3;">
                            {{ $service->name }}
                        </h2>

                        <div style="width: 36px; height: 2px; background-color: #c8a96e; margin-bottom: 14px;"></div>

                        <p style="color: #6b7280; font-size: 0.95rem; line-height: 1.7; margin-bottom: 24px; flex: 1;">
                            {{ Str::limit($service->description, 120) }}
                        </p>

                        <a
                            href="{{ url('/services/' . $service->slug) }}"
                            style="display: inline-block; background-color: #4a5e3a; color: #ffffff; padding: 10px 22px; border-radius: 6px; font-size: 0.85rem; font-weight: 600; text-decoration: none; letter-spacing: 0.05em; text-transform: uppercase; transition: background-color 0.2s ease; align-self: flex-start;"
                            onmouseover="this.style.backgroundColor='#c8a96e'; this.style.color='#2d2d2d'"
                            onmouseout="this.style.backgroundColor='#4a5e3a'; this.style.color='#ffffff'"
                        >
                            Learn More
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

        {{-- Bottom CTA --}}
        <div style="margin-top: 80px; background-color: #4a5e3a; border-radius: 12px; padding: 48px 32px; text-align: center;">
            <p style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 12px;">
                Need Guidance?
            </p>
            <h3 style="color: #ffffff; font-size: 1.8rem; font-weight: 700; font-family: serif; margin-bottom: 14px;">
                We're Here to Help
            </h3>
            <p style="color: rgba(255,255,255,0.75); font-size: 0.95rem; margin-bottom: 28px; max-width: 480px; margin-left: auto; margin-right: auto; line-height: 1.7;">
                Our team is available to answer any questions and guide you through the memorial process.
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
