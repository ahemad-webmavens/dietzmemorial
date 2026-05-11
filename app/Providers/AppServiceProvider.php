<?php
namespace App\Providers;

use App\Models\MemorialGuide;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {

        try {
            if (Schema::hasTable('memorial_guides')) {
                View::share(
                    'memorialGuideMenu',
                    MemorialGuide::where('is_active', true)->orderBy('order')->get()
                );
            } else {
                View::share('memorialGuideMenu', collect());
            }
        } catch (\Exception $e) {
            View::share('memorialGuideMenu', collect());
        }
    }
}
