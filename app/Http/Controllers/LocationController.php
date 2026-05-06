<?php
namespace App\Http\Controllers;

use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::where('is_active', true)->get();

        return view('locations.index', compact('locations'));
    }

    public function show($slug)
    {
        $location = Location::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('locations.show', compact('location'));
    }
}
