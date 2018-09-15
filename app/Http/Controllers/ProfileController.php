<?php

namespace App\Http\Controllers;

use Image;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return View::make('profiles.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }

    /**
     * Update logged in user's profile.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function updateUserProfile(Request $request)
    {
        // Get user and store it 
        $user = Auth::user();

        // Handle Avatar upload
        // dd($request->files);
        if ($request->file('avatar')) {
            // dd('has file');
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
            $user->avatar = $filename;
            $user->save();
        }

        // Change user's name
        if ($request->name) {
            $user->name = $request->name;
        }

        // Change user's image
        if ($request->email) {
            $user->email = $request->email;
        }

        if ($request->about_me || $request->notes || $request->location) {
            if (isset($user->profile)) {
                $profile = $user->profile;
            } else {
                $profile = new Profile;
            }
            $profile->about_me = $request->about_me;
            $profile->notes = $request->notes;
            $profile->location = $request->location;
            $profile->user_id = $user->id;
            $profile->save();
        }

        return view('profiles.show')->with('user',$user);
    }

    /**
     * Display the logged in user's profile.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function showUserProfile()
    {
        //
        $user = Auth::user();
        return view('profiles.show')->with('user',$user);
    }
}
