<link rel="stylesheet" href="{{url('style/css/giver_jobs.css')}}">
<div class="giver_jobs">
    <div class="giver_jobs_heading">
        <h3>{{GoogleTranslate::trans('Care Giver Jobs', app()->getLocale())}}</h3>
        <p>{{GoogleTranslate::trans('Find the perfect care recipient that matches your skills and expertise.', app()->getLocale())}}</p>
    </div>
</div>



<!-- ___________________________________ giver post start -->

<div class="jobs_card">
    <div class="blank-1"></div>
    <div class="cards">
        
<!-- __________________________________________________ -->
        @for ($i = 0; $i < 5; $i++)
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
                                <h3>{{GoogleTranslate::trans('Looking for a Caring Maid for Daily Assistance', app()->getLocale())}}</h3>
                                <p>Ovie Rahman Sheikh</p>
                                <p><i class="fa-solid fa-location-dot"></i>{{GoogleTranslate::trans('Mohalkhali, DOHS, Dhaka 1207', app()->getLocale())}}</p>
                                <p><i class="fa-regular fa-clock"></i>{{GoogleTranslate::trans('12:00 PM - 4:00 PM', app()->getLocale())}}</p>
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
                            <p><i class="fa-solid fa-restroom"></i><Span>{{GoogleTranslate::trans('Female', app()->getLocale())}}</Span></p>
                            <p><i class="fa-solid fa-bangladeshi-taka-sign"></i><span>{{GoogleTranslate::trans('12,000', app()->getLocale())}}</span></p>
                        </div>

                        <div class="jobs_desc">
                            <p>{{GoogleTranslate::trans('We provide safe, nurturing environments for children of all ages. Each child 
                                receives personalized attention to foster their growth and development through play, 
                                education, and care.', app()->getLocale())}}</p>
                        </div>

                        <a href=""><button>{{GoogleTranslate::trans('Patient Care', app()->getLocale())}}</button></a>

                        <div class="accept_button">
                            <button onclick="show_accept()">{{GoogleTranslate::trans('Accept This Request', app()->getLocale())}}</button>
                        </div>


                        <div class="bottom_icon">
                            <div class="ago">
                                <p><i class="fa-solid fa-calendar-days"></i><span>{{GoogleTranslate::trans('1 Days Ago', app()->getLocale())}}</span></p>
                            </div>
                            <div class="view">
                                <p><i class="fa-solid fa-eye"></i><span>{{GoogleTranslate::trans('322', app()->getLocale())}}</span></p>
                            </div>
                        </div>

                    </div>
                </div>
        @endfor

        
        <!-- __________________________________________________ -->
    
                           

     
    
    </div>
    <div class="blank-2"></div>
</div>

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