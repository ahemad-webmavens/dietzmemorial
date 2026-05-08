<?php
namespace App\Providers;

use App\Models\MemorialGuide;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share(
            'memorialGuideMenu',
            MemorialGuide::where('is_active', true)
                ->orderBy('order')
                ->get()
        );
    }
}
