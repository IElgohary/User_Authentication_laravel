<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use App\User as U;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $user = U::findOrFail(Auth::user()->id);
        return view('edit_info',compact('user'));
    }

    public function store()
    {
        $data = Request::all();
        $user = U::findOrFail(Auth::user()->id);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password= bcrypt($data['password']);
        $user->save();

        return $this->edit();
    }
}
