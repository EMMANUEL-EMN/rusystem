<?php

namespace App\Http\Controllers;

use App\Models\transcript as ModelsTranscript;
use Illuminate\Http\Request;

class transcript extends Controller
{
    //
    public function applyTranscript(Request $req)
    {
        $apply = new ModelsTranscript();
        $apply->request = $req->request;
        $apply->year = $req->ay;
        $apply->save();
        return redirect('/students/transcript/application')->with('status','successfull applied');
    }
}
