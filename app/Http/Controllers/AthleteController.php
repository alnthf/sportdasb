<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    /**
     * Display a listing of all athletes.
     */
    public function index()
    {
        //tampilin sesuai data semua atlete
        //$athlete = Athlete::all();

        //balik ke view
        return view('allathletes');
        //tambahin ini habis allathletes = , compact('athlete')
    }

    /**
     * Display a listing of match statistics for athletes.
     */
    public function match()
    {
        //tampilin sesuai data aktif sama reserve


        //balik ke view
        return view('match');
    }

     /**
     * Show the form for editing the specified resource.
     */
    public function swap(Athlete $athlete)
    {
        // buat tuker

        // Pass the IDs to the view
        return redirect()->route('match');

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch device IDs from the database
        $device = Device::pluck('device_id');

        // Pass the device IDs to the view
        return view('addathlete', compact('device'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //simpen di database


         //balik ke view
          return view('allathletes');
    }

    /**
     * Display an athlete detail
     */
    public function show(Athlete $athlete)
    {
        //

        //balik ke view
        return view('athletedetails');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function setting(Athlete $athlete)
    {
        // Fetch device IDs from the database
        $device = Device::pluck('device_id');

        // Pass the device IDs to the view
        return view('athletesetting', compact('device'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Athlete $athlete)
    {
        //

        //balik ke view detail atlet
        return redirect()->route('athletedetail');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Athlete $athlete)
    {
        //delete profile
        $athlete->delete();

        //balik ke view utama
        return redirect()->route('all-athlete');
    }
}
