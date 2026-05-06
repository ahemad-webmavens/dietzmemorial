<?php
namespace App\Http\Controllers;

use App\Mail\ContactSubmissionMail;
use App\Models\ContactSubmission;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $locations = Location::where('is_active', true)->get();

        return view('contact.index', compact('locations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'location_id' => ['required', 'exists:locations,id'],
            'name'        => ['required'],
            'email'       => ['nullable', 'email'],
            'phone'       => ['nullable'],
            'message'     => ['required'],
        ]);

        $submission = ContactSubmission::create($validated);

        $location = Location::findOrFail($validated['location_id']);

        if ($location->email) {
            Mail::to($location->email)
                ->send(new ContactSubmissionMail($submission));
        }

        return back()->with('success', 'Message submitted successfully.');
    }
}
