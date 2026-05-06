<title>
    {{ $title ?? setting('site_name') }}
</title>

<meta
    name="description"
    content="{{ $description ?? setting('footer_text') }}"
>

<link
    rel="canonical"
    href="{{ url()->current() }}"
>

<meta property="og:title" content="{{ $title ?? setting('site_name') }}">

<meta property="og:description" content="{{ $description ?? setting('footer_text') }}">

@if($image)
    <meta property="og:image" content="{{ asset('storage/' . $image) }}">
@endif
