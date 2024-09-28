@include('care_taker.taker_layout.taker_navbar')
@include('care_taker.taker_layout.side_bar')

<link rel="stylesheet" href="{{url('style/css/giver_jobs.css')}}">





@include('care_taker.taker_layout.create_taker_post')


<section class="home-section">
    <div class="home-content">

    <!-- ______________________________ create taker post start -->
    <div class="create_post_button">
        <link rel="stylesheet" href="{{url('style/css/create_post_btn.css')}}">
        <button onclick="showPostJob()">+ Post your job</button>
    </div>
    <!-- ______________________________ create taker post end -->



    <div class="giver_jobs">
        <div class="giver_jobs_heading">
            <h3>My All Posts</h3>
            <p>View your applied care services and personalized care details.</p>
        </div>
    </div>



    <!-- ___________________________________ giver post start -->

    <div class="jobs_card">
        <div class="blank-1"></div>
        <div class="cards">
            
    <!-- __________________________________________________ -->
            <div class="card">
                <div class="jobs_body">

                    <div class="top_icon">
                        <a href=""><i class="fa-solid fa-circle-info"></i></a>
                        <a href=""><i class="fa-solid fa-share"></i></a>
                    </div>

                    <div class="job_heading">
                        <div class="giver_img">
                            <img src="{{url('/resource/images/giver_jobs/1.png')}}" alt="">
                        </div>
                        <div class="job_title">
                            <h3>Looking for a Caring Maid for Daily Assistance</h3>
                            <p>Ovie Rahman Sheikh</p>
                            <p><i class="fa-solid fa-location-dot"></i>Mohalkhali, DOHS, Dhaka 1207</p>
                            <p><i class="fa-regular fa-clock"></i>12:00 PM - 4:00 PM</p>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="gen_amnt">
                        <p><i class="fa-solid fa-restroom"></i><Span>Female</Span></p>
                        <p><i class="fa-solid fa-bangladeshi-taka-sign"></i><span>12,000</span></p>
                    </div>

                    <div class="jobs_desc">
                        <p>We provide safe, nurturing environments for children of all ages. Each child 
                            receives personalized attention to foster their growth and development through play, 
                            education, and care.</p>
                    </div>

                    <a href="#"><button>Patient Care</button></a>


                    <div class="bottom_icon">
                        <div class="ago">
                            <p><i class="fa-solid fa-calendar-days"></i><span>1 Days Ago</span></p>
                        </div>
                        <div class="view">
                            <p><i class="fa-solid fa-eye"></i><span>322</span></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- __________________________________________________ -->
        
                            

                
    <!-- __________________________________________________ -->
    <div class="card">
                <div class="jobs_body">

                    <div class="top_icon">
                        <a href=""><i class="fa-solid fa-circle-info"></i></a>
                        <a href=""><i class="fa-solid fa-share"></i></a>
                    </div>

                    <div class="job_heading">
                        <div class="giver_img">
                            <img src="{{url('/resource/images/giver_jobs/2.png')}}" alt="">
                        </div>
                        <div class="job_title">
                            <h3>Looking for a Caring Maid for Daily Assistance</h3>
                            <p>Ovie Rahman Sheikh</p>
                            <p><i class="fa-solid fa-location-dot"></i>Mohalkhali, DOHS, Dhaka 1207</p>
                            <p><i class="fa-regular fa-clock"></i>12:00 PM - 4:00 PM</p>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="gen_amnt">
                        <p><i class="fa-solid fa-restroom"></i><Span>Female</Span></p>
                        <p><i class="fa-solid fa-bangladeshi-taka-sign"></i><span>12,000</span></p>
                    </div>

                    <div class="jobs_desc">
                        <p>We provide safe, nurturing environments for children of all ages. Each child 
                            receives personalized attention to foster their growth and development through play, 
                            education, and care.</p>
                    </div>

                    <a href="#"><button>Patient Care</button></a>



                    <div class="bottom_icon">
                        <div class="ago">
                            <p><i class="fa-solid fa-calendar-days"></i><span>1 Days Ago</span></p>
                        </div>
                        <div class="view">
                            <p><i class="fa-solid fa-eye"></i><span>322</span></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- __________________________________________________ -->
        
                            

                
            <!-- __________________________________________________ -->
            <div class="card">
                <div class="jobs_body">

                    <div class="top_icon">
                        <a href=""><i class="fa-solid fa-circle-info"></i></a>
                        <a href=""><i class="fa-solid fa-share"></i></a>
                    </div>

                    <div class="job_heading">
                        <div class="giver_img">
                            <img src="{{url('/resource/images/giver_jobs/3.png')}}" alt="">
                        </div>
                        <div class="job_title">
                            <h3>Looking for a Caring Maid for Daily Assistance</h3>
                            <p>Ovie Rahman Sheikh</p>
                            <p><i class="fa-solid fa-location-dot"></i>Mohalkhali, DOHS, Dhaka 1207</p>
                            <p><i class="fa-regular fa-clock"></i>12:00 PM - 4:00 PM</p>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="gen_amnt">
                        <p><i class="fa-solid fa-restroom"></i><Span>Female</Span></p>
                        <p><i class="fa-solid fa-bangladeshi-taka-sign"></i><span>12,000</span></p>
                    </div>

                    <div class="jobs_desc">
                        <p>We provide safe, nurturing environments for children of all ages. Each child 
                            receives personalized attention to foster their growth and development through play, 
                            education, and care.</p>
                    </div>

                    <a href="#"><button>Patient Care</button></a>


                    <div class="bottom_icon">
                        <div class="ago">
                            <p><i class="fa-solid fa-calendar-days"></i><span>1 Days Ago</span></p>
                        </div>
                        <div class="view">
                            <p><i class="fa-solid fa-eye"></i><span>322</span></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- __________________________________________________ -->
        
                            

                
        <!-- __________________________________________________ -->
            <div class="card">
                <div class="jobs_body">

                    <div class="top_icon">
                        <a href=""><i class="fa-solid fa-circle-info"></i></a>
                        <a href=""><i class="fa-solid fa-share"></i></a>
                    </div>

                    <div class="job_heading">
                        <div class="giver_img">
                            <img src="{{url('/resource/images/giver_jobs/1.png')}}" alt="">
                        </div>
                        <div class="job_title">
                            <h3>Looking for a Caring Maid for Daily Assistance</h3>
                            <p>Ovie Rahman Sheikh</p>
                            <p><i class="fa-solid fa-location-dot"></i>Mohalkhali, DOHS, Dhaka 1207</p>
                            <p><i class="fa-regular fa-clock"></i>12:00 PM - 4:00 PM</p>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="gen_amnt">
                        <p><i class="fa-solid fa-restroom"></i><Span>Female</Span></p>
                        <p><i class="fa-solid fa-bangladeshi-taka-sign"></i><span>12,000</span></p>
                    </div>

                    <div class="jobs_desc">
                        <p>We provide safe, nurturing environments for children of all ages. Each child 
                            receives personalized attention to foster their growth and development through play, 
                            education, and care.</p>
                    </div>

                    <a href="#"><button>Patient Care</button></a>



                    <div class="bottom_icon">
                        <div class="ago">
                            <p><i class="fa-solid fa-calendar-days"></i><span>1 Days Ago</span></p>
                        </div>
                        <div class="view">
                            <p><i class="fa-solid fa-eye"></i><span>322</span></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- __________________________________________________ -->
        
        
        
        </div>
        <div class="blank-2"></div>
    </div>

    </div>
    </section>

    <!-- ___________________________________ jobss end -->









    <!-- ___________________________________ Accept div start -->
    <div id="accept_div" class="accept_div">
        <div class="acc_centered_div">
            <i onclick="hide_accept()" class="fa-solid fa-circle-xmark"></i>
        <h2>Accept This Job</h2>
            <div class="fee_desc">
                <div class="fee_part">
                <i class="fa-solid fa-circle-info"></i>
                    <p class="fee1">Advance Fee : <span>50</span>%</p>
                    <p class="fee2">6000</p>
                    <p class="fee3">Advance payment before starting work.</p>
                </div>
                <div class="fee_part">
                <i class="fa-solid fa-circle-info"></i>
                    <p class="fee1">After Salary Fee : <span>50</span>%</p>
                    <p class="fee2">7200</p>
                    <p class="fee3">After getting the salary from Client.</p>
                </div>
            </div>

            <form action="">
                <div class="acc_text">
                    <div class="text_part check">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    </div>
                    <div class="text_part">
                        <p>By applying for this post, I agree to pay the mentioned percentage (either 50% or 60%) to the website after securing the job. Failure to make the payment within the stipulated time frame may result in penalties or restrictions on future applications.</p>
                    </div>
                </div>

                <input type="submit" value="Confirm">
            </form>
        </div>
    </div>

    <!-- ___________________________________ Accept div end -->





    <!-- ___________________________________ Accepted div start -->
    <div id="accepted_div" class="accepted_div">
        <div class="accepted_centered_div">
            <i onclick="hide_done()" class="fa-solid fa-circle-xmark"></i>

            <h2>Congratulations!</h2>

            <p>You get the job of “Looking for a Caring Maid for Daily Assistance.</p>

            <button onclick="hide_done()">Close</button>
        </div>
    </div>
    <!-- ___________________________________ Accepted div end -->





<script>
    function show_accept(){
        const acc = document.getElementById("accept_div");
        acc.style.display = "flex";
    }
    function hide_accept(){
        const acc = document.getElementById("accept_div");
        const done = document.getElementById("accepted_div");
        acc.style.display = "none";
        done.style.display = "flex";
    }
    function hide_done(){   
        const acc = document.getElementById("accepted_div");
        acc.style.display = "none";
    }
</script>