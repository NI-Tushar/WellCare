
            <div class="container">
            <form action="/action_page.php">
                <div class="row">
                <div class="col-50">
                    <h3>Personal Details</h3>

                    <div class="img_section">
                        <img src="{{url('/resource/images/giver_profile/images.png')}}" alt="">
                        <p onclick="change_img_func()">Change Profile Image</p>
                    </div>


                    <label for="fname">Your Full Name</label>
                    <input type="text" id="fname" name="firstname">

                    <label for="adr">Your Location <span>(Area, City)</span></label>
                    <select name="cars" id="cars">

                    <option value="" selected></option>
                        <option value="volvo">Mirpur</option>
                        <option value="saab">Mohammedpur</option>
                        <option value="mercedes">Dhanmondi</option>
                        <option value="audi">Banani</option>
                    </select>



                    <div class="row">
                        <div class="col-50">
                            <label for="state">NID Number</label>
                            <input type="text" id="state" name="state">
                        </div>
                        <div class="col-50">
                            <label for="zip">NID Picture</label>
                            <input type="file" id="zip" name="zip" placeholder="10001">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-50">
                            <p>Gender</p>
                            <div class="boxed">
                                <input type="radio" id="android" name="skills" value="Android Development">
                                <label for="android">Male</label>
                                
                                <input type="radio" id="ios" name="skills" value="iOS Development">
                                <label for="ios">Female</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-50">
                            <label for="email">Profile Headline <span class="describe">(Describe in 10 to 50 character.)</span></label>
                            <textarea name="" id=""></textarea>
                        </div>
                    </div>
                    
                </div>
                </div>

                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> I confirm that I am 18 years old or older. I agree to comply with all rules and regulations set forth by Tutor Wise.
                </label>

                <input type="submit" value="Save and Continue" class="btn">

            </form>
            </div>
 



<!-- ___________________________________ change profile img div start -->
<div id="change_img_div" class="change_img_div">
    <div class="change_img_centered_div">
        <i onclick="hide_upload()" class="fa-solid fa-circle-xmark"></i>

        <h3>Change Profile Image</h3>

        <form action="">
            <input type="file" name="" id="">
            <br>
            <input type="submit" value="Upload">
        </form>

    </div>
 </div>
<!-- ___________________________________ change profile img div end -->





<script>
    function change_img_func(){hide_upload
        const acc = document.getElementById("change_img_div");
        acc.style.display = "flex";
    }
    function hide_upload(){
        const acc = document.getElementById("change_img_div");
        acc.style.display = "none";
    }

</script>