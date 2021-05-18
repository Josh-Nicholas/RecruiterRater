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

            <img class="body-left-element" src="{{ asset('assets/images/body-left-element.png') }}">
            <img class="body-right-element" src="{{ asset('assets/images/figure2.png') }}">

            <div class="container">

                <div class="review-card single-review main-box-shadow bg-white w-100 mb-5">
                    <div class="review-card-header">
                        <img src="{{ asset('assets/images/starbucks-back.png') }}" alt="starbucks background" title="starbucks background" class="img-fluid">
                    </div>

                    <div class="card-body row">
                        <div class="col-md-4 card-logo mb-3 d-flex flex-column flex-md-row align-items-center align-items-md-left">
                            <img class="mr-md-3" src="{{ asset('assets/images/starbucks.png') }}" alt="logo" title="logo">

                            <div class="d-flex flex-column align-self-sm-center">
                                <h5 class="card-title f-15 w-100 text-center text-md-left"><strong>Starbucks</strong></h5>
                                <div class="w-100 text-left card-location">
                                    <p class="f-15 mb-sm-0">United States</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="d-flex flex-column flex-md-row w-100 justify-content-between">
                                <div class="col card-rating d-flex justify-content-center justify-content-md-start">
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </div>

                                <p class="col f-15 text-center text-md-left">1240 reviews</p>
                                <p class="col f-15 text-center text-md-left">Score 4.8</p>
                            </div>

                            <div class="w-100 text-center text-md-left card-link mb-3 dl-flex ">
                                <a class="link-unstyled text-dark f-15 w-100" href="#">www.starbucks.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-7 mb-5">

                        <div class="single-review-reviews-card main-box-shadow d-flex flex-column bg-white py-3 px-4 bg-light">
                            <div class="d-flex align-self-start mb-3">
                                <h3 class="w-100 theme-txt-color text-bold mr-4">
                                    Reviews
                                </h3>
                                <p class="f-15 w-100 mb-0 align-self-center">1240 reviews</p>
                            </div>

                            <form action="#" class="mb-3">
                                <input type="radio" id="excellent" name="reviewsaverage" value="excellent">
                                <label for="excellent" class="f-15">Excellent</label><br>
                                <input type="radio" id="great" name="reviewsaverage" value="great">
                                <label for="great" class="f-15">Great</label><br>
                                <input type="radio" id="average" name="reviewsaverage" value="average">
                                <label for="average" class="f-15">Average</label><br>
                                <input type="radio" id="poor" name="reviewsaverage" value="poor">
                                <label for="poor" class="f-15">Poor</label><br>
                                <input type="radio" id="bad" name="reviewsaverage" value="bad">
                                <label for="bad" class="f-15">Bad</label><br>
                            </form>

                            <div class="w-100 single-review-reviews-card-filter">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="f-15 main-box-shadow">All reviews</a></li>
                                    <li><a href="#" class="f-15 main-box-shadow">Process</a></li>
                                    <li><a href="#" class="f-15 main-box-shadow">Experience</a></li>
                                    <li><a href="#" class="f-15 main-box-shadow">Team</a></li>
                                    <li><a href="#" class="f-15 main-box-shadow">Job</a></li>
                                    <li><a href="#" class="f-15 main-box-shadow">Time</a></li>
                                    <li><a href="#" class="f-15 main-box-shadow">Company</a></li>
                                    <li><a href="#" class="f-15 main-box-shadow">Communication</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 single-honest-review">
                        <div class="main-box-shadow p-3 bg-white">
                            <div class="d-flex flex-column flex-md-row  align-items-center align-items-md-left">

                                <img class="mr-md-3" src="{{ asset('assets/images/profile1.png') }}" alt="avatar" title="avatar">
                                <div class="d-flex flex-column align-self-sm-center">

                                    <h5 class="card-title w-100 text-center text-md-left"><strong class="theme-blue-color">Richard Gellen</strong></h5>
                                    <div class="w-100 text-left d-flex">
                                        <p class="f-15 mb-md-0">IT Engineer</p>
                                        <p class="f-15 mb-md-0 ml-2">&#9679; 3 reviews</p>
                                    </div>
                                </div>
                            </div>
                            <div>

                                <form action="#" class="single-honest-review input-block mb-0">
                                    <textarea id="honest-review" name="honest-review" rows="3" cols="50" placeholder="Write about petty.com your honest review... " class="py-4 px-3 my-3 main-box-shadow"></textarea>

                                    <div class="rating align-self-center">
                                        <label>
                                        <input type="radio" name="stars5" value="1" />
                                        <span class="icon">★</span>
                                        </label>
                                        <label>
                                        <input type="radio" name="stars5" value="2" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        </label>
                                        <label>
                                        <input type="radio" name="stars5" value="3" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>   
                                        </label>
                                        <label>
                                        <input type="radio" name="stars5" value="4" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        </label>
                                        <label>
                                        <input type="radio" name="stars5" value="5" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        </label>
                                    </div>

                                    <input type="submit" value="Leave a review">

                                </form>

                            </div>

                        </div>

                        <div class="aside-search input-group mb-3 mt-5">

                            <input type="text" class="form-control" placeholder="Search reviews" aria-label="Search reviews" aria-describedby="basic-addon2">

                            <div class="input-group-append">

                                <button class="" type="button"><i class="fa fa-search"></i></button>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="main-box-shadow single-place-review-card bg-white">

                            <div class="single-h d-flex flex-column flex-sm-row">

                                <img src="{{ asset('assets/images/profile1.png') }}" alt="`" title="" class="mr-3">

                                <div class="d-flex flex-column align-self-sm-center">

                                    <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                    <div class="w-100 text-left d-flex">

                                        <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                        <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                    </div>

                                </div>

                            </div>

                            <div class="s-body">

                                <div class="d-flex flex-column flex-sm-row justify-content-between">

                                    <div class="card-rating d-flex justify-content-start">

                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>

                                    </div>

                                    <p class="f-15">

                                        8hours

                                    </p>

                                </div>

                                <h5 class="font-weight-normal">Excellent communication </h5>

                                <p class="f-15 mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                </p>


                            </div>

                            <div class="s-footer d-flex justify-content-between">

                                <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="main-box-shadow single-place-review-card bg-white">

                            <div class="single-h d-flex flex-column flex-sm-row">

                                <img src="{{ asset('assets/images/profile1.png') }}" alt="`" title="" class="mr-3">

                                <div class="d-flex flex-column align-self-sm-center">

                                    <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                    <div class="w-100 text-left d-flex">

                                        <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                        <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                    </div>

                                </div>

                            </div>

                            <div class="s-body">

                                <div class="d-flex flex-column flex-sm-row justify-content-between">

                                    <div class="card-rating d-flex justify-content-start">

                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>

                                    </div>

                                    <p class="f-15">

                                        8hours

                                    </p>

                                </div>

                                <h5 class="font-weight-normal">Excellent communication </h5>

                                <p class="f-15 mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                </p>


                            </div>

                            <div class="s-footer d-flex justify-content-between">

                                <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="main-box-shadow single-place-review-card bg-white">

                            <div class="single-h d-flex flex-column flex-sm-row">

                                <img src="{{ asset('assets/images/profile1.png') }}" alt="`" title="" class="mr-3">

                                <div class="d-flex flex-column align-self-sm-center">

                                    <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                    <div class="w-100 text-left d-flex">

                                        <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                        <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                    </div>

                                </div>

                            </div>

                            <div class="s-body">

                                <div class="d-flex flex-column flex-sm-row justify-content-between">

                                    <div class="card-rating d-flex justify-content-start">

                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>

                                    </div>

                                    <p class="f-15">

                                        8hours

                                    </p>

                                </div>

                                <h5 class="font-weight-normal">Excellent communication </h5>

                                <p class="f-15 mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                </p>


                            </div>

                            <div class="s-footer d-flex justify-content-between">

                                <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="main-box-shadow single-place-review-card bg-white">

                            <div class="single-h d-flex flex-column flex-sm-row">

                                <img src="{{ asset('assets/images/profile1.png') }}" alt="`" title="" class="mr-3">

                                <div class="d-flex flex-column align-self-sm-center">

                                    <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                    <div class="w-100 text-left d-flex">

                                        <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                        <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                    </div>

                                </div>

                            </div>

                            <div class="s-body">

                                <div class="d-flex flex-column flex-sm-row justify-content-between">

                                    <div class="card-rating d-flex justify-content-start">

                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>

                                    </div>

                                    <p class="f-15">

                                        8hours

                                    </p>

                                </div>

                                <h5 class="font-weight-normal">Excellent communication </h5>

                                <p class="f-15 mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                </p>


                            </div>

                            <div class="s-footer d-flex justify-content-between">

                                <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="main-box-shadow single-place-review-card bg-white">

                            <div class="single-h d-flex flex-column flex-sm-row">

                                <img src="{{ asset('assets/images/profile1.png') }}" alt="`" title="" class="mr-3">

                                <div class="d-flex flex-column align-self-sm-center">

                                    <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                    <div class="w-100 text-left d-flex">

                                        <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                        <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                    </div>

                                </div>

                            </div>

                            <div class="s-body">

                                <div class="d-flex flex-column flex-sm-row justify-content-between">

                                    <div class="card-rating d-flex justify-content-start">

                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>

                                    </div>

                                    <p class="f-15">

                                        8hours

                                    </p>

                                </div>

                                <h5 class="font-weight-normal">Excellent communication </h5>

                                <p class="f-15 mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                </p>


                            </div>

                            <div class="s-footer d-flex justify-content-between">

                                <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="main-box-shadow single-place-review-card bg-white">
                            <div class="single-h d-flex flex-column flex-sm-row">
                                <img src="{{ asset('assets/images/profile1.png') }}" alt="`" title="" class="mr-3">

                                <div class="d-flex flex-column align-self-sm-center">
                                    <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>
                                    <div class="w-100 text-left d-flex">
                                        <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>
                                        <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>
                                    </div>
                                </div>
                            </div>

                            <div class="s-body">
                                <div class="d-flex flex-column flex-sm-row justify-content-between">
                                    <div class="card-rating d-flex justify-content-start">
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </div>

                                    <p class="f-15">
                                        8hours
                                    </p>

                                </div>
                                <h5 class="font-weight-normal">Excellent communication </h5>

                                <p class="f-15 mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                </p>
                            </div>

                            <div class="s-footer d-flex justify-content-between">
                                <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>
                                <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>
                            </div>
                        </div>
                    </div>
                </div>

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
        </div>
    </section>
    <!-- ---------------------------------- END  Main content -->

    <!-- END: Content-->
@endsection

@section('additional_script')

@endsection
