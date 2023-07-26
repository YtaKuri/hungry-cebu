<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //
    public function index()
    {
        // Get the current date
        $date = Carbon::now();

        // Get the first and last day of the month
        $startOfMonth = Carbon::parse($date)->startOfMonth();
        $endOfMonth = Carbon::parse($date)->endOfMonth();

        // Generate an array of dates from the start to the end of the month
        $dates = [];
        for ($date = $startOfMonth; $date->lte($endOfMonth); $date->addDay()) {
            $dates[] = $date->copy();
        }

        return view('calendar', ['dates' => $dates]);
    }
}
