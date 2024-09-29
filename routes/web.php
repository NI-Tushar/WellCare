<?php
use App\Http\Controllers\MyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\careGiverController;
use App\Http\Controllers\careTakerController;
use App\Http\Controllers\proGiverController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/',[MyController::class,'index']);  
Route::get('/contact-us/wellcare',[MyController::class,'contact_page']);

// ____________________________________ Login
Route::get('/user/log-in/',[UsersController::class,'login_up_page']);

// ____________________________________ signup
Route::get('/user/sign-up',[UsersController::class,'sign_up']);
Route::post('/user/user-id/pass/sign-up',[UsersController::class,'create_user_cred']);

// ________________ care giver
Route::get('/user/care-giver/otp/varification',[UsersController::class,'care_giver_otp']);
Route::get('/user/care-giver/location',[UsersController::class,'care_giver_location']);

Route::get('/care-giver/upgrade-plan/pro/',[proGiverController::class,'care_giver_pro_plan']);

// ________________ care taker
Route::get('/user/care-taker/otp/varification',[UsersController::class,'care_taker_otp']);
Route::get('/user/care-taker/location',[UsersController::class,'care_taker_location']);

// ____________________________________ care giver dashboard
Route::get('/dashboard/care-giver',[careGiverController::class,'giver_dashboard']);
Route::get('/giver-profile/care-giver',[careGiverController::class,'giver_profile']);
Route::get('/job-post/care-giver',[careGiverController::class,'giver_post']);

// ____________________________________ care taker dashboard
Route::get('/dashboard/care-taker',[careTakerController::class,'taker_dashboard']);
Route::get('/my-all-post/care-taker/',[careTakerController::class,'taker_all_post']);
Route::get('/taker-profile/care-taker/',[careTakerController::class,'taker_profile']);








// _______________________________ session data
Route::get('all_cart_data',function(Request $req){
    // return view('/products/pro_desc/checkout/checkout')->with($sess_data);
    // print_r(session()->get('1  Custom Gmail Accounts'));
    // echo "<pre>";
    // print_r(session()->get('1000  Gmail Accounts'));
    // print_r(session()->get('100  Gmail Accounts'));
    echo "<pre>";
    print_r(session()->all());
    echo "</pre>";
    // foreach ($all_item as $item){
        // }
        // echo "</pre>";
        // print_r(session()->get());
        // print_r(session()->get('500  Gmail Accounts'));
        // print_r(session()->get('product')[0]);
        
        // foreach(Session::all() as $key => $obj):
        //     if($key!=='_token' && $key!=='_flash' && $key!='_previous'){
        //         echo "<pre>";
        //         echo $key . ": ";
        //         print_r($obj);
        //         echo "<pre>";
        //     }
        // endforeach;

    }); 

    Route::get('packages_user_cart_data',function(Request $req){
        $quantity = request('quantity'); 
        $pro_name = request('pro_name'); 
        $price = request('price'); 

        $item = $quantity.' '.$pro_name;

        session()->put($item , $price);
        return redirect('checkout');
}); 


Route::get('user_cart_data/{qty}/{name}/{price}',function(Request $req,$qty,$name,$price){
    $pro_name = $qty.' '.$name;
    $total_price = $price;
    $req->session()->put($pro_name,$total_price);
    return redirect('checkout');
}); 







Route::get('destroy_user_cart_data/{name}',function($name){
    session()->forget($name);
    return redirect('checkout');
});

Route::get('destroy',function(){
    session()->forget('product name:');
    return redirect('all_cart_data');
}); 
Route::get('flash',function(){
    Session::flush();
    return redirect('all_cart_data');
}); 