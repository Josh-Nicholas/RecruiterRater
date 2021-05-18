@extends('app')

@section('title', 'Recruiter | Companies')

@section('additional_css')

@stop('additional_css')

@section('content')
    <!-- BEGIN: Content-->
    <div class="header-fix"></div>

    <section id="contact" class="account">

        <img class="login-detail-left" src="{{ asset('assets/images/login-detail-left.png') }}">
        <img class="login-detail-right" src="{{ asset('assets/images/login-detail-right.png') }}">

        <div class="background-wrapper">

            <h2 class="text-center">Browse Recruiters by <strong>industry sector</strong></h2>

            <div class="container h-100 account-box">
                <div class="row h-100 height-auto">
                    <div class="col-lg-5 h-100 height-auto px-0">
                        <div class="navbar-light h-100 height-auto">
                            <div class="h-100">
                                <div class="d-flex nav mt-0">
                                    <ul class="nav nav-tabs mx-auto mx-lg-0" id="browseCategory">
                                        <li class="nav-item">
                                            <a href="#animals-pets" class="nav-link py-2" data-toggle="tab">Animals & Pets</a>
                                        </li>

                                        <li class="nav-item">

                                            <a href="#beauty-well" class="nav-link py-2" data-toggle="tab">Beauty & Well-being</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#business-services" class="nav-link py-2" data-toggle="tab">Business Services</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#construction-manufacturing" class="nav-link py-2" data-toggle="tab">Construction & Manufacturing</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#education-training" class="nav-link py-2" data-toggle="tab">Education & Training</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#electronics-technology" class="nav-link py-2" data-toggle="tab">Electronics & Technology</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#events-entertainment" class="nav-link py-2" data-toggle="tab">Events & Entertainment</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#food-beverages" class="nav-link py-2" data-toggle="tab">Food, Beverages & Tobacco</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#health-medical" class="nav-link py-2" data-toggle="tab">Health & Medical</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#hobbies-crafts" class="nav-link py-2" data-toggle="tab">Hobbies & Crafts</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#events-entertainment" class="nav-link py-2" data-toggle="tab">Events & Entertainment</a>

                                        </li>

                                        <!-- Dummy for scroll ---------------------- -->

                                        <li class="nav-item">

                                            <a href="#dummy-one" class="nav-link py-2" data-toggle="tab">Dummy One</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#dummy-two" class="nav-link py-2" data-toggle="tab">Dummy Two</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#dummy-three" class="nav-link py-2" data-toggle="tab">Dummy Three</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-7">

                        <div class="pl-sm-0 h-100 input-box pb-lg-0 pb-3 tab-content">

                            <div class="tab-pane fade" id="animals-pets">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Animals & Pets</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="beauty-well">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Beauty & Well-being</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="business-services">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Business Services</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="construction-manufacturing">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Construction & Manufacturing</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="education-training">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Education & Training</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="electronics-technology">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Electronics & Technology</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="events-entertainment">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Events & Entertainment</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="food-beverages">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Food, Beverages & Tobacco</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="health-medical">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Health & Medical</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="hobbies-crafts">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Hobbies & Crafts</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="events-entertainment">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Events & Entertainment</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="dummy-one">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Dummy One</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="dummy-two">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Dummy Two</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="dummy-three">

                                <div class="row">

                                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                                        <h4 class="category-title text-center">Dummy Three</h4>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled sub-categories-list">
                                            <li class="pb-3">
                                                <a href="#">Animal Health</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Animal Parks & Zoo</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Cats & Dogs</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Horses & Riding</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Services</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="#">Pet Stores</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Content-->
@endsection

@section('additional_script')


@endsection
