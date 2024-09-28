<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function index(){
        return view('home');
    }

    public function contact_page(){
        return view('layouts/contact');
    }



    // public function checkout(){
    //     return view('products/pro_desc/checkout/checkout');
    // }
    public function check(Request $req){
        $total_price = $req->input('total_price');
        echo "<pre>";
        print_r($total_price); 
        echo "<pre>";
        // return view('products/pro_desc/checkout/checkout');
    }
    
    
    
    


    
    // __________________________________ product desc
    // public function buy_gmail_account(){
    //     $data = compact('name','price');
    //     return view('/products/pro_desc/buy_gmail_account')->with($data);
    // }

    
}
