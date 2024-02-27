<?php

namespace App\Http\Controllers;

use App\Models\TripRequests;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TripRequestsController extends Controller
{public function store(Request $request)
{
    // Create and store a new TripRequests instance with the data
    $tripRequest = TripRequests::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'pickup_location' => $request->input('pickup_location'),
        'dropoff_location' => $request->input('dropoff_location'),
        'pickup_date' => date('Y-m-d', strtotime($request->input('pickup_date'))),
        'dropoff_date' => date('Y-m-d', strtotime($request->input('dropoff_date'))),
        'pickup_time' => date('H:i:s', strtotime($request->input('pickup_time'))), // Adjust time format
    ]);

    // Define the JavaScript script for displaying the popup

    return redirect()->route('home')->with([
        'success' => 'Trip request created successfully',
        'toast' => true, // add a toast flag
    ]);
}


    }


