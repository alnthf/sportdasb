<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

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
    public function verified()
    {
        //Verif sign in


        //balik ke view
        return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the incoming request data
         $validated = $request->validate([
            'team_id' => 'nullable|integer|exists:teams,id',
            'team_name' => 'required|string|max:255',
            'password' => 'required|string|min:1',
            'team_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Find the team by ID or create a new one
        $team = $validated['team_id'] ? Team::find($validated['team_id']) : new Team();
        $team->team_name = $validated['team_name'];
        $team->password = bcrypt($validated['password']);

        // Handle the file upload
        if ($request->hasFile('team_logo')) {
            $file = $request->file('team_logo');
            $path = $file->store('team_logos', 'public');
            $team->team_logo = $path;
        }

        $team->save();

        //balik ke view
        return view('signupsuccess');
    }

    /**
     * Display a team's home.
     */
    public function home(Team $team)
    {
        //munculin nama sama logo tim


        //balik ke view
        return view('main', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function setting(Team $team)
    {
        //balik ke view
        return view('teamsetting');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
         // Validate the incoming request data
         $validated = $request->validate([
            'team_id' => 'nullable|integer|exists:teams,id',
            'team_name' => 'required|string|max:255',
            'password' => 'required|string|min:1',
            'team_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Find the team by ID (assuming team ID is passed as a hidden field in the form)
        $team = Team::find($request->input('team_id'));

        // Update the team with new values
        if ($team) {
            $team->team_name = $validated['team_name'];
            $team->password = bcrypt($validated['password']);

            // If a team logo is uploaded, handle the file upload
            if ($request->hasFile('team_logo')) {
                $file = $request->file('team_logo');
                $path = $file->store('team_logos', 'public');
                $team->team_logo = $path;
            }

            $team->save();
        }

        //balik ke view
        return redirect()->route('home');
    }

}
