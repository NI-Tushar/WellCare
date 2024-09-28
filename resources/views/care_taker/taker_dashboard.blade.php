@include('care_taker.taker_layout.taker_navbar')
@include('care_taker.taker_layout.side_bar')


@include('care_taker.taker_layout.create_taker_post')


<section class="home-section">
    <div class="home-content">
        @include('care_taker.taker_pages.taker_posts')
        <div class="create_post_button">
            <link rel="stylesheet" href="{{url('style/css/create_post_btn.css')}}">
            <button onclick="showPostJob()">+ Post your job</button>
        </div>
    </div>
</section>
