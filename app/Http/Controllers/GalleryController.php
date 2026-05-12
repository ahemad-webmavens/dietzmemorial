<?php
namespace App\Http\Controllers;

use App\Models\GalleryItem;
use App\Models\Page;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryItems = GalleryItem::orderBy('order')->get();

        $page = Page::where('slug', 'gallery')->where('is_active', true)->first();

        return view('gallery.index', [
            'galleryItems'   => $galleryItems,
            'page'           => $page,
            'seoTitle'       => $page?->meta_title ?: 'Gallery | Dietz Memorial',
            'seoDescription' => $page?->meta_description ?: 'Explore our gallery.',
            'seoImage'       => null,
        ]);

    }
}
