<?php
namespace App\Observers;

use App\Models\Service;
use Illuminate\Support\Facades\Cache;

class ServiceObserver
{
    public function created(Service $service): void
    {
        Cache::forget('services.index');
    }

    public function updated(Service $service): void
    {
        Cache::forget('services.index');
        Cache::forget("services.show.{$service->slug}");
    }

    public function deleted(Service $service): void
    {
        Cache::forget('services.index');
        Cache::forget("services.show.{$service->slug}");
    }

    public function restored(Service $service): void
    {
        Cache::forget('services.index');
        Cache::forget("services.show.{$service->slug}");
    }

    public function forceDeleted(Service $service): void
    {
        Cache::forget('services.index');
        Cache::forget("services.show.{$service->slug}");
    }

}
