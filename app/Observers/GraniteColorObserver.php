<?php
namespace App\Observers;

use App\Models\GraniteColor;
use Illuminate\Support\Facades\Cache;

class GraniteColorObserver
{
    public function created(GraniteColor $color): void
    {Cache::forget('granite-colors.index');}
    public function updated(GraniteColor $color): void
    {Cache::forget('granite-colors.index');}
    public function deleted(GraniteColor $color): void
    {Cache::forget('granite-colors.index');}
    public function restored(GraniteColor $color): void
    {Cache::forget('granite-colors.index');}
    public function forceDeleted(GraniteColor $color): void
    {Cache::forget('granite-colors.index');}
}
