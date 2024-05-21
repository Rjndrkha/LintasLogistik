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
         style="background-image: url({{url('assets/img/custom/101_0283.JPG')}});">
   <div class="container">
      <div class="row">
         <div class="title-wrap wow fadeIn" data-wow-delay="1s">
            <h1>About Us</h1>
            <div class="breadcrumbs">
               <p>You Are Here : 
                  <span><a style="color: white" href="{{url('/')}}">Home</a></span>
                  <span class="arrow"><i class="icon icon-arrow-right"></i></span>
                  <span>About Us</span>
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
   <!-- COMPANY PROFILE START
      ============================================= -->
   <div class="company-info wrapper clearfix">
      <div class="container">
         <div class="row">
            <div class="company-wrap row">
               <div class="company-desc col-md-6 wow fadeIn">
                  <h3 class="title">Company Profile</h3>
                  <p>Established based on the notary deed dated October 27th 2008, approved by the Ministry of Justice and Human Right of Republic of Indonesia, based on Minister of Justice and Human Right Decree no. AHU84365.AH.01.01.Tahun 2008 dated November 11st 2008.</p>
                  <p>We provide the industries, businesses and individuals with an integrated low cost shipping related services ranging from International shipping, Domestic Shipping, Freight Forwarding, Warehousing, Trucking, Consolidation, Door to Door Delivery & Pickup Services, Heavy Lift Transportation and Special Project Handling, especially moving by LCT and also we provide the project supplies</p>
                  <p>We offer complete affordable shipping solutions to our clients both in terms of facilities and manpower with the standard of professionalism expected. Our network and experience in the shipping industry, give us the edge over our competitors to become a one-stop forwarding company to effectively cater the complex needs of our clients.</p>
               </div>
               <div class="company-slider col-md-6 wow fadeIn">
                  <ul class="slides">
                     <li class="slide-item clearfix">   
                        <img src="{{url('assets/img/custom/DSCI4661.JPG')}}" alt="" />
                     </li>
                     <li class="slide-item clearfix">   
                        <img src="{{url('assets/img/custom/edit_2.jpg')}}" alt="" />
                     </li>
                     <li class="slide-item clearfix">   
                        <img src="{{url('assets/img/custom/ANIS_EDIT.jpg')}}" alt="" />
                     </li>
                  </ul>
               </div>
               <div class="company-vision">
                  <div class="item col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                     <img src="{{url('assets/img/custom/edit_2_1.jpg')}}" alt="" />
                     <h4>Our Mission</h4>
                     <p>Be a worldwide integrated logistics services provider</p>
                  </div>
                  <div class="item col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                     <img src="{{url('assets/img/custom/DSCI4661_1.JPG')}}" alt="" />
                     <h4>Our Vision</h4>
                     <p>Be logistics architect to our customer</p>
                     <p>Integrating our knowledge, facilities, technology and people to achieve customer satisfaction</p>
                     <p>Implementing quality and safety</p>
                  </div>
                  <div class="item col-md-4 wow fadeInUp" data-wow-delay="0.9s">
                     <img src="{{url('assets/img/custom/ANIS_EDIT_1.JPG')}}" alt="" />
                     <h4>Expanding Goal</h4>
                     <p>Lintas Logistics offers complete shipping solutions to its clients both in terms of facilities and manpower with the standard of professionalism expected. Our network and experience in the shipping industry, give us the edge over our competitors to become a one-stop forwarding company to effectively cater the complex needs of our clients.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- COMPANY PROFILE -->
</section>
<!-- CONTENT END -->
@endsection

@section('additional-js')

@endsection