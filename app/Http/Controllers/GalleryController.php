<?php
namespace App\Http\Controllers;

use App\Models\GalleryItem;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryItems = GalleryItem::orderBy('order')->get();

        return view('gallery.index', compact('galleryItems'));
    }
}
