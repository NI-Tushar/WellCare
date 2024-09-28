@include('layouts.navbar')

<link rel="stylesheet" href="{{url('style/css/sign_up_user_cred.css')}}">
<link rel="stylesheet" href="{{url('style/css/otp.css')}}">
<link rel="stylesheet" href="{{url('style/css/logo.css')}}">

<section class="sign_up_opt_section">
    <div class="centered_option">

        <div class="logo_section">
            <div class="logo">
                <img src="{{url('resource/images/logo.png')}}" alt="">
                <div class="logo_text">
                    <h1>Well<span>Care</span></h1>
                    <p>Care at Your Doorstep</p>
                </div>
            </div>
        </div>

            <h3 style="padding-top:30px;padding-bottom:30px;">Create an account</h3>


            <div class="otp_section">
                <h4>Enter OTP</h4>
                <form action="">
                <div class="otp-input">
                    <input type="number" min="0" max="1" >
                    <input type="number" min="0" max="1" >
                    <input type="number" min="0" max="1" >
                    <input type="number" min="0" max="1" >
                </div>
                <div class="otp_text">
                    <p>You have <span class="time">0:39</span> Sec Only to put OTP number.</p>
                    <p>You will get a otp via your phone number. 
                    <span>01731049538</span> <a href="">Change</a></p>
                </div>
            </div>
            
        </form>
            
            <div class="next_section">
                <div class="step"><p>Step <span>1</span>/3</p></div>
                <div class="next"><a href="{{url('/user/care-giver/location')}}"><button>Next</button></a></div>
            </div>
            
        </div>

    </div>
</section>