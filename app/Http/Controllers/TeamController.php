<?php

namespace App\Http\Controllers;

use App\Models\Team;
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
        //Verif sign in
     $request->validate([
    'team_name' => 'required|string',
    'team_password' => 'required|string',
    ]);

    // Attempt to authenticate the team
    $credentials = $request->only('team_name', 'team_password');

    if (Auth::attempt($credentials)) {
        // Ke main dashboard
        return redirect()->route('home');
    }
        // Authentication failed
        return redirect()->back()->withInput()->withErrors(['Invalid credentials.']);

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
        //munculin nama sama logo tim
        $team = Auth::user();

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
        //update pake post id

        //balik ke view
        return redirect()->route('home');
    }

}
