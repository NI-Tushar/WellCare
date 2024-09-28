<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class careTakerController extends Controller
{    
    public function taker_dashboard(){
        return view('care_taker/taker_dashboard');
    }
    public function taker_all_post(){
        return view('care_taker/taker_pages/taker_all_post');
    }
    public function taker_profile(){
        return view('care_taker/taker_account/taker_account');
    }

}



