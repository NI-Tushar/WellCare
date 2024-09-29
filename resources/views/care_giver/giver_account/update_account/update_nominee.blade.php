
<div class="container">
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-50">
                        <h3>Add 2 Nominee</h3>
                        <!-- _______________________________________________________ -->
                        <h4>Nominee 1</h4>

                        <div class="row">
                            <div class="col-50">
                                <label for="fname">NID Holder's Name</label>
                                <input type="text" id="fname" name="firstname">
                            </div>

                            <div class="col-50">
                                <label for="fname">Address</label>
                                <input type="text" id="fname" name="firstname">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-50">
                                <label for="state">NID Number</label>
                                <input type="text" id="state" name="state">
                            </div>
                            <div class="col-50">
                                <label for="zip">NID Picture</label>
                                <input type="file" id="zip" name="zip">
                            </div>
                        </div>


                        <!-- _______________________________________________________ -->
                         
                        <h4>Nominee 2</h4>

                        <div class="row">
                            <div class="col-50">
                                <label for="state">NID Holder's Name</label>
                                <input type="text" id="state" name="state">
                            </div>
                            <div class="col-50">
                                <label for="zip">Address</label>
                                <input type="text" id="zip" name="zip">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-50">
                                <label for="state">NID Number</label>
                                <input type="text" id="state" name="state">
                            </div>
                            <div class="col-50">
                                <label for="zip">NID Picture</label>
                                <input type="file" id="zip" name="zip">
                            </div>
                        </div>
                        <!-- _______________________________________________________ -->


 
                    
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