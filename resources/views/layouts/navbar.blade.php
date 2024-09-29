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

<link rel="stylesheet" href="{{url('style/css/navbar.css')}}">
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
            <li><a href="#">Pro-Care Taker</a></li>
            <!-- <li>
            <a href="#" class="desktop-link">Services <i class="fa-solid fa-angle-down"></i></a>
            <input type="checkbox" id="show-services"/>
            <label for="show-services">Services <i class="fa-solid fa-angle-down"></i></label>
            <ul>
                <li><a href="#">Drop Menu 1</a></li>
                <li><a href="#">Drop Menu 2</a></li>
                <li><a href="#">Drop Menu 3</a></li>
            </ul>
            </li>  -->
            <li><a href="{{url('/user/log-in/')}}" class="nav-login">Sign In</a></li>
            <li><a class="nav-sign_up" href="{{url('/user/sign-up')}}">Sign Up</a></li>
        </ul>
        </div>
    </div>
    </div>

</body>
