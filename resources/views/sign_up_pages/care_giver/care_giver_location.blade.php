@include('layouts.navbar')

<link rel="stylesheet" href="{{url('style/css/sign_up_user_cred.css')}}">
<link rel="stylesheet" href="{{url('style/css/otp.css')}}">
<link rel="stylesheet" href="{{url('style/css/logo.css')}}">
<link rel="stylesheet" href="{{url('style/css/user_location.css')}}">

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
                <div class="location_sec">
                    <h4>Your Location</h4>
                    <input class="location" type="text" placeholder="Select Your Location"> <i onclick="show_map()" class="fa-solid fa-location-dot"></i>
                </div>
            </div>
            
            
            <div class="next_section">
                <div class="step"><p>Step <span>1</span>/3</p></div>
                <div class="next"><a href="{{url('/dashboard/care-giver')}}"><button>Next</button></a></div>
            </div>
        </form>
            
        </div>

    </div>
</section>


<div id="whole_map_section" class="whole_map_section">
    <div class="centered_map">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7300.338293842897!2d90.41228681482558!3d23.812583516128726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6556f8d0183%3A0xaad698adc3e0f420!2sDOHS%20Baridhara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1726919221663!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="map_buttons">
            <button onclick="hide_map()" id="cancel" class="cancel">Cancel</button>
           <button class="confirm">Confirm Location</button>
        </div>
    </div>
</div>


<script>
    function show_map(){
        const map = document.getElementById("whole_map_section");
        map.style.display = "block";
    }
    function hide_map(){
        const map = document.getElementById("whole_map_section");
        map.style.display = "none";
    }
</script>