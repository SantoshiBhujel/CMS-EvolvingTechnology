<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients= Client::all();
        return view('admin.client.listClient',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.createClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client= new Client();
        $this->addToClient($client, $request);

        return \redirect()->route('client.index')->with('success','Client Added');
    }

     /**
     * Store/ Update in Property Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function addToClient($client, $request)
    {
        $this->validate($request,[
            'name' =>'required | string', 
            'image' => 'required | image | max:2047 | mimes:jpeg,png,jpg'
        ]);

        $client->name= $request->name;
        $extension= $request->image->getClientOriginalExtension();
        $fileNameToStore=  'blog-'.time().'.'.$extension;
        //$path=$request->image->storeAs('public/client_images',$fileNameToStore);
        $path = public_path().'/storage/client_images';
        $upload = $request->file('image')->move($path,$fileNameToStore);
        $client->image= $fileNameToStore;
    
        $client->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $client= Client::findOrFail($client->id);
        return view('admin.client.editClient',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client= Client::findOrFail($client->id);
        $this->addToClient($client, $request);

        return \redirect()->route('client.index')->with('success','Client Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client= Client::findOrFail($client->id);
        $client->delete();
        return view('client.index')->with('success','Client Deleted');
    }
}
