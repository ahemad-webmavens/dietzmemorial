<?php
namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('services.index', compact('services'));
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
