@include('layouts.navbar')

<link rel="stylesheet" href="{{url('style/css/sign_up_user_cred.css')}}">
<link rel="stylesheet" href="{{url('style/css/logo.css')}}">
<link rel="stylesheet" href="{{url('style/css/otp.css')}}">

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

        <div class="option_div">
            <h3>Create an account</h3>


            <div class="option_card">
                <div class="blank-1"></div>
                <div class="cards">

                    
                    <div class="card child">
                        <input type="radio" name="care_type" id="">
                        <div class="card_body">
                            <div class="opt_img">
                                <img src="{{url('resource/images/sign_up/o1.png')}}" alt="">
                            </div>
                            <p>Child Care</p>    
                        </div>
                    </div>
                
                

                    <div class="card patient">
                        <input type="radio" name="care_type" id="">
                        <div class="card_body">
                            <div class="opt_img">
                                <img src="{{url('resource/images/sign_up/o2.png')}}" alt="">
                            </div>
                            <p>Patient Care</p>
                        </div>
                    </div>
                
                

                    <div class="card special_baby">
                        <input type="radio" name="care_type" id="">
                        <div class="card_body">
                            <div class="opt_img">
                                <img src="{{url('resource/images/sign_up/o3.png')}}" alt="">
                            </div>
                            <p style="font-size: 13.5px;">Special Baby Care</p>
                        </div>
                    </div>
                

                    <div class="card house">
                        <input type="radio" name="care_type" id="">
                        <div class="card_body">
                            <div class="opt_img">
                                <img src="{{url('resource/images/sign_up/o4.png')}}" alt="">
                            </div>
                            <p>House Care</p>
                        </div>
                    </div>
                
                

                    <div class="card senior">
                        <input type="radio" name="care_type" id="">
                        <div class="card_body">
                            <div class="opt_img">
                                <img src="{{url('resource/images/sign_up/o5.png')}}" alt="">
                            </div>
                            <p>Senior Care</p>
                        </div>
                    </div>
                
                

                    <div class="card autism">
                        <input type="radio" name="care_type" id="">
                        <div class="card_body">
                            <div class="opt_img">
                                <img src="{{url('resource/images/sign_up/o6.png')}}" alt="">
                            </div>
                            <p>Autism Care</p>
                        </div>
                    </div>
                
                    </div>
                <div class="blank-2"></div>
            </div>

            
            <!-- ________________________________________ OTP BOX -->
             <div class="taker_otp">
                 <div class="otp_section">
                    <h4>Enter OTP</h4>
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
            </div>
            <!-- ________________________________________ -->

                    
                <div class="next_section">
                    <div class="step">
                        <p>Step <span>1</span>/3</p>
                    </div>
                    <div class="next">
                        <a class="next_btn2" href="{{url('/user/care-taker/location')}}"><button>Next</button></a>
                    </div>
                </div>
                

        </div>

    </div>
</section>




