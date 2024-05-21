@extends('layouts.main')

@section('title')
<title>Lintas Logistik | Home Page</title>
@endsection

@section('additional-css')

@endsection

@section('script-after-jquery')

@endsection

@section('content')
<!-- SLIDER START ============================================= -->
<section id="slider" class="home-slider clearfix">
   <div class="slider-wrapper">
      <div class="flexslider clearfix">
         <ul class="slides">
            <li class="slide-item clearfix" style="background-image: url({{url('assets/img/custom/101_0283.JPG')}});">
               <div class="flex-content">
                  <div class="container">
                     <div class="row">
                        <div class="caption-wrap">
                           <div class="caption wow fadeInUp" data-wow-delay="0.5s">
                              <h1>FREIGHT FORWARDING</h1>
                           </div>
                           <div class="caption wow fadeIn" data-wow-delay="1s">
                              <p>To help our customers maximizing their business, we must ensure safety, time delivery, and competitive rates for every shipment. Our experience in the business have been recognized by various carriers and even by other forwarding companies</p>
                           </div>
                           <div class="caption wow fadeInUp" data-wow-delay="1.5s">
                              <a href="{{url('/')}}" class="button-normal">Buy Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>

            <li class="slide-item clearfix" style="background-image: url({{url('assets/img/custom/DSCI4661.JPG')}});">
               <div class="flex-content">
                  <div class="container">
                     <div class="row">
                        <div class="caption-wrap">
                           <div class="caption wow fadeInUp" data-wow-delay="0.5s">
                              <h1>CUSTOM CLEARANCE</h1>
                           </div>
                           <div class="caption wow fadeIn" data-wow-delay="1s">
                              <p>We know the importance of prompt clearance of your shipment through Customs. We are experienced in providing brokerage service for clearing international shipments through Customs when it arrives in its country of destination.</p>
                           </div>
                           <div class="caption wow fadeInUp" data-wow-delay="1.5s">
                              <a href="{{url('/')}}" class="button-normal">Buy Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>

            <li class="slide-item clearfix" style="background-image: url({{url('assets/img/custom/edit_2.jpg')}});">
               <div class="flex-content">
                  <div class="container">
                     <div class="row">
                        <div class="caption-wrap">
                           <div class="caption wow fadeInUp" data-wow-delay="0.5s">
                              <h1>WAREHOUSING</h1>
                           </div>
                           <div class="caption wow fadeIn" data-wow-delay="1s">
                              <p>   We provide warehousing facilities for all your commercial and personal needs throughout Indonesia</p>
                           </div>
                           <div class="caption wow fadeInUp" data-wow-delay="1.5s">
                              <a href="{{url('/')}}" class="button-normal">Buy Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>

            <li class="slide-item clearfix" 
                style="background-image: url({{url('assets/img/custom/ANIS_EDIT.jpg')}});">
               <div class="flex-content">
                  <div class="container">
                     <div class="row">
                        <div class="caption-wrap">
                           <div class="caption wow fadeInUp" data-wow-delay="0.5s">
                              <h1>CARGO INSURANCE</h1>
                           </div>
                           <div class="caption wow fadeIn" data-wow-delay="1s">
                              <p>It is highly recommended that you insure your shipment against any potential loss or damage during shipment. Accidents do happen and extra costs incurred in insuring your cargo is well worth the protection it provides. Lintas Logistics can arrange to insure your shipment without any cumbersome application and approval process, as long as it contains approved merchandise and is going to an approved destination</p>
                           </div>
                           <div class="caption wow fadeInUp" data-wow-delay="1.5s">
                              <a href="{{url('/')}}" class="button-normal">Buy Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>

         </ul>
      </div>
   </div>
</section>
<!-- SLIDER END -->
<!-- CONTENT START
   ============================================= -->
