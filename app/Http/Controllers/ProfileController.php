<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfileController extends Controller
{
    //
    public function index(Request $request)
    {
        $profiles = Profile::all()->first();
        
        return view('profile.index',compact('profiles'));
    }
}
