<?php
namespace App\Http\Controllers;

use App\Models\Page;

class PageController extends Controller
{
    public function show($slug)
    {
        if ($slug === 'home') {
            return redirect('/');
        }

        $page = Page::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('pages.show', [
            'page'           => $page,
            'seoTitle'       => $page->meta_title ?: $page->title,
            'seoDescription' => $page->meta_description,
            'seoImage'       => $page->hero_image,
        ]);
    }
}
