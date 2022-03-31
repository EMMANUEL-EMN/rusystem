<?php

namespace App\Http\Controllers;

use App\Models\transcript;
use Illuminate\Http\Request;

class transcripts extends Controller
{
    //
    public function applyTranscript(Request $req)
    {
        $transcript = new transcript();
        $transcript->request = $req->requestType;
        $transcript->year = $req->ay;
        $transcript->save();
        return redirect('/students/transcript/application')->with('status', 'successfull applied');
    }
}
