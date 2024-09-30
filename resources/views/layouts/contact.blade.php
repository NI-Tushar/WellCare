@extends('layouts.middle')
@push('title')
<title>{{GoogleTranslate::trans('Contact Us', app()->getLocale())}} | WellCare</title>
@endpush


<link rel="stylesheet" href="{{url('style/css/contact_page.css')}}">


@section('middle_section')




<!-- __________________________________________________________________ CONTACT SECTION START -->
<section class="contact_section">
  <div class="centered_banner">
    <div class="banner">
      <div class="banner_text">
        <h1>{{GoogleTranslate::trans('Get in Touch with Us', app()->getLocale())}}</h1>
        <p>{{GoogleTranslate::trans(' We’re here to assist you with any questions or concerns. Whether you need support with your 
          loan application or have inquiries about our services, 
          feel free to reach out. Our team is dedicated to providing prompt and helpful responses to ensure your needs are met.', app()->getLocale())}}
         </p>
        <a href=""><button>{{GoogleTranslate::trans('Book a Meeting', app()->getLocale())}}</button></a>
      </div>
    </div>
    <div class="banner">
      <div class="banner_img">
        <img src="{{url('resource/images/contact/poster_img.png')}}" alt="">
      </div>
    </div>
  </div>
</section>

<!-- ________________________________ send email -->
<section class="contact_section email_section">
  <div class="centered_banner">
    <div class="banner">
      <div class="email_side">
        <img src="{{url('resource/images/contact/contact_img.png')}}" alt="">
        <p>{{GoogleTranslate::trans(' FinWise makes loan applications easy. Submit your form, connect with banks and corporations, 
          and track your loan status effortlessly. Quick approvals and tailored solutions to help you reach your financial goals.', app()->getLocale())}}
         </p>
      </div>
    </div>
    <div class="banner">
      <div class="email_form">
        <form action="">
          <label for="">{{GoogleTranslate::trans('Name', app()->getLocale())}}</label>
          <br>
          <input type="text">
          <br>
          <label for="">{{GoogleTranslate::trans('Phone Number', app()->getLocale())}}</label>
          <br>
          <input type="text">
          <br>
          <label for="">{{GoogleTranslate::trans('Email Address', app()->getLocale())}}</label>
          <br>
          <input type="email" name="" id="">
          <div class="submit_btn">
            <input type="submit" value="{{GoogleTranslate::trans('Send', app()->getLocale())}}">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- __________________________________________________________________ CONTACT SECTION END -->



@endsection