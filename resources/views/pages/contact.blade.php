@extends('layouts.main')

@section('title')
<title>Lintas Logistik | Contact Us</title>
@endsection

@section('additional-css')

@endsection

@section('script-after-jquery')

@endsection

@section('content')
<!-- PAGE TITLE START
   ============================================= -->
<section class="page-title wrapper clearfix" 
         style="background-image: url({{url('assets/img/custom/edit_2.jpg')}});">
   <div class="container">
      <div class="row">
         <div class="title-wrap wow fadeIn" data-wow-delay="1s">
            <h1>Contact</h1>
            <div class="breadcrumbs">
               <p>You Are Here : 
                  <span><a href="{{url('/')}}" style="color: white">Home</a></span>
                  <span class="arrow"><i class="icon icon-arrow-right"></i></span>
                  <span>Contact</span>
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- PAGE TITLE END -->
<!-- CONTENT START
   ============================================= -->
<section id="content" class="clearfix">
   <!-- SINGLE SERVICES START
      ============================================= -->
   <div class="contact-page wrapper bg-color">
      <div class="container">
         <div class="row">
            <div class="contact-wrap row">
               <div class="contact-details col-md-4">
                  <div class="address wow fadeInLeft" data-wow-delay="0.3s">
                     <h4 class="title">Our Office Address</h4>
                     <h4>Surabaya</h4>
                     <p>Ruko Perkantoran</p>
                     <p>Jl. Laksda M. Nasir Blok G 16</p>
                     <br>
                     <h4>Jakarta</h4>
                     <p>Ruko Gading Permai </p>
                     <p>Jl. Boulevard Raya Blok WE2/2D</p>
                     <p>Kelapa Gading - Jakarta Utara 14250</p>

                     <p>Telephone : F. +62 21 45844336</p>
                     <p>Email : ops.lintasjkt@gmail.com</p>
                  </div>
                  <div class="hours wow fadeInLeft" data-wow-delay="0.6s">
                     <h4 class="title">Our Office Hours</h4>
                     <p>Monday : <span>08.00 - 16.00</span></p>
                     <p>Tuesday : <span>08.00 - 16.00</span></p>
                     <p>Wednesday : <span>08.00 - 16.00</span></p>
                     <p>Thursday : <span>08.00 - 16.00</span></p>
                     <p>Friday : <span>08.00 - 16.00</span></p>
                     <p>Saturday : <span>08.00 - 16.00</span></p>
                  </div>
               </div>
               <div class="contact-form col-md-8">
                  <form method="post" class="row">
                     <p class="name col-md-6">
                        <label>Name</label>
                        <input type="text" name="name">
                     </p>
                     <p class="email col-md-6">
                        <label>Email</label>
                        <input type="text" name="email">
                     </p>
                     <p class="telephone col-md-6">
                        <label>Telephone</label>
                        <input type="text" name="telephone">
                     </p>
                     <p class="subject col-md-6">
                        <label>Subject</label>
                        <input type="text" name="subject">
                     </p>
                     <p class="message col-md-12">
                        <label>Message</label>
                        <textarea name="message" cols="45" rows="7"></textarea>
                     </p>
                     <p class="col-md-12">
                        <a href="#" class="button-normal">Send Message</a>
                     </p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6">
         <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.2032411831624!2d112.72490637411121!3d-7.217643070866629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f8c8dcb13da1%3A0x8a83a0d4a8b5f163!2sJl.%20Laksda%20Moh.%20Nazir%2C%20Perak%20Bar.%2C%20Kec.%20Krembangan%2C%20Surabaya%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1716230234771!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
      <div class="col-md-6">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7833407790395!2d106.90283597409547!3d-6.159765160369659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f53169d58dfb%3A0x87c6e44b6abb6be0!2sJl.%20Boulevard%20Raya%20Blok%20WE2%20No.1%202d%2C%20RT.11%2FRW.18%2C%20Klp.%20Gading%20Tim.%2C%20Kec.%20Klp.%20Gading%2C%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2014240!5e0!3m2!1sid!2sid!4v1716230283581!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
   
   <!-- SINGLE SERVICES END -->
</section>
<!-- CONTENT END -->
@endsection

@section('additional-js')

@endsection