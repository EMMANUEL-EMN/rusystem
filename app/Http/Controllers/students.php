<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class students extends Controller
{
    //
    public function deferment()
    {
        return view('students.deferment.index');
    }
    public function transcript()
    {
        return view('students.transcript.transcript');
    }
}
