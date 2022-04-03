<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userAuth extends Controller
{
    //
    public function login(Request $req)
    {
        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/students/deferment/application');
        } else {
            return redirect('/')->with('status', 'invalid login credentials');
        }
    }
}
