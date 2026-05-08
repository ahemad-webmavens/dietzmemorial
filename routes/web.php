<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GraniteColorController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MemorialGuideController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $page = \App\Models\Page::with([
        'sections.items',
    ])
        ->where('slug', 'home')
        ->where('is_active', true)
        ->firstOrFail();

    return view('pages.show', [
        'page'           => $page,
        'seoTitle'       => $page->meta_title ?: $page->title,
        'seoDescription' => $page->meta_description,
        'seoImage'       => $page->hero_image,
    ]);

});

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services/{slug}', [ServiceController::class, 'show']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);

Route::get('/locations', [LocationController::class, 'index']);
Route::get('/locations/{slug}', [LocationController::class, 'show']);

Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/granite-colors', [GraniteColorController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

Route::get('/memorial-design-guide/{slug}', [MemorialGuideController::class, 'show'])
    ->where('slug', '.*');

Route::get('/{slug}', [PageController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
