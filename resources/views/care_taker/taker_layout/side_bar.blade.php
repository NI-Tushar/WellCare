<link rel="stylesheet" href="{{url('style/css/giver_side_bar.css')}}">
<script src="https://kit.fontawesome.com/5f7bc44e9f.js" crossorigin="anonymous"></script> 

<!-- Box icon CSS   -->
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<!-- End -->

<div class="sidebar close">
  <div id="side_arrow" class="side_arrow">
    <i class="fa-solid fa-list"></i>
  </div>

  <ul class="side-nav-links">

    <li>
      <a href="{{url('/dashboard/care-taker/')}}">
        <i class='bx bx-home'></i>
        <span class="link_name">Dashboard</span>
      </a>
    </li>

    <li>
      <div class="icon-link">
        <a href="{{url('/taker-profile/care-taker/')}}">
        <i class="fa-regular fa-user"></i>  
          <span class="link_name">Profile</span>
        </a>
        <!-- <i class='bx bxs-chevron-down arrow'></i> -->
      </div>
      <!-- <ul class="sub-menu">
        <li><a class="link_name" href="#">Solutions</a></li>
        <li><a href="#">Payments API</a></li>
        <li><a href="#">Accounts APi</a></li>
        <li><a href="#">Finance API</a></li>
      </ul> -->
    </li>
    <li>
      <div class="icon-link">
        <a href="{{url('/my-all-post/care-taker/')}}">
          <i class='bx bx-news'></i>
          <span class="link_name">My Posts</span>
        </a>
      </div>
    </li>

    </li>



    <li onclick="show_logout_func()">
      <a href="#">
      <i class="fa-solid fa-arrow-right-from-bracket"></i>
        <span class="link_name">Logout</span>
      </a>
    </li>

    <li>
      <div class="profile-details">
        <div class="profile-content">
          <img src="{{url('resource/images/logo.png')}}" alt="profileImg">
        </div>
        <div class="name-job">
          <div class="profile_name">Well<span>Care</span></div>
          <div class="job">Care at Your Doorstep</div>
        </div>
        <i id="side_arrow" class='bx bx-log-out'></i>
      </div>
    </li>
  </ul>


  
</div>

<div class="logout_section">
    @include('care_giver.giver_layout.logout')
</div>


 



<script>

  function show_logout_func(){
    let logout = document.querySelector(".logout_section");
    logout.style.display="flex";
  }
  function close_logout_func(){
    let logout = document.querySelector(".logout_section");
    logout.style.display="none";
  }


  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
      console.log('clicked');
      let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
      arrowParent.classList.toggle("showMenu");
    });
  }

  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".side_arrow");
  
  sidebar.classList.remove("close");
  
  sidebarBtn.addEventListener("click", () => {
    console.log('clicked');
    sidebar.classList.toggle("close");
  });



</script>