<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function locations()
    {
        $locations = Location::all();

        return view('locations', compact('locations'));
    }
}