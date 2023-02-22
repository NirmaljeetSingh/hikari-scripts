<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.profile');
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
        $user = auth()->user();
        $update['name'] = $request->name;
        $update['surname'] = $request->surname;
        if($request->password)
        {
            $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'current_password' => 'required',
            ]);
            if (!Hash::check($request->current_password, $hashedPassword)) {
                unset($request->current_password);
                $request->validate(['current_password' => 'required'],['current_password.required' => 'Current Password incorrect.']); 
            }
            $update['password'] = Hash::make($request->password);
        }
        $profile['bio'] = $request->bio;
        if($request->file('cover_image'))
        {
            $request->validate(['cover_image' => ['required','mimes:png,jpeg,jpg']],['cover_image.mimes' => 'Only image can be upload']); 
            $profile['cover_image'] = upload($request->file('cover_image'));
        }
        if($request->file('image'))
        {
            $request->validate(['image' => ['required','mimes:png,jpeg,jpg']],['image.mimes' => 'Only image can be upload']);
            $profile['image'] = upload($request->file('image'));
        }
        $user->update($update);
        
        $user->profile->update($profile);
        return redirect()->route('profile.edit',['profile' => auth()->user()->id,'tab' => 'profile-setting'])->with('success','Profile updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages.user.profile-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // echo "<pre>";
        // print_r($request->all());
        // print_r(auth()->user()->profile);
        // die();
        auth()->user()->profile->update($request->all());
        return redirect()->route('profile.edit',['profile' => auth()->user()->id,'tab' => 'socialmedia-setting'])->with('success','Social media links updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
