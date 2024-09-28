<link rel="stylesheet" href="{{url('style/css/update_giver_acc.css')}}">


<section class="profile">
    <h3>Profile Update</h3>

    <div class="comp_profile">
        <div class="progress_body">
            <p><span>70</span> % Complete</p>
            <div class="progress">
                <div class="progress-done" data-done="70"></div>
            </div>
        </div>
    </div>

        <script>
            const progress = document.querySelector('.progress-done');
            progress.style.width = progress.getAttribute('data-done') + '%';
            progress.style.opacity = 1;
        </script>

    <div class="row">

        <div class="col-25">
            <div class="container">

                <div onclick="show_update_profile()" class="option_div">
                    <i class="fa-regular fa-circle-user"></i>
                    <div class="option_desc">
                        <h3>Personal Details</h3>
                        <p>Your Personal Information</p>
                    </div>
                </div>
<hr>
                <div onclick="show_update_nominee()" class="option_div">
                    <i class="fa-solid fa-file-pen"></i>
                    <div class="option_desc">
                        <h3>Nominee Information</h3>
                        <p>Your College Information</p>
                    </div>
                </div>
 

            </div>
        </div>

        <!-- _________________________________ -->
        <div id="update_profile" class="col-75">
            @include('care_taker.taker_account.update_account.update_profile')
        </div>
        <div id="update_nominee" class="col-75">
            @include('care_taker.taker_account.update_account.update_nominee')
        </div>
        <!-- _________________________________ -->

        <script>
            function show_update_profile(){
                const profile = document.getElementById("update_profile");
                const nominee = document.getElementById("update_nominee");
                nominee.style.display = "none";
                profile.style.display = "flex";
            }
            function show_update_nominee(){
                const profile = document.getElementById("update_profile");
                const nominee = document.getElementById("update_nominee");
                profile.style.display = "none";
                nominee.style.display = "flex";
            }
        </script>

    </div>

</section>




