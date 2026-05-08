@extends('layouts.app')

@section('meta_description', 'Browse our memorial gallery — upright, flat, bevel, slant, bronze and custom memorials crafted in Central Texas.')

@section('content')

<style>
    .active-filter   { background-color: #4a5e3a !important; color: #ffffff !important; }
    .inactive-filter { background-color: transparent !important; color: #4a5e3a !important; }
</style>

{{-- Hero Banner --}}
<div style="background-color: #4a5e3a; border-top: 3px solid #c8a96e; padding: 64px 32px; text-align: center; margin-bottom: 56px;">
    <p style="color: #c8a96e; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 12px;">
        Our Work
    </p>
    <h1 style="color: #ffffff; font-size: clamp(2rem, 5vw, 3rem); font-weight: 700; font-family: serif; margin-bottom: 16px;">
        Memorial Gallery
    </h1>
    <p style="color: rgba(255,255,255,0.75); font-size: 1.05rem; max-width: 520px; margin: 0 auto; line-height: 1.7;">
        Browse our collection of handcrafted memorials — each one a unique tribute to a life well lived.
    </p>
</div>

<div
    x-data="{
        category: 'all',
        open: false,
        selectedImage: '',
        selectedTitle: '',
    }"
    style="max-width: 1280px; margin: 0 auto; padding: 0 24px 80px;"
>

    {{-- Filter Buttons --}}
    <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 40px; justify-content: center;">

       {{-- All button --}}
        <button
            @click="category = 'all'"
            :class="category === 'all' ? 'active-filter' : 'inactive-filter'"
            style="padding: 8px 22px; border-radius: 30px; border: 2px solid #4a5e3a; font-size: 0.82rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; cursor: pointer; transition: all 0.2s ease;"
        >
            All
        </button>

        @foreach(['upright', 'flat', 'bevel', 'slant', 'bronze', 'custom'] as $cat)
            <button
                @click="category = '{{ $cat }}'"
                :class="category === '{{ $cat }}' ? 'active-filter' : 'inactive-filter'"
                style="padding: 8px 22px; border-radius: 30px; border: 2px solid #4a5e3a; font-size: 0.82rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; cursor: pointer; transition: all 0.2s ease;"
            >
                {{ ucfirst($cat) }}
            </button>
        @endforeach

    </div>

    {{-- Gallery Grid --}}
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">

        @foreach($galleryItems as $item)

            <div
                x-show="category === 'all' || category === '{{ $item->category }}'"
                @click="
                    open = true;
                    selectedImage = '{{ asset('storage/' . $item->image) }}';
                    selectedTitle = '{{ $item->title }}';
                "
                style="background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.08); cursor: pointer; transition: box-shadow 0.25s ease, transform 0.25s ease;"
                onmouseover="this.style.boxShadow='0 8px 28px rgba(0,0,0,0.15)'; this.style.transform='translateY(-4px)'"
                onmouseout="this.style.boxShadow='0 2px 12px rgba(0,0,0,0.08)'; this.style.transform='translateY(0)'"
            >

                <div style="position: relative; overflow: hidden; height: 260px;">
                    <img
                        src="{{ asset('storage/' . $item->image) }}"
                        alt="{{ $item->alt_text }}"
                        loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.4s ease;"
                        onmouseover="this.style.transform='scale(1.05)'"
                        onmouseout="this.style.transform='scale(1)'"
                    >
                    {{-- Category badge --}}
                    <div style="position: absolute; top: 12px; left: 12px; background-color: rgba(74,94,58,0.88); color: #c8a96e; font-size: 0.7rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 4px 10px; border-radius: 20px;">
                        {{ ucfirst($item->category) }}
                    </div>
                    {{-- Gold bottom bar --}}
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 3px; background-color: #c8a96e;"></div>
                </div>

                @if($item->title)
                    <div style="padding: 14px 16px;">
                        <p style="color: #2d2d2d; font-size: 0.95rem; font-weight: 600; font-family: serif; margin: 0;">
                            {{ $item->title }}
                        </p>
                    </div>
                @endif

            </div>

        @endforeach

    </div>

{{-- Modal --}}
        <div
            x-show="open"
            x-cloak
            x-transition
            @click.self="open = false"
            style="position: fixed; inset: 0; background: rgba(0,0,0,0.85); display: flex; align-items: center; justify-content: center; z-index: 50; padding: 24px;"
        >
    <div style="position: relative; max-width: 900px; width: 100%; margin: 0 auto; display: flex; flex-direction: column; align-items: center;">

        {{-- Close button --}}
        <button
            @click="open = false"
            style="position: absolute; top: -16px; right: -16px; z-index: 100; background: rgba(0,0,0,0.6); border: none; border-radius: 50%; width: 40px; height: 40px; font-size: 1.4rem; color: white; cursor: pointer; display: flex; align-items: center; justify-content: center;"
        >
            ✕
        </button>

        {{-- Image --}}
        <img
            :src="selectedImage"
            style="width: 100%; max-height: 85vh; object-fit: contain; border-radius: 8px; display: block; margin: 0 auto;"
        >

        {{-- Title --}}
        <p
            x-text="selectedTitle"
            style="color: #c8a96e; margin-top: 16px; text-align: center; font-size: 1.1rem; font-family: serif; font-weight: 600; letter-spacing: 0.05em; width: 100%;"
        ></p>

    </div>
</div>

</div>

@endsection
