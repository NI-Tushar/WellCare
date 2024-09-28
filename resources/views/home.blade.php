      
@extends('layouts.middle')
@push('title')
<title>Home Page | WellCare</title>
@endpush

@section('middle_section')
<!-- =================================== start middle section -->
<!-- ___________________________________ banner start -->
<link rel="stylesheet" href="{{url('style/css/banner.css')}}">
<section class='whole_banner'>
            <div class="banner_center">
                <div class="banner_part">
                    <div class="banner_text">
                        <a href=""><button class='find'>Find Care Now</button></a>
                        <h1>Caring Hands, Anytime Your Need</h1>
                        <p>Compassionate Care For Every Need, Right 
                            At Your Doorstep.
                        </p>
                        <a href=""><button class='get_start'>Get Started</button></a>
                    </div>
                </div>
                <div class="banner_part">
                    <div class="banner_img">
                    <img class='img1' src="{{url('/resource/images/banner/1.png')}}" alt="">
                    <img class='img2' src="{{url('/resource/images/banner/2.png')}}" alt="">
                    <img class='img3' src="{{url('/resource/images/banner/3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
<!-- ___________________________________ banner end -->



<!-- ___________________________________ pro care giver start -->
<link rel="stylesheet" href="{{url('style/css/giver.css')}}">
        <section class='giver_section'>
            <h2>Pro Care Giverr</h2>
            <div class="giver_card">
                <div class="blank-1"></div>
                <div class="cards">

                    <div class="card">
                        <div class="giver_img">
                        <img src="{{url('/resource/images/giver/1.png')}}" alt="">
                        </div>
                        <p>Rechard</p>
                        <p class='status online'>Online</p>
                    </div>
                
                

                    <div class="card">
                        <div class="giver_img">
                        <img src="{{url('/resource/images/giver/2.png')}}" alt="">
                        </div>
                        <p>David</p>
                        <p class='status online'>Online</p>
                    </div>
                
                

                    <div class="card">
                        <div class="giver_img">
                        <img src="{{url('/resource/images/giver/3.png')}}" alt="">
                        </div>
                        <p>Tamanna</p>
                        <p class='status'>Offline</p>
                    </div>

                    
                    <div class="card">
                        <div class="giver_img">
                        <img src="{{url('/resource/images/giver/4.png')}}" alt="">
                        </div>
                        <p>Steave</p>
                        <p class='status online'>Online</p>
                    </div>


                    <div class="card">
                        <div class="giver_img">
                        <img src="{{url('/resource/images/giver/5.png')}}" alt="">
                        </div>
                        <p>Cassie</p>
                        <p class='status'>Offline</p>
                    </div>


                    <div class="card">
                        <div class="giver_img">
                        <img src="{{url('/resource/images/giver/6.png')}}" alt="">
                        </div>
                        <p>Leofold</p>
                        <p class='status online'>Online</p>
                    </div>


                    <div class="card">
                        <div class="giver_img">
                            <img src="../resource/images/giver/7.png" alt="">
                        </div>
                        <p>Natasha</p>
                        <p class='status online'>Online</p>
                    </div>
                
                
                

                
                </div>
                <div class="blank-2"></div>
            </div>
            </section>
<!-- ___________________________________ pro care giver end -->





<!-- ___________________________________ services start -->
<link rel="stylesheet" href="{{url('style/css/services.css')}}">
<section class='service_section'>
            <h2>Our Services</h2>
            <div class="service_card">
                <div class="blank-1"></div>
                <div class="cards">

                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                                <img src="{{url('/resource/images/services/1.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>Child Care</h3>
                                <p>We provide safe, nurturing environments for children of all ages. Each child 
                                    receives personalized attention to foster their growth and development through play, 
                                    education, and care.</p>
                            </div>
                        </div>
                    </div>
                
                

                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                            <img src="{{url('/resource/images/services/2.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>Patient Care</h3>
                                <p>Our compassionate caregivers support patients with daily activities, medication 
                                    management, and recovery, ensuring their comfort and well-being throughout the 
                                    process.</p>
                            </div>
                        </div>
                    </div>
                


                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                            <img src="{{url('/resource/images/services/3.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>House Care</h3>
                                <p>Our house care services help maintain clean and organized homes, including housekeeping, 
                                    laundry, and meal preparation, ensuring your home remains comfortable and welcoming.</p>
                            </div>
                        </div>
                    </div>   


                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                            <img src="{{url('/resource/images/services/4.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>Special Needs Care</h3>
                                <p>We offer tailored care for individuals with special needs, addressing their physical, mental, 
                                    and emotional challenges while promoting independence and well-being.</p>
                            </div>
                        </div>  
                    </div>  


                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                            <img src="{{url('/resource/images/services/5.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>Autism Care</h3>
                                <p>Our autism care services create structured and supportive environments designed to meet the unique 
                                    needs of individuals with autism, encouraging social skills, learning, and emotional development.</p>
                            </div>
                        </div> 
                    </div> 

                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                            <img src="{{url('/resource/images/services/6.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>Senior Care</h3>
                                <p>Our compassionate senior care includes assistance with daily living, companionship, and health management,
                                    focusing on improving quality of life while ensuring safety, dignity, and independence.</p>
                            </div>
                        </div>                              
                    </div>                              

                
                </div>
                <div class="blank-2"></div>
            </div>
            </section>
