<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proGiverController extends Controller
{    
    public function care_giver_pro_plan(){
        return view('care_giver/pro/pro_care_giver_card');
    }


}


