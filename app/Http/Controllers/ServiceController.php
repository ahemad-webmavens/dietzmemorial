<?php
namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('order')
            ->get();

        $page = Page::where('slug', 'services')->where('is_active', true)->first();

        return view('services.index', [
            'services'       => $services,
            'page'           => $page,
            'seoTitle'       => $page?->meta_title ?: 'Our Services | ' . (setting('site_name') ?? 'Dietz Memorial'),
            'seoDescription' => $page?->meta_description ?: 'Explore our full range of memorial services.',
            'seoImage'       => $page?->hero_image ?? null,
        ]);
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('services.show', [
            'service'        => $service,
            'seoTitle'       => $service->meta_title ?: $service->name,
            'seoDescription' => $service->meta_description,
            'seoImage'       => $service->image,
        ]);
    }
}
