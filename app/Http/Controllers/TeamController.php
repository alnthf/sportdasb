<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Team;
use App\Models\Athlete;
use App\Models\Device;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Used for signing in
     */
    public function login()
    {
        return view('signin');
    }

        /**
     * Used for signing in
     */
    public function verified(Request $request)
    {
        // Validate the sign-in input
    $request->validate([
        'team_name' => 'required|string',
        'team_password' => 'required|string',
    ]);

    // Retrieve credentials
    $credentials = $request->only('team_name', 'team_password');
    $team = Team::where('team_name', $credentials['team_name'])->first();

     // Check if team exists and if the password matches
     if ($team && $credentials['team_password'] == $team->team_password) {
        // Store the team info in the session
        Session::put('team_id', $team->team_id);
        Session::put('team_name', $team->team_name);

        // Redirect to the main dashboard
        return redirect()->route('home');
    }

    // Authentication failed
    return redirect()->back()->withInput()->withErrors(['Invalid credentials.']);

    }

    /**
     * Show the form for creating a new team.
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Store a newly created team in storage.
     */
    public function store(Request $request)
    {
        //Proses storing data
        $request->validate([
            'team_name' => 'required|string|max:255',
            'team_password' => 'required|string|min:6',
            'team_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $teamLogoPath = null;

        if ($request->hasFile('team_logo')) {
            $teamLogoPath = $request->file('team_logo')->store('team_logo', 'public');
        }

        Team::create([
            'team_name' => $request->team_name,
            'team_password' => $request->team_password,
            'team_logo' => $teamLogoPath,
        ]);

        //balik ke view
        return redirect()->route('sign-up.success');
    }

     /**
     * Show the form for creating a new resource.
     */
    public function success()
    {
        return view('signupsuccess');
    }

    /**
     * Display a team's home.
     */
    public function home(Team $team)
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

          // Retrieve active athletes for the team
        $activeAthlete = Athlete::where('team_id', $team_id)
        ->where('is_active', 1)
        ->with('device')
        ->get();

        // Return the view with the team details
         return view('main', compact('team','activeAthlete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function setting()
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

          // Balik ke view
          return view('teamsetting', compact('team'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //update pake post id
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

       //Proses storing data
       $validatedData = $request->validate([
           'team_name' => 'nullable|string|max:255',
           'team_password' => 'nullable|string|min:6',
           'team_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
       ]);

       // Update team data
        $team->team_name = $validatedData['team_name'] ?? $team->team_name;

        if (!empty($validatedData['team_password'])) {
            $team->team_password = $validatedData['team_password'];
          }

        if ($request->hasFile('team_logo')) {
            $teamLogoPath = $request->file('team_logo')->store('team_logo', 'public');
            $team->team_logo = $teamLogoPath;
        }

        // Save the updated team
        $team->save();

       //balik ke view
       return redirect()->route('home');
    }

    public function logout()
{
    Session::forget('team_id');

    // Redirect to the login page or wherever appropriate
    return redirect()->route('welcome');
}

}