<section id="content" class="clearfix">
   <!-- SERVICES START
      ============================================= -->
   <div class="services with-bg" 
        style="background-image: url({{url('assets/img/custom/edit_2.jpg')}});
               background-size: cover;
               background-position: center center;
               padding-bottom: 90px;
               display: inline-block;
               width: 100%;">
      <div class="container">
         <div class="row">
            <!-- Service Quote -->
            <div class="email-quote clearfix">
               <h4>Request a Quote</h4>
               <form method="post">
                  <input class="col-md-6" type="text" placeholder="Your Email" name="search_query" value="">
                  <div class="category_filter col-md-6">
                     <select name="cate" id="cate">
                        <option value="">Services</option>
                        <option>FREIGHT FORWARDING</option>
                        <option>CUSTOM</option>
                        <option>PACKING</option>
                        <option>WAREHOUSING</option>
                        <option>CARGO INSURANCE</option>
                        <option>MOVING SPECIALIST BY LCT AND BARGE</option>
                        <option>INDEPENDENT SURVEYOR</option>
                        <option>SUPPLIES</option>
                     </select>
                     <button type="button" onclick="window.location.href='https://wa.me/62XXXX'" class="button-normal"><span>send now</span></button>
                  </div>
               </form>
            </div>
            <!-- Service Quote -->
         </div>
      </div>
      <div class="section-title text-center wow fadeIn">
         <h2>Our Services</h2>
      </div>
      <div class="services-wrap-carousel">

         <div class="item">
            <div class="services-content">
               <div class="services-image" 
               style="background-image: url({{url('assets/img/custom/DSCI4661.JPG')}});">
                   
               </div>
               <div class="services-text">
                  <h3 class="title">FREIGHT FORWARDING</h3>
                  <p>To help our customers maximizing their business, we must ensure safety, time delivery, and competitive rates for every shipment. Our experience in the business have been recognized by various carriers and even by other forwarding companies</p>
                  <a href="{{url('/')}}" class="button-normal with-icon">
                  Read More
                  <i class="icon icon-arrow-right"></i>
                  </a>
               </div>
               <div class="overlay"></div>
            </div>
         </div>

         <div class="item">
            <div class="services-content">
               <div class="services-image" 
               style="background-image: url({{url('assets/img/custom/edit_2.jpg')}});">
                   
               </div>
               <div class="services-text">
                  <h3 class="title">CUSTOM CLEARANCE</h3>
                  <p>We know the importance of prompt clearance of your shipment through Customs. We are experienced in providing brokerage service for clearing international shipments through Customs when it arrives in its country of destination.</p>
                  <a href="{{url('/')}}" class="button-normal with-icon">
                  Read More
                  <i class="icon icon-arrow-right"></i>
                  </a>
               </div>
               <div class="overlay"></div>
            </div>
         </div>

         <div class="item">
            <div class="services-content">
               <div class="services-image" 
               style="background-image: url({{url('assets/img/custom/101_0283.JPG')}});">
                   
               </div>
               <div class="services-text">
                  <h3 class="title">WAREHOUSING</h3>
                  <p>We provide warehousing facilities for all your commercial and personal needs throughout Indonesia</p>
                  <a href="{{url('/')}}" class="button-normal with-icon">
                  Read More
                  <i class="icon icon-arrow-right"></i>
                  </a>
               </div>
               <div class="overlay"></div>
            </div>
         </div>

         <div class="item">
            <div class="services-content">
               <div class="services-image" 
               style="background-image: url({{url('assets/img/custom/ANIS_EDIT.jpg')}});">
                   
               </div>
               <div class="services-text">
                  <h3 class="title">CARGO INSURANCE</h3>
                  <p>It is highly recommended that you insure your shipment against any potential loss or damage during shipment. Accidents do happen and extra costs incurred in insuring your cargo is well worth the protection it provides. Lintas Logistics can arrange to insure your shipment without any cumbersome application and approval process, as long as it contains approved merchandise and is going to an approved destination</p>
                  <a href="{{url('/')}}" class="button-normal with-icon">
                  Read More
                  <i class="icon icon-arrow-right"></i>
                  </a>
               </div>
               <div class="overlay"></div>
            </div>
         </div>

      </div>
   </div>
   <!-- SERVICES END -->
   <!-- FEATURES START
      ============================================= -->
   <div class="features wrapper">
      <div class="container">
         <div class="row">
            <div class="section-title text-center wow fadeIn">
               <h2>Why Choose Us</h2>
            </div>
            <div class="features-wrap row">
               <div class="col-md-4">
                  <div class="features-item wow fadeInUp" data-wow-delay="0.5s">
                     <div class="icon-wrap">
                        <i class="icon icon-delivery"></i>
                     </div>
                     <div class="text">
                        <h4>SUPPLIES</h4>
                        <p>Lorem ipsum dolor sit amet, consec adip tesque tinciunt rutrum sapien, sed diam.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="features-item wow fadeInUp" data-wow-delay="0.8s">
                     <div class="icon-wrap">
                        <i class="icon icon-airplane"></i>
                     </div>
                     <div class="text">
                        <h4>CUSTOM</h4>
                        <p>Lorem ipsum dolor sit amet, consec adip tesque tinciunt rutrum sapien, sed diam.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="features-item wow fadeInUp" data-wow-delay="1.2s">
                     <div class="icon-wrap">
                        <i class="icon icon-cargo"></i>
                     </div>
                     <div class="text">
                        <h4>PACKING</h4>
                        <p>Lorem ipsum dolor sit amet, consec adip tesque tinciunt rutrum sapien, sed diam.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="features-item wow fadeInUp" data-wow-delay="1.3s">
                     <div class="icon-wrap">
                        <i class="icon icon-container"></i>
                     </div>
                     <div class="text">
                        <h4>WAREHOUSING</h4>
                        <p>Lorem ipsum dolor sit amet, consec adip tesque tinciunt rutrum sapien, sed diam.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="features-item wow fadeInUp" data-wow-delay="1.6s">
                     <div class="icon-wrap">
                        <i class="icon icon-box-delivery"></i>
                     </div>
                     <div class="text">
                        <h4>CARGO INSURANCE</h4>
                        <p>Lorem ipsum dolor sit amet, consec adip tesque tinciunt rutrum sapien, sed diam.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="features-item wow fadeInUp" data-wow-delay="1.9s">
                     <div class="icon-wrap">
                        <i class="icon icon-storage"></i>
                     </div>
                     <div class="text">
                        <h4>FREIGHT FORWARDING</h4>
                        <p>Lorem ipsum dolor sit amet, consec adip .</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- FEATURES END -->
   <!-- TESTIMONIAL START
      ============================================= -->
   <div class="testimonial wrapper with-bg" 
   style="background-image: url({{url('assets/img/custom/edit_2.jpg')}});
    background-size: cover;
    background-attachment: fixed">
      <div class="container">
         <div class="row">
            <div class="section-title text-center wow fadeIn">
               <h2>Customer Reference</h2>
            </div>
            <div class="owl-carousel wow fadeIn" data-wow-delay="0.5s">
               <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Bayan Resources</h3>
                     </div>
                  </div>
               </div>
               <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-2.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Ben Line Agency</h3>
                     </div>
                  </div>
               </div>

               <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Beton Perkasa Wijaksana</h3>
                     </div>
                  </div>
               </div>

               <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Artawa Indonesia</h3>
                     </div>
                  </div>
               </div>

               <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Weda Bay Nickel</h3>
                     </div>
                  </div>
               </div>

               <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Hutama Karya Persero (Tbk)</h3>
                     </div>
                  </div>
               </div>

               <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Boma Bisma Industry</h3>
                     </div>
                  </div>
               </div>

               <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Semen Bosowa Maros</h3>
                     </div>
                  </div>
               </div>

               <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Bio Inti Agrindo</h3>
                     </div>
                  </div>
               </div>

               <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Bumi Teknokultura Unggul</h3>
                     </div>
                  </div>
               </div>

                <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Medco Energy</h3>
                     </div>
                  </div>
               </div>

                <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Rekayasa Industr</h3>
                     </div>
                  </div>
               </div>

                <div class="testimonial-item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  <div class="client-info">
                     <img src="{{url('assets/img/content/client-photo-1.png')}}" alt="" />
                     <div class="client-details">
                        <h3>PT. Bakrie Konstruksi</h3>
                     </div>
                  </div>
               </div>

            </div>
          <!--   <div class="our-partner">
               <div class="partner-logo col-md-15 wow fadeIn" data-wow-delay="0.3s">
                  <img src="{{url('assets/img/content/partner-01.png')}}" alt="" />
               </div>
               <div class="partner-logo col-md-15 wow fadeIn" data-wow-delay="0.6s">
                  <img src="{{url('assets/img/content/partner-02.png')}}" alt="" />
               </div>
               <div class="partner-logo col-md-15 wow fadeIn" data-wow-delay="0.9s">
                  <img src="{{url('assets/img/content/partner-03.png')}}" alt="" />
               </div>
               <div class="partner-logo col-md-15 wow fadeIn" data-wow-delay="1.2s">
                  <img src="{{url('assets/img/content/partner-04.png')}}" alt="" />
               </div>
               <div class="partner-logo col-md-15 wow fadeIn" data-wow-delay="1.5s">
                  <img src="{{url('assets/img/content/partner-05.png')}}" alt="" />
               </div>
            </div> -->
         </div>
      </div>
   </div>
   <!-- TESTIMONIAL END -->
</section>
<!-- CONTENT END -->
@endsection

@section('additional-js')
<script type="text/javascript" src="{{url('assets/js/formcalculations.js')}}"></script>
@endsection