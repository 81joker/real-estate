<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use App\Models\Venue;

use Illuminate\Http\Request;

class EventTypeController extends Controller
{
    public function index($slug)
    {
        $eventType = EventType::where('slug', $slug)->firstOrFail();

        $venues = Venue::with('event_types')
            ->whereHas('event_types', function ($q) use ($slug) {
                $q->where('event_types.slug', $slug);
            })
            ->latest()
            ->paginate(3);
        // dd($venues);


        return view('q2e.event_type', compact('venues', 'eventType'));
    }
}
