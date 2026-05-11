<?php
namespace App\Observers;

use App\Models\Location;
use Illuminate\Support\Facades\Cache;

class LocationObserver
{
    public function created(Location $location): void
    {
        Cache::forget('locations.index');
    }

    public function updated(Location $location): void
    {
        Cache::forget('locations.index');
        Cache::forget("locations.show.{$location->slug}");
    }

    public function deleted(Location $location): void
    {
        Cache::forget('locations.index');
        Cache::forget("locations.show.{$location->slug}");
    }

    public function restored(Location $location): void
    {
        Cache::forget('locations.index');
        Cache::forget("locations.show.{$location->slug}");
    }

    public function forceDeleted(Location $location): void
    {
        Cache::forget('locations.index');
        Cache::forget("locations.show.{$location->slug}");
    }
}
