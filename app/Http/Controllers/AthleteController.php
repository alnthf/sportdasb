<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Athlete;
use App\Models\Team;
use App\Models\Device;
use App\Models\Record;
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
        // Retrieve active athletes for the team
        $activeAthlete = Athlete::where('team_id', $team_id)
        ->where('is_active', 1)
        ->with('device')
        ->get();

        // Retrieve inactive athletes for the team
        $inactiveAthlete = Athlete::where('team_id', $team_id)
        ->where('is_active', 0)
        ->with('device')
        ->get();

        //balik ke view
        return view('match',compact('activeAthlete', 'inactiveAthlete'));
    }

     /**
     * Show the form for editing the specified resource.
     */
    public function swap(Request $request)
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
        $inathleteId = $request->input('inathlete_id');
        $acathleteId = $request->input('acathlete_id');

        // Find both athletes
        $inathlete = Athlete::find($inathleteId);
        $acathlete = Athlete::find($acathleteId);

        if ($inathlete && $acathlete) {

         // Swap their is_active statuses
        $inathlete->is_active = 1;
        $acathlete->is_active = 0;

        // Save the changes
        $inathlete->save();
        $acathlete->save();

        }

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
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'age' => 'nullable|integer',
        'gender' => 'required|string|in:L,P',
        'height' => 'required|integer',
        'weight' => 'required|integer',
        'sport_name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'jersey_no' => 'required|integer',
        'is_active' => 'required|string|in:0,1',
        'atlete_pic' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'device_id' => 'required|integer',
        ]);

        $atletePicPath = null;
        if ($request->hasFile('atlete_pic')) {
        $atletePicPath = $request->file('atlete_pic')->store('atlete_pic', 'public');
        }

        // Create the athlete
        $athlete = Athlete::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
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

         // Update the device record with the athlete_id
        DB::table('device')
        ->where('device_id', $request->device_id)
        ->update(['athlete_id' => $athlete->athlete_id]);

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

        $record = DB::table('recordhr')
         ->where('device_id', $athlete->device->device_id)
         ->select('rrdata', 'time')
         ->get();


        $heartRates = $record
        ->pluck('rrdata')
        ->toArray();

        $originalTimes = $record
        ->pluck('time')
        ->toArray();

// Function to round timestamps and filter them based on your requirements
function mapToIntervals($originalTimes, $interval = 60) {
    return array_values(array_unique(array_map(function($time) use ($interval) {
        return round($time / $interval) * $interval;
    }, $originalTimes)));
}

// Get timestamps rounded to nearest 10
$timeStamp = mapToIntervals($originalTimes, 30);

        //balik ke view
        return view('athletedetails', compact('athlete', 'heartRates','timeStamp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function setting($athlete_id)
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

        // mengambil data athlete berdasarkan id yang dipilih
        $athlete = Athlete::with('device')->findOrFail($athlete_id);

        // Retrieve distinct gender and is_active values from the athlete table
        $genderOptions = DB::table('athlete')->distinct()->pluck('gender');
        $isActiveOptions = DB::table('athlete')->distinct()->pluck('is_active');


        // Pass the device IDs to the view
        return view('athletesetting', compact('athlete','genderOptions', 'isActiveOptions'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $athlete_id)
    {

        // Debugging
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

        // mengambil data athlete berdasarkan id yang dipilih
        $athlete = Athlete::with('device')->findOrFail($athlete_id);

     // Validate the request data
     $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
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


           // Update athlete details
           $athlete->first_name = $validatedData['first_name'] ?? $athlete->first_name;
           $athlete->last_name = $validatedData['last_name'] ?? $athlete->last_name;
           $athlete->age = $validatedData['age'] ??  $athlete->age;
           $athlete->gender = $validatedData['gender'] ??  $athlete->gender;
           $athlete->height = $validatedData['height'] ??  $athlete->height;
           $athlete->weight = $validatedData['weight'] ?? $athlete->weight;
           $athlete->sport_name = $validatedData['sport_name'] ??  $athlete->sport_name;
           $athlete->position = $validatedData['position'] ??$athlete->position;
           $athlete->jersey_no = $validatedData['jersey_no'] ??  $athlete->jersey_no;
           $athlete->is_active = $validatedData['is_active'] ??  $athlete->is_active;
           $athlete->team_id = $team_id;

        // Handle file upload if exists
        if ($request->hasFile('atlete_pic')) {
        $atletePicPath = $request->file('atlete_pic')->store('atlete_pic', 'public');
        $athlete->atlete_pic = $atletePicPath;
        }

         // Save the updated team
        $athlete->save();

        //balik ke view detail atlet
        return redirect()->route('athletedetail', ['athlete_id' => $athlete->athlete_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($athlete_id)
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

        // mengambil data athlete berdasarkan id yang dipilih
        $athlete = Athlete::with('device')->findOrFail($athlete_id);

         // Set the athlete_id in the device table to null before deleting the athlete
         DB::table('device')->where('athlete_id', $athlete_id)->update(['athlete_id' => null]);

        // Now you can delete the athlete
        Athlete::destroy($athlete_id);


        //balik ke view utama
        return redirect()->route('all-athlete');
    }
}
