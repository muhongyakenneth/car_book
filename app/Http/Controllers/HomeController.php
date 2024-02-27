<?php

namespace App\Http\Controllers;

use App\Models\TripRequests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pickup_location' => 'required|string|max:255',
            'dropoff_location' => 'required|string|max:255',
            'pickup_date' => 'required|date',
            'dropoff_date' => 'required|date',
            'pickup_time' => 'required|date_format:H:i',
        ]);

        $tripRequest = new TripRequests();
        $tripRequest->name = $validatedData['name'];
        $tripRequest->email = $validatedData['email'];
        $tripRequest->pickup_location = $validatedData['pickup_location'];
        $tripRequest->dropoff_location = $validatedData['dropoff_location'];
        $tripRequest->pickup_date = $validatedData['pickup_date'];
        $tripRequest->dropoff_date = $validatedData['dropoff_date'];
        $tripRequest->pickup_time = $validatedData['pickup_time'];
        $tripRequest->save();

        return redirect()->route('trip_request.store')->with([
            'success' => 'Trip request created successfully',
            'toast' => true, // add a toast flag
        ]);
    }


}
