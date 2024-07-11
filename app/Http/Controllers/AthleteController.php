<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Athlete;
use App\Models\Team;
use App\Models\Device;
use Illuminate\Support\Facades\Session;
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
    public function create($device_id)
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

        //tampilin sesuai data device
        // mengambil data device berdasarkan id yang dipilih
	    $device = DB::table('device')->where('device_id',$device_id)->first();

         // Retrieve distinct gender and is_active values from the athlete table
        $genderOptions = DB::table('athlete')->distinct()->pluck('gender');
        $isActiveOptions = DB::table('athlete')->distinct()->pluck('is_active');

        // Pass the device IDs to the view
        return view('addathlete', compact('device','genderOptions', 'isActiveOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

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
         $request->validate([
        'athlete_name' => 'required|string|max:255',
        'age' => 'nullable|integer',
        'gender' => 'required|string|in:L,P',
        'height' => 'required|integer',
        'weight' => 'required|integer',
        'sport_name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'jersey_no' => 'required|integer',
        'is_active' => 'required|string|in:0,1',
        'atlete_pic' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $atletePicPath = null;
        if ($request->hasFile('atlete_pic')) {
        $atletePicPath = $request->file('atlete_pic')->store('atlete_pic', 'public');
        }

        // Create the athlete
        Athlete::create([
            'athlete_name' => $request->athlete_name,
            'age' => $request->age,
            'gender' => $request->gender,
            'height' => $request->height,
            'weight' => $request->weight,
            'sport_name' => $request->sport_name,
            'position' => $request->position,
            'jersey_no' => $request->jersey_no,
            'is_active' => $request->is_active,
            'atlete_pic' => $atletePicPath,
            'team_id' => $team_id,
        ]);

        // Redirect to the all athletes view
        return redirect()->route('all-athlete');
    }

    /**
     * Display an athlete detail
     */
    public function show($athlete_id)
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

         // mengambil data athlete berdasarkan id yang dipilih
         $athlete = Athlete::with('device')->findOrFail($athlete_id);

        //balik ke view
        return view('athletedetails', compact('athlete'));
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
