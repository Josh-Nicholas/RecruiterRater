@extends('app')

@section('title', 'Recruiter home')

@section('additional_css')
  
@stop('additional_css')

@section('content')
   <!-- BEGIN: Content-->
   <div class="header-fix"></div>
   <section id="banner">
      <div class="container-fluid">
         <div class="row align-items-center justify-content-center">
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="banner-box">
                     <p class="f-button">Share your story</p>
                     <h1>The Power of Rating <strong>Recruiters</strong></h1>
                     <p>
                           Share your story, feedback and experience about your recruitment journey. By sharing your experience it will help other candidates to feel not so alone in their experiences and be able to make quicker and more thoughtful decisions about who to work with.
                           Receiving valuable feedback also provides recruiters with areas of improvement; many are crying out for credible, reliable feedback!
                     </p>
                     <div class="d-flex flex-column align-items-start">
                           <a class="button my-2" href="#">Leave a review</a>
                           <a class="button my-2" href="#">Read a Review</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="banner-image-box">
                     <img src="{{ asset('assets/images/banner-foto.png') }}" alt="Rate recruiters">
                  </div>
               </div>
               <div class="absolute-pics">
                  <div class="figure1">
                     <img src="{{ asset('assets/images/figure1.png') }}" alt="Figure1">
                  </div>
                  <div class="figure2 sm-none">
                     <img src="{{ asset('assets/images/figure2.png') }}" alt="Figure2">
                  </div>
               </div>
         </div>
      </div>
   </section>

   <section id="browse-category">
      <div class="absolute-pics">
         <div class="figure1">
               <img src="{{ asset('assets/images/figure3.png') }}" alt="Figure1">
         </div>
      </div>
      <div class="container">
         <h2 class="text-center pb-2">Read a <strong>review</strong></h2>
         <h2 class="text-center pt-2">Trending <strong>Sectors</strong></h2>
      </div>
      <div class="browse-boxes">
         <div class="owl-carousel owl-theme browse-carousel">
               <div class="owl-item">
                  <div class="single-box">
                     <a href="#">
                           <div class="browse-box d-flex flex-column justify-content-center align-items-center">
                              <div class="browse-img">
                                 <img src="{{ asset('assets/images/browse1.png') }}" alt="Shopping &amp; Fashion">
                              </div>
                              <p>Shopping &amp; Fashion</p>
                           </div>
                     </a>
                  </div>
               </div>
               <div class="owl-item">
                  <div class="single-box">
                     <a href="#">
                           <div class="browse-box d-flex flex-column justify-content-center align-items-center">
                              <div class="browse-img">
                                 <img src="{{ asset('assets/images/browse2.png') }}" alt="Financial Services">
                              </div>
                              <p>Financial Services</p>
                           </div>
                     </a>
                  </div>
               </div>
               <div class="owl-item">
                  <div class="single-box">
                     <a href="#">
                           <div class="browse-box d-flex flex-column justify-content-center align-items-center">
                              <div class="browse-img">
                                 <img src="{{ asset('assets/images/browse3.png') }}" alt="Marketing">
                              </div>
                              <p>Marketing</p>
                           </div>
                     </a>
                  </div>
               </div>
               <div class="owl-item">
                  <div class="single-box">
                     <a href="#">
                           <div class="browse-box d-flex flex-column justify-content-center align-items-center">
                              <div class="browse-img">
                                 <img src="{{ asset('assets/images/browse4.png') }}" alt="Public Sector">
                              </div>
                              <p>Public Sector</p>
                           </div>
                     </a>
                  </div>
               </div>
               <div class="owl-item">
                  <div class="single-box">
                     <a href="#">
                           <div class="browse-box d-flex flex-column justify-content-center align-items-center">
                              <div class="browse-img">
                                 <img src="{{ asset('assets/images/browse5.png') }}" alt="Public Sector">
                              </div>
                              <p>Hospitality</p>
                           </div>
                     </a>
                  </div>
               </div>
               <div class="owl-item">
                  <div class="single-box">
                     <a href="#">
                           <div class="browse-box d-flex flex-column justify-content-center align-items-center">
                              <div class="browse-img">
                                 <img src="{{ asset('assets/images/browse6.png') }}" alt="Legal">
                              </div>
                              <p>Legal</p>
                           </div>
                     </a>
                  </div>
               </div>
         </div>
         <div class="browse-navigation">
               <div class="browse_prev"><img src="{{ asset('assets/images/left-arrow.svg') }}" alt="Previous arrow"></div>
               <div class="browse_next"><img src="{{ asset('assets/images/right-arrow.svg') }}" alt="Next arrow"></div>
         </div>
      </div>
      <div class="browse-button text-center">
         <a class="button" href="#">Go take a look!</a>
      </div>
   </section>

   <section id="recent-reviews">
      <div class="container">
         <h2 class="text-center">Recent <strong>reviews</strong></h2>
      </div>
      <div class="reviews-boxes">

         <div class="owl-carousel owl-theme review-carousel">
            @foreach($fReviews as $key => $freview)
               <div class="owl-item">
                  <div class="review-box">
                     <div class="review-header">
                        @if(empty($freview->avatar))
                           <img src="{{ asset('assets/images/profile-pic-r.png') }}" alt="Profile picture">
                        @else
                           <img src="{{ asset($freview->avatar) }}" alt="Profile picture">
                        @endif
                        <span><strong>{{ $freview->name }}&nbsp;{{ $freview->surname }}</strong> reviewed <strong>{{ $freview->team }}</strong></span>
                     </div>
                     <div class="review-content">
                        <p>{{ $freview->review_content }}</p>
                     </div>
                     <div class="rate-img review-rating text-right">
                        @if($freview->experience_stars == 1)
                           <img src="{{ asset('assets/images/rating1.svg') }}" alt="Rating">
                        @elseif($freview->experience_stars == 2)
                           <img src="{{ asset('assets/images/rating2.svg') }}" alt="Rating">
                        @elseif($freview->experience_stars == 3)
                           <img src="{{ asset('assets/images/rating3.svg') }}" alt="Rating">
                        @elseif($freview->experience_stars == 4)
                           <img src="{{ asset('assets/images/rating4.svg') }}" alt="Rating">
                        @else
                           <img src="{{ asset('assets/images/rating5.svg') }}" alt="Rating">
                        @endif
                     </div>
                     <div class="review-meta text-right">
                        <span>1500 Reviews at <strong>Google</strong></span>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>

         <div class="owl-carousel owl-theme review-carousel2">
            @foreach($sReviews as $key => $sreview)
               <div class="owl-item">
                  <div class="review-box">
                     <div class="review-header">
                        @if(empty($sreview->avatar))
                           <img src="{{ asset('assets/images/profile-pic-r.png') }}" alt="Profile picture">
                        @else
                           <img src="{{ asset($sreview->avatar) }}" alt="Profile picture">
                        @endif
                        <span><strong>{{ $sreview->name }}&nbsp;{{ $sreview->surname }}</strong> reviewed <strong>{{ $sreview->team }}</strong></span>
                     </div>
                     <div class="review-content">
                        <p>{{ $sreview->review_content }}</p>
                     </div>
                     <div class="rate-img review-rating text-right">
                        @if($sreview->experience_stars == 1)
                           <img src="{{ asset('assets/images/rating1.svg') }}" alt="Rating">
                        @elseif($sreview->experience_stars == 2)
                           <img src="{{ asset('assets/images/rating2.svg') }}" alt="Rating">
                        @elseif($sreview->experience_stars == 3)
                           <img src="{{ asset('assets/images/rating3.svg') }}" alt="Rating">
                        @elseif($sreview->experience_stars == 4)
                           <img src="{{ asset('assets/images/rating4.svg') }}" alt="Rating">
                        @else
                           <img src="{{ asset('assets/images/rating5.svg') }}" alt="Rating">
                        @endif
                     </div>
                     <div class="review-meta text-right">
                        <span>1500 Reviews at <strong>Google</strong></span>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>

      </div>
   </section>

   <section id="our-partners">
      <div class="our-partners-boxes">
         <div class="container">
            <h2 class="text-center">Our <strong>Partners</strong></h2>
         </div>
         <div class="row">
               <div class="container d-flex flex-column">
                  <p>Logos and names to follow:</p>
                  <ul>
                     <li>
                        <p class="mb-1">Oakleaf Partnership</p>
                     </li>
                     <li>
                        <p class="mb-1">Eyzon</p>
                     </li>
                     <li>
                        <p class="mb-1">Carnegie</p>
                     </li>
                     <li>
                        <p class="mb-1">Aspiga</p>
                     </li>
                  </ul>
               </div>
               <div class="col">
                  <div class="brands_slider_container">
                     <div class="owl-carousel owl-theme partners_slider">
                           <div class="owl-item">
                              <div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('assets/images/partner1.png') }}" alt="Partner logo"></div>
                           </div>
                           <div class="owl-item">
                              <div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('assets/images/partner2.png') }}" alt="Partner logo"></div>
                           </div>
                           <div class="owl-item">
                              <div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('assets/images/partner3.png') }}" alt="Partner logo"></div>
                           </div>
                     </div>
                     <!-- Brands Slider Navigation -->
                     <div class="browse-navigation">
                           <div class="partner_prev"><img src="{{ asset('assets/images/left-arrow.svg') }}" alt="Previous arrow"></div>
                           <div class="partner_next"><img src="{{ asset('assets/images/right-arrow.svg') }}" alt="Next arrow"></div>
                     </div>
                  </div>
               </div>
         </div>
         <div class="absolute-pics">
               <div class="figure1">
                  <img src="{{ asset('assets/images/figure1.png') }}" alt="Figure1">
               </div>
         </div>
      </div>
   </section>

   <section id="home-tool">
      <div class="container-fluid">
         <div class="row align-items-center justify-content-center">
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="banner-box">
                     <p class="f-button">Transparent and always honest</p>
                     <h2>What <strong>do we mean</strong> by recruiter?</h2>
                     <p>User generated content is amongst the most transparent ways to show good or bad performance. Our team members will ensure that each review is validated and trustworthy.</p>
                     <p>A recruiter can be:</p>
                     <ul>
                           <li>
                              <p class="mb-1">Recruitment agency</p>
                           </li>
                           <li>
                              <p class="mb-1">Search Firm</p>
                           </li>
                           <li>
                              <p class="mb-1">Headhunter</p>
                           </li>
                           <li>
                              <p class="mb-1">In house Talent team (HR) – your recruiter can also be your hiring company!</p>
                           </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="banner-image-box position-relative">
                     <img src="{{ asset('assets/images/tool1.png') }}" alt="">
                     <p class="absolute-text-on-img">Coming soon a video of Steve and Pippa and Bilbo explaining how to use RecruiterRater 1-1.5 mins.</p>
                  </div>
               </div>
         </div>
      </div>
      <div class="absolute-pics">
         <div class="figure4">
               <img src="{{ asset('assets/images/figure4.png') }}" alt="Figure4">
         </div>
         <div class="figure1">
               <img src="{{ asset('assets/images/figure3.png') }}" alt="Figure1">
         </div>
      </div>
   </section>

   <section id="we-are">
      <div class="container-fluid">
         <div class="row align-items-center justify-content-center">
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="banner-image-box">
                     <img src="{{ asset('assets/images/weare1.png') }}" alt="">
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-center">
                  <div class="banner-box">
                     <p class="f-button">About us</p>
                     <h2>We are <strong>RecruiterRater</strong></h2>
                     <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     <p class="text-center description mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
               </div>
         </div>
      </div>
      <div class="absolute-pics sm-none">
         <div class="figure1">
               <img src="{{ asset('assets/images/figure2.png') }}" alt="Figure1">
         </div>
      </div>
   </section>

   <section id="trusted">
      <div class="container-fluid">
         <h3>Customers</h3>
         <h2><strong>They trusted us</strong></h2>
         <p>We appreciate your trust and we trust you to provide honest reviews.</p>
      </div>
      <div class="absolute-pics">
         <div class="figure1">
               <img src="{{ asset('assets/images/figure2.png') }}" alt="Figure1" class="f1">
               <img src="{{ asset('assets/images/profile3.png') }}" alt="Profile picture" class="pp3">
               <img src="{{ asset('assets/images/profile4.png') }}" alt="Profile picture" class="pp4">
               <img src="{{ asset('assets/images/profile5.png') }}" alt="Profile picture" class="pp5">
               <img src="{{ asset('assets/images/profile6.png') }}" alt="Profile picture" class="pp6">
         </div>
      </div>
      <div class="container-fluid">
         <div class="owl-carousel owl-theme">
               <div class="item-review-custom first prev-review-custom">
                  <div class="card-review-custom">
                     <div class="row justify-content-center">
                           <img src="{{ asset('assets/images/big-quote.png') }}" class="bigq">
                           <img src="{{ asset('assets/images/profile1.png') }}" class="profile-pic">
                     </div>
                     <div class="content-box">
                           <img src="{{ asset('assets/images/small-quote.png') }}" class="smallq">
                           <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                     </div>
                  </div>
               </div>
               <div class="item-review-custom show">
                  <div class="card-review-custom">
                     <div class="row justify-content-center">
                           <img src="{{ asset('assets/images/big-quote.png') }}" class="bigq">
                           <img src="{{ asset('assets/images/profile2.png') }}" class="profile-pic">
                     </div>
                     <div class="content-box">
                           <img src="{{ asset('assets/images/small-quote.png') }}" class="smallq">
                           <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam.</p>
                     </div>
                  </div>
               </div>
               <div class="item-review-custom next-review-custom">
                  <div class="card-review-custom">
                     <div class="row justify-content-center">
                           <img src="{{ asset('assets/images/big-quote.png') }}" class="bigq">
                           <img src="{{ asset('assets/images/profile1.png') }}" class="profile-pic">
                     </div>
                     <div class="content-box">
                           <img src="{{ asset('assets/images/small-quote.png') }}" class="smallq">
                           <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                     </div>
                  </div>
               </div>
               <div class="item-review-custom last">
                  <div class="card-review-custom">
                     <div class="row justify-content-center">
                           <img src="{{ asset('assets/images/big-quote.png') }}" class="bigq">
                           <img src="{{ asset('assets/images/profile2.png') }}" class="profile-pic">
                     </div>
                     <div class="content-box">
                           <img src="{{ asset('assets/images/small-quote.png') }}" class="smallq">
                           <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam.</p>
                     </div>
                  </div>
               </div>
         </div>
         <div class="browse-navigation">
               <div class="trusted_prev"><img src="{{ asset('assets/images/left-arrow.svg') }}" alt="Previous arrow"></div>
               <div class="trusted_next"><img src="{{ asset('assets/images/right-arrow.svg') }}" alt="Next arrow"></div>
         </div>
      </div>
   </section>
   
   <section id="subscribe">
      <div class="container-fluid">
         <div class="row align-items-center justify-content-center">
               <div class="col-lg-4">
                  <h3>Help us to help you</h3>
                  <h2><strong>Join us</strong></h2>
                  <p>Help us to help you by sharing your preferences: We’re looking to create a candidate focused community – tell us want you want to see and hear about!</p>
                  <ul>
                     <li>
                           <p class="mb-1">Candidate Forums</p>
                     </li>
                     <li>
                           <p class="mb-1">Communities</p>
                     </li>
                     <li>
                           <p class="mb-1">Focus Groups</p>
                     </li>
                  </ul>
               </div>
               <div class="col-lg-8">
                  <form action="" class="">
                     <input type="text" placeholder="First name">
                     <input type="text" placeholder="Last name">
                     <input type="text" placeholder="Email">
                     <input type="submit" value="I’d like to join you!">
                  </form>
                  <p>This will help us develop the site! Thank you</p>
               </div>
         </div>
      </div>
   </section>

  <!-- END: Content-->
@endsection

