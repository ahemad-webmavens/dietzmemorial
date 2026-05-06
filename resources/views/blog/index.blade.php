@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')

@section('meta_description', 'Insights, guides and stories from Dietz Memorial — serving Central Texas since 1903.')

@section('content')

{{-- Minimal top bar instead of full hero --}}
<div style="border-top: 3px solid #c8a96e; background-color: #f9f7f4; padding: 40px 32px 0;">
    <div style="max-width: 1100px; margin: 0 auto;">
        <p style="color: #c8a96e; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 6px;">
            Stories & Insights
        </p>
        <h1 style="color: #2d2d2d; font-size: clamp(2rem, 5vw, 3rem); font-weight: 700; font-family: serif; margin: 0 0 32px;">
            Our Blog
        </h1>
        <div style="height: 1px; background: linear-gradient(to right, #c8a96e, #e5e0d8);"></div>
    </div>
</div>

<div style="background-color: #f9f7f4; padding: 48px 32px 80px;">
<div style="max-width: 1100px; margin: 0 auto;">

    {{-- Featured post (first one) --}}
    @if($posts->count())
    @php $featured = $posts->first(); @endphp
    <a href="{{ url('/blog/' . $featured->slug) }}" style="text-decoration: none; display: block; margin-bottom: 48px;">
        <div style="background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); display: grid; grid-template-columns: 1fr 1fr; min-height: 380px;"
             onmouseover="this.style.boxShadow='0 12px 40px rgba(0,0,0,0.14)'"
             onmouseout="this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)'">

            @if($featured->featured_image)
                <div style="overflow: hidden; position: relative;">
                    <img
                        src="{{ asset('storage/' . $featured->featured_image) }}"
                        alt="{{ $featured->title }}"
                        loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.5s ease;"
                        onmouseover="this.style.transform='scale(1.04)'"
                        onmouseout="this.style.transform='scale(1)'"
                    >
                    <div style="position: absolute; top: 20px; left: 20px; background-color: #c8a96e; color: #2d2d2d; font-size: 0.7rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 5px 12px; border-radius: 20px;">
                        Featured
                    </div>
                </div>
            @endif

            <div style="padding: 40px 44px; display: flex; flex-direction: column; justify-content: center;">
                <p style="color: #c8a96e; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 14px;">
                    {{ optional($featured->published_at)->format('F d, Y') }}
                </p>
                <h2 style="color: #2d2d2d; font-size: 1.7rem; font-weight: 700; font-family: serif; line-height: 1.3; margin-bottom: 16px;">
                    {{ $featured->title }}
                </h2>
                <div style="width: 40px; height: 2px; background-color: #c8a96e; margin-bottom: 16px;"></div>
                <p style="color: #6b7280; font-size: 0.95rem; line-height: 1.75; margin-bottom: 28px;">
                    {{ Str::limit($featured->excerpt, 180) }}
                </p>
                <span style="display: inline-flex; align-items: center; gap: 8px; color: #4a5e3a; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase;">
                    Read Article <span style="font-size: 1.1rem;">→</span>
                </span>
            </div>
        </div>
    </div>
    </a>
    @endif

    {{-- Remaining posts grid --}}
    @if($posts->count() > 1)
    <div style="max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 28px;">

        @foreach($posts->skip(1) as $post)
            <a href="{{ url('/blog/' . $post->slug) }}" style="text-decoration: none; display: block;">
                <div style="background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.07); height: 100%; display: flex; flex-direction: column; transition: box-shadow 0.25s, transform 0.25s;"
                     onmouseover="this.style.boxShadow='0 8px 28px rgba(0,0,0,0.13)'; this.style.transform='translateY(-4px)'"
                     onmouseout="this.style.boxShadow='0 2px 12px rgba(0,0,0,0.07)'; this.style.transform='translateY(0)'">

                    @if($post->featured_image)
                        <div style="height: 200px; overflow: hidden; position: relative;">
                            <img
                                src="{{ asset('storage/' . $post->featured_image) }}"
                                alt="{{ $post->title }}"
                                loading="lazy"
                                style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.4s ease;"
                                onmouseover="this.style.transform='scale(1.05)'"
                                onmouseout="this.style.transform='scale(1)'"
                            >
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 3px; background-color: #c8a96e;"></div>
                        </div>
                    @endif

                    <div style="padding: 22px 24px; flex: 1; display: flex; flex-direction: column;">
                        <p style="color: #c8a96e; font-size: 0.7rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 8px;">
                            {{ optional($post->published_at)->format('M d, Y') }}
                        </p>
                        <h2 style="color: #2d2d2d; font-size: 1.15rem; font-weight: 700; font-family: serif; line-height: 1.35; margin-bottom: 10px; flex: 1;">
                            {{ $post->title }}
                        </h2>
                        <p style="color: #6b7280; font-size: 0.88rem; line-height: 1.65; margin-bottom: 18px;">
                            {{ Str::limit($post->excerpt, 110) }}
                        </p>
                        <span style="color: #4a5e3a; font-size: 0.8rem; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase; display: inline-flex; align-items: center; gap: 6px;">
                            Read More <span>→</span>
                        </span>
                    </div>

                </div>
            </a>
        @endforeach

    </div>
    @endif

</div>
</div>

{{-- Mobile responsive featured post --}}
<style>
    @media (max-width: 680px) {
        .featured-grid { grid-template-columns: 1fr !important; }
    }
</style>

@endsection
