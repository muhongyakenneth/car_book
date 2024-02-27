<?php

namespace App\Http\Controllers;

use App\Models\TripRequests;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        // Retrieve all trip requests from the database
        $tripRequests = TripRequests::all();

        // Pass the data to the view
        return view('orders', compact('tripRequests'));
    }

}
