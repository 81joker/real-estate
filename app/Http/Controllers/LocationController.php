<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Venue;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index($slug)
    {
        $location = Location::where('slug', $slug)->firstOrFail();

        $venues = Venue::with('event_types')
            ->where('location_id', $location->id)
            ->latest()
            ->paginate(9);
        // dd($location);


        return view('q2e.location', compact('venues', 'location'));
    }
}
