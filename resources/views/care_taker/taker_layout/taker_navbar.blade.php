<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app"/>

    <script src="https://kit.fontawesome.com/5f7bc44e9f.js" crossorigin="anonymous"></script> 


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
<body>

<link rel="stylesheet" href="{{url('style/css/giver_navbar.css')}}">
<link rel="stylesheet" href="{{url('style/css/logo.css')}}">
<div class="wrapper">
    <div class='nav'>
        <input type="checkbox" id="show-search"/>
        <input type="checkbox" id="show-menu"/>
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="nav-content">
            <a href="{{url('/')}}">
                <div class="logo">
                <img src="{{url('resource/images/logo.png')}}" alt="">
                    <div class="logo_text">
                        <h1>Well<span>Care</span></h1>
                        <p>Care at Your Doorstep</p>
                    </div>
                </div>
            </a>
            <ul class="links">
                <li><a class='active'  href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/contact-us/wellcare')}}">Contact Us</a></li>
                <li><a href="#">Pro-Care Giverr</a></li>
            </ul>

            <div class="noti_lang">
                <div class="notific">
                    <i onclick="show_notifiy_func()" id="bell" class="fa-solid fa-bell"></i>
                    @include('care_taker.taker_layout.taker_notification')
                </div>

                <div class="switch">
                    <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
                    <label for="language-toggle"></label>
                    <span class="on">বাংলা</span>
                    <span class="off">ENG</span>
                </div>

                <div class="user_section">
                    <i onclick="show_lang_div()" class="fa-solid fa-chevron-down"></i>
                    <div class="user_img">      
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtuphMb4mq-EcVWhMVT8FCkv5dqZGgvn_QiA&s" alt="">
                    </div>
                    <div class="name_desc">
                        <h4>User Name</h4>
                        <p>Care Giver</p>
                    </div>
                </div>

            </div>

            <script>
                function show_lang_div(){
                    const lang = document.querySelector(".switch");
                    const bell = document.querySelector("#bell");

                    if (lang.style.display === "none") {
                        lang.style.display="block";
                        bell.style.display="block"; 
                    } else {
                        lang.style.display="none";
                        bell.style.display="none";
                    }
                }
                
                
                function show_notifiy_func(){
                    const notific = document.querySelector(".notification");
                    if (notific.style.display === "none") {
                        notific.style.display = "block";
                    } else {
                        notific.style.display = "none";
                    }
                }

                </script>

        </div>
    </div>
    </div>

</body>
