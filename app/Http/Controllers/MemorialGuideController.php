<?php
namespace App\Http\Controllers;

use App\Models\MemorialGuide;

class MemorialGuideController extends Controller
{
    public function show($slug)
    {
        $guide = MemorialGuide::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $guides = MemorialGuide::where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('memorial-guides.show', [
            'guide'          => $guide,
            'guides'         => $guides,

            'seoTitle'       => $guide->title . ' | Memorial Design Guide',
            'seoDescription' => strip_tags(
                \Str::limit($guide->content, 150)
            ),
            'seoImage'       => $guide->featured_image,
        ]);
    }
}
