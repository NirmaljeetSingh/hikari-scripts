<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth,Hash;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::guard('admin')->user())
        {
            return redirect()->intended(route('admin.dashboard'));
        }
        return view('admin.login');
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

        // echo "<pre>";
        // print_r($request->all());
        // die();
        // return Admin::create([
        //     'name' => 'Nirmaljeet',
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => 
            $request->password])) {
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withErrors(['error','Error with login !']);
        // return 'eror';
        // Admin
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
        //
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
    public function logout()
    {
        if(Auth::guard('admin')->user())
        {
            Auth::guard('admin')->logout();
            return redirect()->intended(route('admin.login'));
        }
        return redirect()->intended(route('admin.login'));
    }
}
