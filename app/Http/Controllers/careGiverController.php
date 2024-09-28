<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class careGiverController extends Controller
{    
    public function giver_dashboard(){
        return view('care_giver/giver_dashboard');
    }
    public function giver_profile(){
        return view('care_giver/giver_account/giver_account');
    }
    public function giver_post(){
        return view('care_giver/giver_pages/giver_job_list');
    }

    
    // public function create_user_cred(Request $req){
    //     $req->validate(
    //             [
    //             'acc_type' => 'required',   
    //             ]
    //         );
    //         if($req['acc_type'] == 'care taker'){
    //             return view('sign_up_pages/care_taker/create_care_taker');
    //         }else{
    //             return view('sign_up_pages/care_giver/create_care_giver');
    //         }
    // }

    // public function care_giver_otp(){
    //     return view('sign_up_pages/care_giver/care_giver_otp');
    // }
    // public function care_giver_location(){
    //     return view('sign_up_pages/care_giver/care_giver_location');
    // }

}



