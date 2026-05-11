<?php
namespace App\Observers;

use App\Models\GalleryItem;
use Illuminate\Support\Facades\Cache;

class GalleryItemObserver
{
    public function created(GalleryItem $item): void
    {Cache::forget('gallery.index');}
    public function updated(GalleryItem $item): void
    {Cache::forget('gallery.index');}
    public function deleted(GalleryItem $item): void
    {Cache::forget('gallery.index');}
    public function restored(GalleryItem $item): void
    {Cache::forget('gallery.index');}
    public function forceDeleted(GalleryItem $item): void
    {Cache::forget('gallery.index');}
}
