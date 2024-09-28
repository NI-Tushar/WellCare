<link rel="stylesheet" href="{{url('style/css/logout.css')}}">

<div class="center_logout">
    <i onclick="close_logout_func()" class="fa-regular fa-circle-xmark"></i>
    <h3>Sure you want to log out?</h3>
    <p>This will end your session, and you’ll need to sign in again. Any unsaved changes may be lost. Stay logged in to keep working.</p>
    <div class="logout_button">
        <button onclick="close_logout_func()">No, Cancel</button>
        <a href=""><button>Yes, Confirm</button></a>
    </div>
</div>