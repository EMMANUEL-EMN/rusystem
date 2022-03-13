<?php

namespace App\Http\Controllers;

use App\Models\deferment as ModelsDeferment;
use Illuminate\Http\Request;

class deferment extends Controller
{
    //
    public function applyDeferment(Request $req)
    {
        $deferment = new ModelsDeferment();
        $deferment->adm = "ISC/016/2019";
        $deferment->yos = $req->yos;
        $deferment->ay  = $req->ay;
        $deferment->semester = $req->semester;
        $deferment->nature = $req->nature;
        $deferment->period = $req->period;
        $deferment->course_codes = $req->codes;
        $deferment->reason = $req->reason;
        $deferment->save();
        return redirect('/students/deferment/application')->with('status', 'successful applied');
    }
}
