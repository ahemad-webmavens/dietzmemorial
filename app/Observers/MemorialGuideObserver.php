<?php
namespace App\Observers;

use App\Models\MemorialGuide;
use Illuminate\Support\Facades\Cache;

class MemorialGuideObserver
{
    public function created(MemorialGuide $guide): void
    {
        Cache::forget('memorial-guides.menu');
    }

    public function updated(MemorialGuide $guide): void
    {
        Cache::forget('memorial-guides.menu');
        Cache::forget("memorial-guides.show.{$guide->slug}");
    }

    public function deleted(MemorialGuide $guide): void
    {
        Cache::forget('memorial-guides.menu');
        Cache::forget("memorial-guides.show.{$guide->slug}");
    }

    public function restored(MemorialGuide $guide): void
    {
        Cache::forget('memorial-guides.menu');
        Cache::forget("memorial-guides.show.{$guide->slug}");
    }

    public function forceDeleted(MemorialGuide $guide): void
    {
        Cache::forget('memorial-guides.menu');
        Cache::forget("memorial-guides.show.{$guide->slug}");
    }
}
