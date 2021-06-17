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
        $featuredVenues = [
            [
                'hero_img' => 'images/hero_bg_1.jpg',
                'name' => '853 S Lucerne Blvd',
                'address' => ' Hermann-Bahr-Straße 4',
                'price' => '2,250,500',
                'link' => '#'
            ],
            [
                'hero_img' => 'images/hero_bg_3.jpg',
                'name' => '607 uberÖstrrich, CA 90005',
                'address' => 'Untersee 44',
                'price' => '2,250,500',
                'link' => '#'
            ],
        ];
        $eventTypes = EventType::all();
        $locations = Location::all();
        $newsetVenues  = Venue::latest()->take(6)->get();

        return view('q2e.index', compact('featuredVenues', 'eventTypes', 'locations', 'newsetVenues'));
    }
}
