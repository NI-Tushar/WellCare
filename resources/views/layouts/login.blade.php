@include('layouts.navbar')

<link rel="stylesheet" href="{{url('style/css/login.css')}}">
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

        <h3 style="padding-top:30px;">Login</h3>

            <div class="form_pass">
                <input type="text" id="number" name="number" placeholder="Mobile"><br>
                <div class="repass">
                    <input id="password" type="password" name="pass" placeholder="Password">
                    <span onclick="show_pass()"><i class="fa-solid fa-eye"></i> Show</span>
                </div>
            </div>

            <div class="remember">
                <div class="rem_part">
                    <input type="checkbox" name="" id="">
                    <label for="">Remember Me</label>
                </div>
                
                <div class="rem_part">
                    <a href=""><p>Forgot Password?</p></a>
                </div>
            </div>
            
            <div class="login_button">
                <input type="submit" value="Login">
            </div>

            <div class="sign_up_div">
                <p>Don't have an account?<a href="">Sign Up</a></p>
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


