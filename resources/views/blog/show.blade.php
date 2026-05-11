@extends('layouts.app')

@section('meta_description', Str::limit($post->excerpt ?? $post->title, 155))

@section('content')

    {{-- Full width featured image with overlay --}}
    @if($post->featured_image)
        <div style="position: relative; width: 100%; height: clamp(300px, 50vw, 520px); overflow: hidden;">
            <img
                src="{{ asset('storage/' . $post->featured_image) }}"
                alt="{{ $post->title }}"
                loading="lazy"
                style="width: 100%; height: 100%; object-fit: cover; display: block;"
            >
            <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(20,35,15,0.75) 100%);"></div>
        </div>
    @endif

    {{-- Article wrapper --}}
    <div style="background-color: #f9f7f4; min-height: 60vh; padding-bottom: 40px;">

        {{-- Title card — overlaps image --}}
        <div style="max-width: 820px; margin: {{ $post->featured_image ? '-80px' : '0' }} auto 0; position: relative; z-index: 10; padding: 0 24px;">
            <div style="background: #ffffff; border-radius: 12px; padding: 40px 48px; box-shadow: 0 8px 40px rgba(0,0,0,0.12); border-top: 4px solid #c8a96e;">

                {{-- Meta --}}
                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 18px; flex-wrap: wrap;">
                    <span style="color: #c8a96e; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.15em; text-transform: uppercase;">
                        {{ optional($post->published_at)->format('F d, Y') }}
                    </span>
                    <span style="color: #ddd;">|</span>
                    <a href="/blog" style="color: #4a5e3a; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.15em; text-transform: uppercase; text-decoration: none;">
                        ← Back to Blog
                    </a>
                </div>

                <h1 style="color: #2d2d2d; font-size: clamp(1.6rem, 4vw, 2.4rem); font-weight: 700; font-family: serif; line-height: 1.25; margin: 0 0 20px;">
                    {{ $post->title }}
                </h1>

                <div style="height: 2px; width: 56px; background-color: #c8a96e;"></div>

            </div>
        </div>

        {{-- Body content --}}
        <div style="max-width: 820px; margin: 32px auto 0; padding: 0 24px;">
            <div style="background: #ffffff; border-radius: 12px; padding: 40px 48px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                <div style="color: #3d3d3d; font-size: 1.05rem; line-height: 1.9; font-family: Georgia, serif;">
                    {!! nl2br(e($post->body)) !!}
                </div>
            </div>

            {{-- Bottom nav --}}
            <div style="margin-top: 32px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
                <a href="/blog"
                   style="display: inline-flex; align-items: center; gap: 8px; color: #4a5e3a; font-size: 0.85rem; font-weight: 700; text-decoration: none; letter-spacing: 0.05em; text-transform: uppercase; border: 2px solid #4a5e3a; padding: 10px 20px; border-radius: 6px;"
                   onmouseover="this.style.backgroundColor='#4a5e3a'; this.style.color='#ffffff'"
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='#4a5e3a'">
                    ← All Posts
                </a>
                <a href="/contact"
                   style="display: inline-block; background-color: #c8a96e; color: #2d2d2d; padding: 10px 24px; border-radius: 6px; font-size: 0.85rem; font-weight: 700; text-decoration: none; letter-spacing: 0.05em; text-transform: uppercase;"
                   onmouseover="this.style.backgroundColor='#b8945a'"
                   onmouseout="this.style.backgroundColor='#c8a96e'">
                    Contact Us
                </a>
            </div>
        </div>

    </div>

@endsection
