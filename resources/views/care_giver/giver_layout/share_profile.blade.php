<link rel="stylesheet" href="{{url('style/css/share_profile.css')}}">

<section id="share_profile_section" class="share_profile_section">
    <div class="centered_share_profile">
        <i onclick="showShareProfile()" class="fa-solid fa-circle-xmark"></i>
        <h2>Share This Profile</h2>
        <p>Share</p>
        <div class="social_logo">
            <ul>
                <a href="#"><li><i class="fa-solid fa-code"></i></li></a>
                <a href="#"><li><i class="fa-brands fa-whatsapp"></i></li></a>
                <a href="#"><li><i class="fa-brands fa-linkedin"></i></li></a>
                <a href="#"><li><i class="fa-brands fa-square-x-twitter"></i></li></a>
            </ul>
        </div>
        <div class="link_copy">
            <input id="link_field" type="text" readonly><button onclick="copyLink()">Copy</button>
        </div>
    </div>
</section>


<script>
    const link_field = document.getElementById("link_field");
    link_field.value = "https://chatgpt.com/c/66f78dae-01c4-8008-b438-56fb4894bb36";
    
    function copyLink() {
            const inputField = document.getElementById("link_field");
            inputField.select();
            inputField.setSelectionRange(0, 99999);
            document.execCommand("copy");
            alert("Linked Copied to Clipboard");
        }
</script>