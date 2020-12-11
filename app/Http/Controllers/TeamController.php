<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams= Team::all();
        return view('admin.team.listTeam',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.createTeam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $this->validate($request,[
            'image' => 'required | image | max:2047 | mimes:jpeg,png,jpg',
        ]);

        $team= new Team();
        $this->addToTeam($team, $request);

        return \redirect()->route('team.index')->with('success','Member Added');
    }


    /**
     * Store/ Update in BANNER Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function addToTeam($team, $request)
    {
        $team->name= $request->name;
        $team->description=  $request->description;
        $team->faculty = $request->faculty;
        $team->facebook=  $request->facebook;
        $team->google=  $request->google;
        $team->twitter=  $request->twitter;
        $team->linkedin=  $request->linkedin;
        $team->dribble=  $request->dribble;
        $team->instagram=  $request->instagram;

        if($request->file('image'))
        {
            $extension          =   $request->image->getClientOriginalExtension();
            $fileNameToStore    =  'team-'.time().'.'.$extension;
            //$path               =   $request->image->storeAs('public/team_images',$fileNameToStore);
            $path = public_path().'/storage/team_images';
            $upload = $request->file('image')->move($path,$fileNameToStore);
            $team->image        =   $fileNameToStore;
        }
        $team->save();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $team= Team::findOrFail($team->id);
        return view('admin.team.editTeam',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->validate($request,[
            'image' => 'nullable | image | max:2047 | mimes:jpeg,png,jpg',
        ]);
        $team= Team::findOrFail($team->id);
        $this->addToTeam($team, $request);

        return \redirect()->route('team.index')->with('success','Member Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team= Team::findOrFail($team->id);
        $team->delete();

        return \redirect()->route('team.index')->with('success','Member Deleted');
    }
}
