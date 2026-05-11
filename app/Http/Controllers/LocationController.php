<?php
namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Page;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::where('is_active', true)->get();

        $page = Page::where('slug', 'locations')->where('is_active', true)->first();

        return view('locations.index', [
            'locations'      => $locations,
            'seoTitle'       => $page?->meta_title ?: 'Locations | Dietz Memorial',
            'seoDescription' => $page?->meta_description ?: 'Explore our locations.',
            'seoImage'       => null,
        ]);
    }

    public function show($slug)
    {
        $location = Location::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('locations.show', [
            'location'       => $location,
            'seoTitle'       => $location->name . ' | Dietz Memorial',
            'seoDescription' => $location->name . ' — Dietz Memorial. ' . $location->address . ', ' . $location->city . ', ' . $location->state . '.',
            'seoImage'       => null,
        ]);
    }
}
