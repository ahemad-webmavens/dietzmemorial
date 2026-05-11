<?php
namespace App\Observers;

use App\Models\Page;
use Illuminate\Support\Facades\Cache;

class PageObserver
{
    public function created(Page $page): void
    {
        Cache::forget("pages.{$page->slug}");
        Cache::forget("pages.show.{$page->slug}");
    }

    public function updated(Page $page): void
    {
        Cache::forget("pages.{$page->slug}");
        Cache::forget("pages.show.{$page->slug}");
        Cache::forget('pages.home');
    }

    public function deleted(Page $page): void
    {
        Cache::forget("pages.{$page->slug}");
        Cache::forget("pages.show.{$page->slug}");
        Cache::forget('pages.home');
    }

    public function restored(Page $page): void
    {
        Cache::forget("pages.{$page->slug}");
        Cache::forget("pages.show.{$page->slug}");
        Cache::forget('pages.home');
    }

    public function forceDeleted(Page $page): void
    {
        Cache::forget("pages.{$page->slug}");
        Cache::forget("pages.show.{$page->slug}");
        Cache::forget('pages.home');
    }
}
