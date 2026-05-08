<div class="max-w-7xl mx-auto py-12">
    <h1 class="text-5xl font-bold mb-6">
        {{ $page->title }}
    </h1>
    @if ($page->hero_image)
        <img src="{{ asset('storage/' . $page->hero_image) }}" class="w-full rounded mb-8">
    @endif
    <div class="prose max-w-none">
        {!! $page->content !!}
    </div>
</div>
