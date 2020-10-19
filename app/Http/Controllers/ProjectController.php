<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects= Project::all();
        return view('admin.projects.projectList',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.createProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required | string', 
            'description' =>'required | string',
            'progress' => 'required | string',
            'status' => 'required | string',
            'image' => 'required | image | max:2047 | mimes:jpeg,png,jpg',
            'url' => 'nullable | string',
        ]);

        $project= new Project();
        $this->addToProject($project, $request);

        return \redirect()->route('project.index')->with('success','Project Added');
    }

    /**
     * Store/ Update in BANNER Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function addToProject($project, $request)
    {

        $project->title= $request->title;
        $project->description=  $request->description;
        $project->progress=  $request->progress;
        $project->status=  $request->status;
        $project->url = $request->url;

        if($request->file('image'))
        {
            $extension          =   $request->image->getClientOriginalExtension();
            $fileNameToStore    =  'project-'.time().'.'.$extension;
            $path               =   $request->image->storeAs('public/project_images',$fileNameToStore);
            $project->image      =   $fileNameToStore;
        }
        $project->save();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $project= Project::findOrFail($project->id);
        return view('admin.projects.editProject',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $this->validate($request,[
            'title' =>'required | string', 
            'description' =>'required | string',
            'progress' => 'required | string',
            'status' => 'required | string',
            'image' => 'sometimes | image | max:2047 | mimes:jpeg,png,jpg',
            'url' => 'nullable | string',
        ]);

        $project= Project::findOrFail($project->id);
        $this->addToProject($project, $request);

        return \redirect()->route('project.index')->with('success','Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project= Project::findOrFail($project->id);
        $project->delete();
        return \redirect()->route('projects.index')->with('success','Project Removed');
    }
}
