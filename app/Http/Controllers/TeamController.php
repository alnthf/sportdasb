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
        //Proses storing data

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
        //update pake post id

        //balik ke view
        return redirect()->route('home');
    }

}
