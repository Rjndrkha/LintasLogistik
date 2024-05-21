@extends('layouts.main')

@section('title')
<title>Lintas Logistik | About Us</title>
@endsection

@section('additional-css')

@endsection

@section('script-after-jquery')

@endsection

@section('content')
<!-- PAGE TITLE START
   ============================================= -->
<section class="page-title wrapper clearfix" 
         style="background-image: url({{url('assets/img/custom/ANIS_EDIT.jpg')}});">
   <div class="container">
      <div class="row">
         <div class="title-wrap wow fadeIn" data-wow-delay="1s">
            <h1>Services</h1>
            <div class="breadcrumbs">
               <p>You Are Here : 
                  <span><a style="color: white" href="{{url('/')}}">Home</a></span>
                  <span class="arrow"><i class="icon icon-arrow-right"></i></span>
                  <span>Services</span>
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- SLIDER END -->
<!-- CONTENT START
   ============================================= -->
<section id="content" class="clearfix">
   <!-- SERVICES START
      ============================================= -->
   <div class="services-page wrapper bg-color">
      <div class="container">
         <div class="row">
            <div class="services-wrap row">
               <div class="item col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="services-content">
                     <div class="services-thumb">
                        <a href="#">
                           <img src="{{url('assets/img/custom/101_0283_1.JPG')}}" alt="" />
                           <div class="overlay"></div>
                        </a>
                     </div>
                     <div class="services-text">
                        <h3 class="title">FREIGHT FORWARDING</h3>
                        <p>As a leader in global air freight forwarding, OIA Global excels in providing tailored transportation</p>
                        <a href="#" class="button-normal with-icon">
                        Read More
                        <i class="icon icon-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                  <div class="services-content">
                     <div class="services-thumb">
                        <a href="#">
                           <img src="{{url('assets/img/custom/DSCI4661_1.JPG')}}" alt="" />
                           <div class="overlay"></div>
                        </a>
                     </div>
                     <div class="services-text">
                        <h3 class="title">CUSTOM CLEARANCE</h3>
                        <p>As a leader in global air freight forwarding, OIA Global excels in providing tailored transportation</p>
                        <a href="#" class="button-normal with-icon">
                        Read More
                        <i class="icon icon-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item col-md-4 wow fadeInUp" data-wow-delay="0.9s">
                  <div class="services-content">
                     <div class="services-thumb">
                        <a href="#">
                           <img src="{{url('assets/img/custom/edit_2_1.jpg')}}" alt="" />
                           <div class="overlay"></div>
                        </a>
                     </div>
                     <div class="services-text">
                        <h3 class="title">WAREHOUSING</h3>
                        <p>As a leader in global air freight forwarding, OIA Global excels in providing tailored transportation</p>
                        <a href="#" class="button-normal with-icon">
                        Read More
                        <i class="icon icon-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="services-content">
                     <div class="services-thumb">
                        <a href="#">
                           <img src="{{url('assets/img/custom/ANIS_EDIT_1.jpg')}}" alt="" />
                           <div class="overlay"></div>
                        </a>
                     </div>
                     <div class="services-text">
                        <h3 class="title">CARGO INSURANCE</h3>
                        <p>As a leader in global air freight forwarding, OIA Global excels in providing tailored transportation</p>
                        <a href="#" class="button-normal with-icon">
                        Read More
                        <i class="icon icon-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                  <div class="services-content">
                     <div class="services-thumb">
                        <a href="#">
                           <img src="{{url('assets/img/custom/101_0283_1.JPG')}}" alt="" />
                           <div class="overlay"></div>
                        </a>
                     </div>
                     <div class="services-text">
                        <h3 class="title">PACKING</h3>
                        <p>As a leader in global air freight forwarding, OIA Global excels in providing tailored transportation</p>
                        <a href="#" class="button-normal with-icon">
                        Read More
                        <i class="icon icon-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item col-md-4 wow fadeInUp" data-wow-delay="0.9s">
                  <div class="services-content">
                     <div class="services-thumb">
                        <a href="#">
                           <img src="{{url('assets/img/custom/edit_2_1.jpg')}}" alt="" />
                           <div class="overlay"></div>
                        </a>
                     </div>
                     <div class="services-text">
                        <h3 class="title">Warehousing</h3>
                        <p>As a leader in global air freight forwarding, OIA Global excels in providing tailored transportation</p>
                        <a href="#" class="button-normal with-icon">
                        Read More
                        <i class="icon icon-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="contact-us-banner text-center wow fadeIn" data-wow-delay="0.5s">
               <h1>Are you ready to work with us?</h1>
               <a href="{{url('contact')}}" class="button-normal">Contact Us Now</a>
            </div>
         </div>
      </div>
   </div>
   <!-- SERVICES END -->
</section>
<!-- CONTENT END -->
@endsection

@section('additional-js')

@endsection