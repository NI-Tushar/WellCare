<!-- ___________________________________ Post Job start -->
<link rel="stylesheet" href="{{url('style/css/taker_posts.css')}}">
<div id="post_job_div" class="service_offer_div">
    <div class="centered_service">
        <i onclick="showPostJob()" class="fa-solid fa-circle-xmark"></i>
        <!-- _____________________ showPostJob form body start -->
        <div class="service_container">
            <h3>Post Your Job</h3>
            <form action="/action_page.php">
                <div class="row">
                 <div class="col-50">


                
                    <div class="row">
                        <div class="col-50">
                            <label for="fname">Headline <span>*</span></label>
                            <input type="text" id="fname" name="firstname" placeholder="Type here">
                        </div>
                    </div>

                        
                    <div class="row">
                        <div class="col-50">
                            <label for="adr">Category <span>*</span></label>
                            <select name="cars" id="cars">
                            <option value="" selected></option>
                                <option value="volvo">option1</option>
                                <option value="saab">Option2</option>
                                <option value="mercedes">Option3</option>
                                <option value="audi">Option4</option>
                            </select>   
                        </div>
                        <div class="col-50">
                            <label for="fname">Budget <span>*</span></label>
                            <input type="text" id="fname" name="firstname" placeholder="0">
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-50">
                            <label for="state">Date <span>*</span></label>
                            <input type="date" id="state" name="state" placeholder="Pick a date">
                        </div>
                        <div class="col-50">
                            <label for="zip">Time <span>*</span></label>
                            <input type="time" id="zip" name="zip" placeholder="10001">
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-50">
                            <label for="adr">Required Care Taker Gender <span>*</span></label>
                            <select name="cars" id="cars">
                                <option value="saab">Any</option>
                                <option value="volvo">Male</option>
                                <option value="mercedes">Female</option>
                            </select>   
                        </div>
                        <div class="col-50">
                            
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-50">
                            <label for="email">Additional Comment <span>*</span></label>
                            <textarea name="" id="" placeholder="Typer here..."></textarea>
                        </div>
                    </div>
                    
                </div>
                </div>

                <div class="row">
                    <div class="col-50">
                        <input type="submit" value="Post the Job" class="btn">
                    </div>
                </div>


                </div>
            </div>



            </form>
            </div>
 
        <!-- _____________________ showPostJob end -->
    </div>    
 </div>
 
 <script>
    function showPostJob() {
        var x = document.getElementById("post_job_div");
        if (x.style.display === "none") {
            x.style.display = "flex";
        } else {
            x.style.display = "none";
        }
    }
</script>
<!-- ___________________________________ Post Job end -->
