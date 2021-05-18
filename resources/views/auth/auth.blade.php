@extends('app')

@section('title', 'Recruiter | Login')

@section('additional_css')

@stop('additional_css')

@section('content')
   <!-- BEGIN: Content-->
    <div class="header-fix"></div>

    <section id="contact">
        <img class="login-detail-left" src="{{ asset('assets/images/login-detail-left.png') }}">
        <img class="login-detail-right" src="{{ asset('assets/images/login-detail-right.png') }}">

        <div id="register" class="background-wrapper">
            <div class="login register-outer-box">
                <div class="contact-box d-flex">
                    <div id="register-page-left" class="register-left-box">
                        
                        <h3 id="register-first-h" class="text-center">If you think it’s expensive to hire a professional, wait until you hire and amateur</h3>

                        <ul class="d-flex flex-column link-boxes nav nav-tabs">
                            <li class="links nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#login" id="login-tab-btn">Login</a>
                            </li>
                            <li class="links nav-item">
                                <a class="nav-link" data-toggle="tab" href="#signup" id="signup-tab-btn">Sign up</a>
                            </li>
                        </ul>

                        <h3 id="register-second-h" class="text-center">Time spent on hiring, is time well spent</h3>
                    </div>

                    <div class="register-right-box d-flex tab-content">
                        
                        <div id="login" class="container tab-pane active">
                            <h2 class="text-center">Welcome <strong>Back</strong></h2>
                            <div class="register-notice">
                                @if ($tab1 == "login" && $errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <div>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <form action="{{ url('/login') }}" role="form-horizontal" method="post" id="form-login"
                                class="text-center login-form d-flex flex-column align-items-center uwp-login-form">
                                @csrf

                                <input class="w-100" type="email" placeholder="Email*" name="email" required>
                                <input class="w-100 mt-3" type="password" placeholder="Password*" name="password" required>
                                
                                <div class="uwp-footer-link uwp-forgotpsw mt-3 pl-3 align-self-start">
                                    <a rel="nofollow" href="#">
                                        Forgot password?
                                    </a>
                                </div>
                                <input type="submit" name="uwp_login_submit" value="Log in">
                            </form>
                            
                            <div class="text-center social-login-group row">
                                <div class="col-md-12">
                                    <p>OR</p>
                                </div>
                                
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <a href="#" class="btn btn-social width-200 mb-1 mr-1 btn-outline-google">
                                        <span class="fa fa-google font-medium-4"></span> Sign in with google</a>    
                                </div>
                                <div class="col-md-5">
                                    <a href="#" class="btn btn-social width-200 mb-1 mr-1 btn-outline-facebook">
                                        <span class="fa fa-facebook"></span> Sign in with facebook</a>   
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    
                        <div id="signup" class="container tab-pane fade">
                            <div class="container">
                                <h2 class="text-center">Create an <strong>Account</strong></h2>

                                <div class="register-notice">
                                    @if ($tab1 == "signup" && $errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <div>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                                
                                <form action="{{ url('/signup') }}" role="form-horizontal" method="post" id="form-signup" class="text-center register-form">
                                    @csrf

                                    <input type="hidden" name="redirectTo" value="{{ request()->redirectTo }}">
                                    <div class="row btn-type-group">
                                        <div class="col-md-6">
                                            <button type="button" class="btn round mr-1 mb-1 btn-individual-checked btn-individual">Individual</button>
                                            <input name="account_type" id="input-individual" value="Individual" hidden>
                                        </div>

                                        <div class="col-md-6">
                                            <button type="button" class="btn round mr-1 mb-1 btn-business-unchecked btn-business">Business</button>
                                        </div>
                                    </div>

                                    <input class="w-100" type="name" placeholder="Name*" value="{{ old('name') }}" name="name" required>
                                    <input class="w-100 mt-3" type="name" placeholder="Surname*" value="{{ old('surname') }}" name="surname" required>
                                    <input class="w-100 mt-3" type="email" placeholder="Email*" value="{{ old('email') }}" name="email" required>
                                    <input class="w-100 mt-3" type="password" placeholder="Password*" name="password" required>
                                    <input class="w-100 mt-3" type="password" placeholder="Confirm Password*" name="password_confirmation" required>

                                    <input class="w-100 mt-5" type="name" placeholder="Username*" name="username" required>

                                    <div class="text-center text-sm-left pr-0 mt-3">
                                        <fieldset>
                                            <input name="show_username" type="checkbox" class="chk-username" id="show-username" {{ old('show_username') ? 'checked' : '' }}>
                                            <label for="show-username">&nbsp;&nbsp;&nbsp; Show this username instead of name to the review</label>
                                        </fieldset>
                                        <fieldset>
                                            <input name="receive_news" type="checkbox" class="chk-news" id="receive-news" {{ old('receive_news') ? 'checked' : '' }}>
                                            <label for="receive-news">&nbsp;&nbsp;&nbsp;Receive news by email</label>
                                        </fieldset>
                                    </div>
                                    <input name="register" value="Register" type="submit">
                                </form>

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
    <script src="{{ asset('assets/js/user/auth.js') }}"></script>
    
    <script>
        var tab1 = @json($tab1);
        if(tab1 == 'login')
        	$( "#login-tab-btn" ).trigger( "click" );

        if(tab1 == 'signup') {
        	$( "#signup-tab-btn" ).trigger( "click" );
            $('#register-page-left').addClass("different-image-box");
            $("#register-first-h").css("visibility", "hidden");
            $("#register-second-h").css("visibility", "visible");
        }
    </script>
@endsection
