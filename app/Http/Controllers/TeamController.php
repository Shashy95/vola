<?php

namespace App\Http\Controllers;

use App\Helpers\UploadHelper;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teams = Team::latest()->get();
        return view('admin.pages.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pages.teams.form',['team' => new Team()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

  
        $data=$request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = UploadHelper::uploadPublicFile($request->file('photo'), 'teams');
        }

        Team::create($data);

        return redirect()->route('teams.index')->with('success', 'Team member added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
        return view('admin.pages.teams.form', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $data=$request->all();
        
        if ($request->hasFile('photo')) {
            if ($team->photo && file_exists(public_path($team->photo))) {
                unlink(public_path($team->photo));
            }
            $data['photo'] =  UploadHelper::uploadPublicFile($request->file('photo'), 'teams');
        }

        $team->update($data);

        return redirect()->route('teams.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
        if ($team->photo && file_exists(public_path($team->photo))) {
            unlink(public_path($team->photo));
        }

        $team->delete();
    return redirect()->route('teams.index')->with('success', 'Team member deleted.');
    }
}
