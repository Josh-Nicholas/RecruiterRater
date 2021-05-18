@extends('app')

@section('title', 'Recruiter | About Us')

@section('additional_css')

@stop('additional_css')

@section('content')
    <!-- BEGIN: Content-->
    <div class="header-fix"></div>

    <div class="container-fluid about-first-section">
        <div class="row">
            <div class="col-md-6 pr-lg-0">
                <img src="{{ asset('assets/images/upcoming-interview.png') }}">
            </div>
            <div class="col-md-6 column h-100 first-section-text px-lg-0">
                <div class="first-text-block pt-5">
                    <h1>Want to Learn More About the Upcoming <strong>Interviewer?</strong></h1>
                    <p>Write more info, about business, clients, features etc . Write more info, about business, clients, features etc . Write more info, about business, clients, features etc .</p>
                </div>
                <div class="second-text-block pl-lg-5 pt-5">
                    <h2>Want to Learn More About the Upcoming <strong>Interviewer?</strong></h2>
                    <p>Write more info, about business, clients, features etc . Write more info, about business, clients, features etc . Write more info, about business, clients, features etc .</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 position-relative">
        <img class="detail-1" src="{{ asset('assets/images/detail1.png') }}">
        <img class="detail-2" src="{{ asset('assets/images/detail2.png') }}">
        <div class="container how-it-works-container">
            <div class="row">
                <div class="col-md-5">
                    <div class="onboarding-button">CUSTOMER ONBOARDING</div>
                    <h2>How Recruiterrater <strong>Works?</strong></h2>
                    <p>We can describe how app works<br>With nice icons<br>That reflect the feature</p>
                    <button class="join-us-button">Join now</button>
                </div>
                <div class="col-md-7">
                    <img src="{{ asset('assets/images/how-it-works-img.png') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="container latest-news-section">
        <div class="col-md-12">
            <div class="latest-news-blog-btn">Blog</div>
            <h2>Latest <strong>news</strong></h2>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="border-div">
                    <div class="latest-news-block">
                        <div class="blog-date-button">16 Dec 2019</div>
                        <h3>Turning customers into partners and friends</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam adipiscing elit, sed diam consectetuer adipiscing elit, sed diam adipiscing elit, sed diam…</p>
                    </div>
                    <div class="latest-news-block">
                        <div class="blog-date-button">16 Jan 2019</div>
                        <h3>Improving usability to increase satisfaction</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam adipiscing elit, sed diam….</p>
                    </div>
                    <div class="latest-news-block">
                        <div class="blog-date-button">29 Feb 2019</div>
                        <h3>Using data analysis insight to inform decisions</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam adipiscing elit, sed diam consectetuer adipiscing elit, sed diam adipiscing elit, sed diam…</p>
                    </div>
                    <div class="latest-news-block">
                        <div class="blog-date-button">29 Feb 2019</div>
                        <h3>Building real relationships</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam adipiscing elit, sed diam consectetuer adipiscing elit, sed diam adipiscing elit, sed diam…</p>
                        <button class="last-article-read-more">Read more</butto>
                    </div>
                </div>
                <div class="text-center">
                    <button class="read-blog-btn">Read blog</button>
                    </div>
                </div>
                <div class="col-md-7 position-relative">
                    <img class="long-image" src="{{ asset('assets/images/blog-article-image.png') }}">
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 customers-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/video-picture.png') }}">
                        <div class="video-card">
                            <h6 class="video-subtitle">Company</h6>
                            <h3 class="video-title">Growing my business</h3>
                            <p class="video-article">We are glad to have the opportunity to connect on a deeper level with potential employees. </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="customers-little-title">CUSTOMERS</div>
                        <h2 class="customers-title">Our Partners are Every Day People Who are Seeking for a <strong>Better Career Opportunities</strong></h2>
                        <p class="customers-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam adipiscing elit, sed diam consectetuer adipiscing elit, sed diam adipiscing elit, sed dia, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam adipiscing
                            elit, sed diam consectetuer adipiscing elit, sed diam adipiscing elit, sed diam…</p>
                        <button class="customers-button">People like us do this</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="sponsors-section">
            <div class="brands">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="brands_slider_container">
                                <div class="owl-carousel owl-theme brands_slider">
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_1.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_2.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_4.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_5.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_3.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_6.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_7.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_8.jpg" alt=""></div>
                                    </div>
                                </div>
                                <!-- Brands Slider Navigation -->
                                <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                                <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('additional_script')


@endsection