<!-- ___________________________________ services end -->






<!-- ___________________________________ find start -->
<link rel="stylesheet" href="{{url('style/css/find.css')}}">
<section class='find_section'>
            <h2>Find the caring your family deserves</h2>
            <div class="find_card">
                <div class="blank-1"></div>
                <div class="cards">

                    <div class="card">
                        <div class="find_body">
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <p>Find your ideal caregiver</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="find_body">
                            <i class="fa-solid fa-comments"></i>
                            <p>Communicate with your potential caregiver</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="find_body">
                            <i class="fa-solid fa-hand-holding-heart"></i>
                            <p>Hire safely</p>
                        </div>
                    </div>

                </div>
                <div class="blank-2"></div>
            </div>
                <div class="find_btn">
                    <a href=""><button>Find a Caregiver</button></a>
                </div>
            </section>
<!-- ___________________________________ find end -->





<!-- ___________________________________ service start -->
<link rel="stylesheet" href="{{url('style/css/reviews.css')}}">
    <section class='reviews_section'>
            <h2>Find the caring your family deserves</h2>
            <div class="reviews_card">
                <div class="blank-1"></div>
                <div class="cards">

                    <div class="card">
                        <div class="reviews_body">
                            <div class="user_img">
                                <img src="{{url('/resource/images/reviews/1.png')}}" alt="">
                            </div>
                            <p>“We were so lucky to find Mary on this app! She has been an
                                 absolute godsend for our family. She is so reliable and always 
                                 goes above and beyond to help us out. My granny just loves her 
                                 and she always goes right.”
                            </p>
                            <p class="name">-Vanessa Brien</p>
                            <div class="review_star">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="reviews_body">
                            <div class="user_img">
                            <img src="{{url('/resource/images/reviews/2.png')}}" alt="">
                            </div>
                            <p>“We were so lucky to find Mary on this app! She has been an absolute 
                                godsend for our family. She is so reliable and always goes above and beyond
                                 to help us out. My granny just loves her and she always goes right.”
                            </p>
                            <p class="name">-Charlie Luis</p>
                            <div class="review_star">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="reviews_body">
                            <div class="user_img">
                                <img src="{{url('/resource/images/reviews/3.png')}}" alt="">
                            </div>
                            <p>“We were so lucky to find Mary on this app! She has been an absolute godsend
                                 for our family. She is so reliable and always goes above and beyond to help us out. 
                                 My granny just loves her and she always goes right.”
                                </p>
                                <p class="name">-Adam Smith</p>
                                <div class="review_star">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="blank-2"></div>
            </div>
 
        </section>
<!-- ___________________________________ service end -->





<!-- ___________________________________ contact start -->
<link rel="stylesheet" href="{{url('style/css/contact.css')}}">
<section class='contact_section'>
            <div class="centered_contact">

            <form action="">
                <h2>Contact Us</h2>
                <p>We Would Love to Hear From You</p>

                <div class="column">
                    <label htmlFor="the-name">Name</label>
                    <input type="text" />

                    <label htmlFor="phone">Phone</label>
                    <input type="text" />
                    
                    <label htmlFor="the-reason"></label>
                </div>  

                <div class="column">
                    <label htmlFor="Email">Email</label>
                    <input type="text" />

                    <label htmlFor="subject">Subject</label>
                    <input type="text" />
                </div>

                <div class="full_msg">
                    <label htmlFor="">Message</label>
                    <textarea name="" id=""></textarea>
                </div>

                <div class="form_btn">
                    <input type="reset" value="Clear" />
                    <input type="submit" value="Submit" />
                </div>
            </form>
            </div>

        </section>
<!-- ___________________________________ contact end -->


<!-- =================================== start middle section -->


   
      
      
@endsection