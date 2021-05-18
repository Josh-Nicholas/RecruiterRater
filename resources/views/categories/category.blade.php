@extends('app')

@section('title', 'Recruiter | Categories')

@section('additional_css')

@stop('additional_css')

@section('content')
   <!-- BEGIN: Content-->
    <div class="header-fix"></div>

    <!-- ----------------------------------  Main content -->
    <section id="contact" class="account">

        <img class="login-detail-left" src="{{ asset('assets/images/login-detail-left.png') }}">
        <img class="login-detail-right" src="{{ asset('assets/images/login-detail-right.png') }}">

        <div class="background-wrapper">
            <h2 class="text-center">Best In <strong>Sector</strong></h2>
            <h5 class="top-page-subtitle text-center">Top-rated businesses in the Animals & Pets category</h5>

            <div class="container h-100">
                <div class="row h-100 height-auto">

                    <!-- ---------------------------------- Left Aside content -->
                    <div class="col-lg-3">
                        <aside class="">
                            <div class="aside-categories main-box-shadow bg-white">
                                <h3>
                                    <a class="w-100 theme-txt-color text-bold" data-toggle="collapse" href="#collapseLeftAside" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Categories
                                    </a>
                                </h3>

                                <div class="collapse" id="collapseLeftAside">
                                    <div class="position-relative card-body">
                                        <a href="#" class="w-100 f-15 back-to-categories">View all categories</a>
                                        <p class="current-category"><a href="#" class="f-15">Animals & Pets</a></p>

                                        <ul class="list-unstyled f-15 pl-3">
                                            <li><a href="#">Bars & Cafes</a></li>
                                            <li><a href="#">Vegetarian & Diet</a></li>
                                            <li><a href="#">Takeaway</a></li>
                                            <li><a href="#">General Restaurants</a></li>
                                            <li><a href="#">Japanese Cuisine</a></li>
                                            <li><a href="#">European Cuisine</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="aside-subcategories mt-5">
                                <h3 class="w-100 theme-txt-color text-bold f-20">Popular subcategories</h3>

                                <ul class="list-unstyled">
                                    <li class="d-inline-flex">
                                        <a href="#" class="p-2 f-15 text-decoration-none main-box-shadow bg-white my-2 hover-blue-btn-effect">Restaurant</a>
                                    </li>
                                    <li class="d-inline-flex">
                                        <a href="#" class="p-2 f-15 text-decoration-none main-box-shadow bg-white my-2 hover-blue-btn-effect">Take Away Service</a>
                                    </li>
                                    <li class="d-inline-flex">
                                        <a href="#" class="p-2 f-15 text-decoration-none main-box-shadow bg-white my-2 hover-blue-btn-effect">Bar</a>
                                    </li>
                                    <li class="d-inline-flex">
                                        <a href="#" class="p-2 f-15 text-decoration-none main-box-shadow bg-white my-2 hover-blue-btn-effect">Fast Food Restaurant</a>
                                    </li>
                                    <li class="d-inline-flex">
                                        <a href="#" class="p-2 f-15 text-decoration-none main-box-shadow bg-white my-2 hover-blue-btn-effect">Restaurant Supply Store</a>
                                    </li>
                                    <li class="d-inline-flex">
                                        <a href="#" class="p-2 f-15 text-decoration-none main-box-shadow bg-white my-2 hover-blue-btn-effect">Coctail Bar</a>
                                    </li>
                                    <li class="d-inline-flex">
                                        <a href="#" class="p-2 f-15 text-decoration-none main-box-shadow bg-white my-2 hover-blue-btn-effect">Wine Bar</a>
                                    </li>
                                    <li class="d-inline-flex">
                                        <a href="#" class="p-2 f-15 text-decoration-none main-box-shadow bg-white my-2 hover-blue-btn-effect">Coffe Shop</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="aside-search input-group mb-3 mt-5">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Search reviews" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- ---------------------------------- Left Aside content -->

                    <!-- ---------------------------------- Middle content -->
                    <div class="col-lg-6 d-flex flex-column">

                        @foreach($cReviews as $key => $creview)
                            <div class="review-card main-box-shadow bg-white w-100 mb-5">
                                <div class="review-card-header">
                                    <img src="{{ asset($creview->company_image) }}" alt="starbucks background" title="starbucks background" class="img-fluid">
                                </div>

                                <div class="card-body row">
                                    <div class="col-sm-2 card-logo mb-3">
                                        <img src="{{ asset($creview->company_logo) }}">
                                    </div>

                                    <div class="col-sm-10">
                                        <h5 class="card-title f-15 w-100"><strong>Starbucks Ltd</strong></h5>
                                        <div class="row w-100 justify-content-between">
                                            <div class="col card-rating d-flex">
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                            </div>
                                            <p class="col f-15">1240 reviews</p>
                                            <p class="col f-15">Score 4.8</p>
                                        </div>

                                        <div class="w-100 text-left card-link mb-3">
                                            <a class="link-unstyled text-dark f-15" href="http://{{ $creview->website }}" target='blank'>{{ $creview->website }}</a>
                                        </div>

                                        <div class="w-100 text-left card-location">
                                            <p class="f-15">{{ $creview->location }}</p>
                                            <a href="{{ url('/categories/'.$creview->id) }}" class="company-details">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <nav aria-label="Page navigation example" class="review-cards-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">&#10094;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&#10095;</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- ---------------------------------- END Main content -->

                    <!-- ---------------------------------- Right Aside content -->
                    <div class="col-lg-3">
                        <aside class="main-box-shadow bg-white aside-filters">
                            <h3>
                                <a class="link-unstyled f-15" data-toggle="collapse" href="#collapseRightAside" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Filters
                                </a>
                            </h3>

                            <div class="collapse card-body px-0" id="collapseRightAside">

                                <form action="#" class="aside-filter-form mb-3">
                                    <label class="f-15 mb-3" for="zip-code">City or Zip code</label>
                                    <input class="f-15 mb-3" type="text" name="zip-code" id="zip-code" />
                                    <input type="submit" value="Apply">
                                </form>

                                <form action="#" class="mb-3">
                                    <p class="f-15 mb-3">No. of reviews</p>
                                    <input type="radio" id="all" name="reviewsnum" value="all">
                                    <label for="all" class="f-15">All</label><br>
                                    <input type="radio" id="twenty-five" name="reviewsnum" value="25">
                                    <label for="twenty-five" class="f-15">25</label><br>
                                    <input type="radio" id="fifty" name="reviewsnum" value="50">
                                    <label for="fifty" class="f-15">50</label><br>
                                    <input type="radio" id="hundred" name="reviewsnum" value="100">
                                    <label for="hundred" class="f-15">100</label><br>
                                    <input type="radio" id="two-hundred" name="reviewsnum" value="250">
                                    <label for="two-hundred" class="f-15">250</label><br>
                                    <input type="radio" id="five-hundred" name="reviewsnum" value="500">
                                    <label for="five-hundred" class="f-15">500</label>
                                </form>

                                <form action="#">
                                    <p class="f-15">Time period</p>
                                    <input type="radio" id="all-time" name="period" value="alltime">
                                    <label for="all-time" class="f-15">All time</label><br>
                                    <input type="radio" id="six-months" name="period" value="6">
                                    <label for="six-months" class="f-15">6 months</label><br>
                                    <input type="radio" id="twelve-months" name="period" value="12">
                                    <label for="twelve-months" class="f-15">12 months</label><br>
                                    <input type="radio" id="eighteen-months" name="period" value="18">
                                    <label for="eighteen-months" class="f-15">18 months</label>
                                </form>
                            </div>
                        </aside>
                    </div>
                    <!-- ---------------------------------- END Right Aside content -->
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------- END  Main content -->

    <!-- ------------ Recently reviewed slider -->
    <section id="recent-reviews" class="recent-reviewed">
        <div class="container">
            <h2 class="text-center">Recently <strong>Reviewed</strong></h2>
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
        </div>
    </section>
    <!-- ------------ END  Recently reviewed slider -->

    <!-- END: Content-->
@endsection

@section('additional_script')

@endsection
