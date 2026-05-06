<?php
namespace App\Http\Controllers;

use App\Models\GraniteColor;

class GraniteColorController extends Controller
{
    public function index()
    {
        $colors = GraniteColor::where('is_active', true)->get();

        return view('granite-colors.index', compact('colors'));
    }
}
