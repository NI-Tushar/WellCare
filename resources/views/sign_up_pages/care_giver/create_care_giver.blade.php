@include('layouts.navbar')

<link rel="stylesheet" href="{{url('style/css/sign_up_user_cred.css')}}">
<link rel="stylesheet" href="{{url('style/css/logo.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



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

        <div class="form_pass">

                <input type="text" id="number" name="number" placeholder="Mobile: +880 1XXXXXXXXX"><br>
                <div class="repass">
                    <input id="password" type="password" name="pass" placeholder="Password">
                    <span onclick="show_pass()"><i class="fa-solid fa-eye"></i> Show</span>
                </div>
                <input id="repassword" type="password" name="repass" placeholder="Re-Type Password">
                <div id="recaptcha-container"></div>
            </div>
            
            <p>Already have an account? <a href="">Login</a></p>
            
            <div class="next_section">
                <div class="step"><p>Step <span>1</span>/3</p></div>
                <div class="next"><a href="{{url('/user/care-giver/otp/varification')}}"><button class="next_btn">Next</button></a></div>
            </div>
        

    </div>
</section>




<script>
    function show_pass() {

        var pass_field = document.getElementById("password");
        var repass_field = document.getElementById("repassword");

        if (pass_field.type === "password") {
            pass_field.type = "text";
        } else {
            pass_field.type = "password";
        }

        if (repass_field.type === "password") {
            repass_field.type = "text";
        } else {
            repass_field.type = "password";
        }

    }
</script>


