<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventType;
use App\Models\Location;
use App\Models\Venue;

class frontHomeController extends Controller
{
    public function index()
    {
        // $featuredVenuesImgs = [
        //     [
        //         'hero_img' => 'images/hero_bg_1.jpg',

        //     ],
        //     [
        //         'hero_img' => 'images/hero_bg_3.jpg',

        //     ],
        // ];

        $featuredVenues = Venue::where('is_featured', 1)->get();

        $eventTypes = EventType::all();
        $locations = Location::all();
        $newsetVenues  = Venue::with('event_types')->latest()->take(3)->get();
        // $newestVenues = Venue::with('event_types')->latest()->take(3)->get();


        return view('q2e.index', compact('featuredVenues', 'eventTypes', 'locations', 'newsetVenues'));
    }


    public function show(Request $request)
    {
    }
}
