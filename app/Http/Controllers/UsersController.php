<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{    
    public function login_up_page(){
        return view('layouts/login');
    }
    public function sign_up(){
        return view('sign_up_pages/sign_up');
    }


    public function create_user_cred(Request $req){
        $req->validate(
                [
                    'acc_type' => 'required'   
                ]
            );
            if($req['acc_type'] == 'care taker'){
                return view('sign_up_pages/care_taker/create_care_taker');
            }else{
                return view('sign_up_pages/care_giver/create_care_giver');
            }
    }

    //_______________________________________________ Care Giver 
    public function care_giver_otp(){
        return view('sign_up_pages/care_giver/care_giver_otp');
    }

    public function care_giver_location(){
        return view('sign_up_pages/care_giver/care_giver_location');
    }


    //_______________________________________________ Care Taker 
    public function care_taker_otp(){
        return view('sign_up_pages/care_taker/care_taker_otp');
    }

    public function care_taker_location(){
        return view('sign_up_pages/care_taker/care_taker_location');
    }
}



