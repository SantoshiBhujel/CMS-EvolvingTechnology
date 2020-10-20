<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= User::findOrFail(1);
        return view('admin.profile',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' =>'required | string', 
            'email' => 'required | email | string',
            'about' => 'nullable | string',
            'image' => 'nullable | image | max:2047 | mimes:jpeg,png,jpg',
            'password'  => 'nullable | string | min:8 | confirmed',
        ]);
        $user=User::findOrFail($id);

        $user->name= $request->name;
        $user->email =  $request->email;
        $user->about = $request->about ? $request->about : $user->about;
        if(isset($request->password))
        {
            $user->password= Hash::make($request->password);
        }
        if($request->hasFile('image'))
        {
            $extension= $request->file('image')->extension();
            $fileName='profile-'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/profile_images',$fileName);
            $user->image= $fileName;
        }
        $user->save();
        
        return \redirect()->route('admins.index')->with('success','User Updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
