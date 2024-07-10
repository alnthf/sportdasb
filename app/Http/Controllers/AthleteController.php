<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Team;
use App\Models\Device;
use Illuminate\Support\Facades\Session;
use App\Models\Athlete;
use App\Models\Record;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    /**
     * Display a listing of all athletes.
     */
    public function index()
    {
        // Retrieve team_id from session
        $team_id = Session::get('team_id');

        if (!$team_id) {
            // If team_id is not in session, redirect to login or show an error
            return redirect()->route('welcome')->withErrors(['session' => 'Please log in first']);
        }

        // Fetch the team details from the database
        $team = Team::find($team_id);

        if (!$team) {
            // If team is not found, handle the error
            return redirect()->route('welcome')->withErrors(['team' => 'Team not found']);
        }

        //tampilin sesuai data semua atlete
        // Fetch all devices and their associated athletes
        $device = Device::with('athlete')->get();

         // Return the view with the devices and athletes
        return view('allathletes', compact('device'));

    }

    /**
     * Display a listing of match statistics for athletes.
     */
    public function match()
    {
        // Retrieve team_id from session
        $team_id = Session::get('team_id');

        if (!$team_id) {
            // If team_id is not in session, redirect to login or show an error
            return redirect()->route('welcome')->withErrors(['session' => 'Please log in first']);
        }

        // Fetch the team details from the database
        $team = Team::find($team_id);

        if (!$team) {
            // If team is not found, handle the error
            return redirect()->route('welcome')->withErrors(['team' => 'Team not found']);
        }

        //tampilin sesuai data aktif sama reserve


        //balik ke view
        return view('match');
    }

     /**
     * Show the form for editing the specified resource.
     */
    public function swap(Athlete $athlete)
    {
        // Retrieve team_id from session
        $team_id = Session::get('team_id');

        if (!$team_id) {
            // If team_id is not in session, redirect to login or show an error
            return redirect()->route('welcome')->withErrors(['session' => 'Please log in first']);
        }

        // Fetch the team details from the database
        $team = Team::find($team_id);

        if (!$team) {
            // If team is not found, handle the error
            return redirect()->route('welcome')->withErrors(['team' => 'Team not found']);
        }


        // buat tuker

        // Pass the IDs to the view
        return redirect()->route('match');

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve team_id from session
        $team_id = Session::get('team_id');

        if (!$team_id) {
            // If team_id is not in session, redirect to login or show an error
            return redirect()->route('welcome')->withErrors(['session' => 'Please log in first']);
        }

        // Fetch the team details from the database
        $team = Team::find($team_id);

        if (!$team) {
            // If team is not found, handle the error
            return redirect()->route('welcome')->withErrors(['team' => 'Team not found']);
        }

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
        // Retrieve team_id from session
        $team_id = Session::get('team_id');

        if (!$team_id) {
            // If team_id is not in session, redirect to login or show an error
            return redirect()->route('welcome')->withErrors(['session' => 'Please log in first']);
        }

        // Fetch the team details from the database
        $team = Team::find($team_id);

        if (!$team) {
            // If team is not found, handle the error
            return redirect()->route('welcome')->withErrors(['team' => 'Team not found']);
        }

         //simpen di database


         //balik ke view
          return view('allathletes');
    }

    /**
     * Display an athlete detail
     */
    public function show(Athlete $athlete)
    {
        //session tim
        // Retrieve team_id from session
        $team_id = Session::get('team_id');

        if (!$team_id) {
            // If team_id is not in session, redirect to login or show an error
            return redirect()->route('welcome')->withErrors(['session' => 'Please log in first']);
        }

        // Fetch the team details from the database
        $team = Team::find($team_id);

        if (!$team) {
            // If team is not found, handle the error
            return redirect()->route('welcome')->withErrors(['team' => 'Team not found']);
        }


        //balik ke view
        return view('athletedetails');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function setting(Athlete $athlete)
    {
        // Retrieve team_id from session
        $team_id = Session::get('team_id');

        if (!$team_id) {
            // If team_id is not in session, redirect to login or show an error
            return redirect()->route('welcome')->withErrors(['session' => 'Please log in first']);
        }

        // Fetch the team details from the database
        $team = Team::find($team_id);

        if (!$team) {
            // If team is not found, handle the error
            return redirect()->route('welcome')->withErrors(['team' => 'Team not found']);
        }

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
        //session team
        // Retrieve team_id from session
        $team_id = Session::get('team_id');

        if (!$team_id) {
            // If team_id is not in session, redirect to login or show an error
            return redirect()->route('welcome')->withErrors(['session' => 'Please log in first']);
        }

        // Fetch the team details from the database
        $team = Team::find($team_id);

        if (!$team) {
            // If team is not found, handle the error
            return redirect()->route('welcome')->withErrors(['team' => 'Team not found']);
        }


        //balik ke view detail atlet
        return redirect()->route('athletedetail');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Athlete $athlete)
    {
        // Retrieve team_id from session
        $team_id = Session::get('team_id');

        if (!$team_id) {
            // If team_id is not in session, redirect to login or show an error
            return redirect()->route('welcome')->withErrors(['session' => 'Please log in first']);
        }

        // Fetch the team details from the database
        $team = Team::find($team_id);

        if (!$team) {
            // If team is not found, handle the error
            return redirect()->route('welcome')->withErrors(['team' => 'Team not found']);
        }

        //delete profile
        $athlete->delete();

        //balik ke view utama
        return redirect()->route('all-athlete');
    }
}
