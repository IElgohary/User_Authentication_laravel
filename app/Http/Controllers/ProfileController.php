<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\User;
use Request;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $profile = User::findOrFail(Auth::user()->id)->profile;

        return view('profile.profile', compact('profile'));
    }

    public function edit()
    {
        $profile = User::findOrFail(Auth::user()->id)->profile;
        return view('profile.edit_profile', compact('profile'));
    }

    public function store()
    {
        $data = Request::all();
        $profile = User::find(Auth::user()->id)->profile;

        $profile->first_name = $data['first_name'];
        $profile->last_name = $data['last_name'];
        $profile->phone = $data['phone'];
        $profile->city = $data['city'];
        $profile->facebook_url = $data['facebook_url'];
        $profile->twitter_url = $data['twitter_url'];
        $profile->save();

        return view('profile.profile',compact('profile'));
    }




}