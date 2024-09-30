      
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
                        <a href=""><button class='find'>{{GoogleTranslate::trans('Find Care Now', app()->getLocale())}}</button></a>
                        <h1>{{GoogleTranslate::trans('Caring Hands, Anytime Your Need', app()->getLocale())}}</h1>
                        <p>
                            {{GoogleTranslate::trans('Compassionate Care For Every Need, Right 
                                At Your Doorstep.', app()->getLocale())}}
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
            <h2>{{GoogleTranslate::trans('Pro Care Giver', app()->getLocale())}}</h2>
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
            <h2>{{GoogleTranslate::trans('Our Services', app()->getLocale())}}</h2>
            <div class="service_card">
                <div class="blank-1"></div>
                <div class="cards">

                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                                <img src="{{url('/resource/images/services/1.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>{{GoogleTranslate::trans('Child Care', app()->getLocale())}}</h3>
                                <p>{{GoogleTranslate::trans('We provide safe, nurturing environments for children of all ages. Each child 
                                    receives personalized attention to foster their growth and development through play, 
                                    education, and care.', app()->getLocale())}}</p>
                            </div>
                        </div>
                    </div>
                
                

                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                            <img src="{{url('/resource/images/services/2.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>{{GoogleTranslate::trans('Patient Care', app()->getLocale())}}</h3>
                                <p>{{GoogleTranslate::trans('Our compassionate caregivers support patients with daily activities, medication 
                                    management, and recovery, ensuring their comfort and well-being throughout the 
                                    process.', app()->getLocale())}}</p>
                            </div>
                        </div>
                    </div>
                


                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                            <img src="{{url('/resource/images/services/3.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>{{GoogleTranslate::trans('House Care', app()->getLocale())}}
                                </h3>
                                <p>{{GoogleTranslate::trans('Our house care services help maintain clean and organized homes, including housekeeping, 
                                    laundry, and meal preparation, ensuring your home remains comfortable and welcoming.', app()->getLocale())}}
                                    </p>
                            </div>
                        </div>
                    </div>   


                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                            <img src="{{url('/resource/images/services/4.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>{{GoogleTranslate::trans('Special Needs Care', app()->getLocale())}}</h3>
                                <p>{{GoogleTranslate::trans('We offer tailored care for individuals with special needs, addressing their physical, mental, 
                                    and emotional challenges while promoting independence and well-being.', app()->getLocale())}}</p>
                            </div>
                        </div>  
                    </div>  


                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                            <img src="{{url('/resource/images/services/5.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>{{GoogleTranslate::trans('Autism Care', app()->getLocale())}}
                                </h3>
                                <p>{{GoogleTranslate::trans('Our autism care services create structured and supportive environments designed to meet the unique 
                                    needs of individuals with autism, encouraging social skills, learning, and emotional development.', app()->getLocale())}}</p>
                            </div>
                        </div> 
                    </div> 

                    <div class="card">
                        <div class="service_body">
                            <div class="service_part service_img">
                            <img src="{{url('/resource/images/services/6.png')}}" alt="">
                            </div>
                            <div class="service_part service_text">
                                <h3>{{GoogleTranslate::trans('Senior Care', app()->getLocale())}}</h3>
                                <p>{{GoogleTranslate::trans('Our compassionate senior care includes assistance with daily living, companionship, and health management,
                                    focusing on improving quality of life while ensuring safety, dignity, and independence.', app()->getLocale())}}</p>
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
            <h2>{{GoogleTranslate::trans('Find the caring your family deserves', app()->getLocale())}}</h2>
            <div class="find_card">
                <div class="blank-1"></div>
                <div class="cards">

                    <div class="card">
                        <div class="find_body">
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <p>{{GoogleTranslate::trans('Find your ideal caregiver', app()->getLocale())}}</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="find_body">
                            <i class="fa-solid fa-comments"></i>
                            <p>{{GoogleTranslate::trans('Communicate with your potential caregiver', app()->getLocale())}}</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="find_body">
                            <i class="fa-solid fa-hand-holding-heart"></i>
                            <p>{{GoogleTranslate::trans('Hire safely', app()->getLocale())}}</p>
                        </div>
                    </div>

                </div>
                <div class="blank-2"></div>
            </div>
                <div class="find_btn">
                    <a href=""><button>{{GoogleTranslate::trans('Find a Caregiver', app()->getLocale())}}</button></a>
                </div>
            </section>
<!-- ___________________________________ find end -->





<!-- ___________________________________ service start -->
<link rel="stylesheet" href="{{url('style/css/reviews.css')}}">
    <section class='reviews_section'>
            <h2>{{GoogleTranslate::trans('Find the caring your family deserves', app()->getLocale())}}</h2>
            <div class="reviews_card">
                <div class="blank-1"></div>
                <div class="cards">

                    <div class="card">
                        <div class="reviews_body">
                            <div class="user_img">
                                <img src="{{url('/resource/images/reviews/1.png')}}" alt="">
                            </div>
                            <p>{{GoogleTranslate::trans('“We were so lucky to find Mary on this app! She has been an
                                 absolute godsend for our family. She is so reliable and always 
                                 goes above and beyond to help us out. My granny just loves her 
                                 and she always goes right.”', app()->getLocale())}}
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
                            <p>
                                 {{GoogleTranslate::trans('“We were so lucky to find Mary on this app! She has been an absolute 
                                godsend for our family. She is so reliable and always goes above and beyond
                                 to help us out. My granny just loves her and she always goes right.”', app()->getLocale())}}
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
                            <p>{{GoogleTranslate::trans('“We were so lucky to find Mary on this app! She has been an absolute godsend
                                 for our family. She is so reliable and always goes above and beyond to help us out. 
                                 My granny just loves her and she always goes right.”', app()->getLocale())}}
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
                <h2>{{GoogleTranslate::trans('Contact Us', app()->getLocale())}}</h2>
                <p>{{GoogleTranslate::trans('We Would Love to Hear From You', app()->getLocale())}}</p>

                <div class="column">
                    <label htmlFor="the-name">{{GoogleTranslate::trans('Name', app()->getLocale())}}</label>
                    <input type="text" />

                    <label htmlFor="phone">{{GoogleTranslate::trans('Phone', app()->getLocale())}}</label>
                    <input type="text" />
                    
                    <label htmlFor="the-reason"></label>
                </div>  

                <div class="column">
                    <label htmlFor="Email">{{GoogleTranslate::trans('Email', app()->getLocale())}}</label>
                    <input type="text" />

                    <label htmlFor="subject">{{GoogleTranslate::trans('Subject', app()->getLocale())}}</label>
                    <input type="text" />
                </div>

                <div class="full_msg">
                    <label htmlFor="">{{GoogleTranslate::trans('Message', app()->getLocale())}}</label>
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