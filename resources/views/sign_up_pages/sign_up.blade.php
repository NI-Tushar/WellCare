@include('layouts.navbar')

<link rel="stylesheet" href="{{url('style/css/sign_up.css')}}">
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

        <div class="option_div">
            <h3>Create an account</h3>
            <p>Select your user type</p>
    
<div class="option_form">
        
    <form action="{{url('/')}}/user/user-id/pass/sign-up" method="POST">
        @csrf

        <div class="option">

                <div class="radio_part">
                    <input onclick="option_func()" type="radio" id="acc_type" name="acc_type" value="care giver">
                    <img src="{{url('resource/images/sign_up/opt1.png')}}" alt="">
                    <label for="html">Care Giver</label>
                </div>

                <div class="radio_part">
                    <input onclick="option_func()" type="radio" id="acc_type" name="acc_type" value="care taker">
                    <img src="{{url('resource/images/sign_up/opt2.png')}}" alt="">
                    <label for="css">Care Taker</label>
                </div>
                
            </div>
            
            <div class="submit_btn">
                <input id="next_btn" class="disable" type="submit" value="Next">
            </div>
        </form>
        </div>
    </div>

    </div>

    
    <script>
        function option_func(){
            const next_btn = document.querySelector('#next_btn');
            next_btn.classList.remove("disable");
        }
    </script>

</section>