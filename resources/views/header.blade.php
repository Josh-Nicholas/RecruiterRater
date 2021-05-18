<!-- loader  -->
<div class="loader_bg">
    <!-- <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div> -->
</div>
<!-- end loader -->

<!-- header -->
<header>
    <div class="custom-container">
        <div class="d-flex justify-content-center mw-inherit">
            <nav id="mainnav" class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="RecruiterRater" title="RecruiterRater" /></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    @if (!empty($tab1))
                        <ul class="navbar-nav ml-auto">
                            <li class="menu-item nav-item ">
                                <a href="{{ url('/') }}" class="{{ $tab1 == 'home' ? 'active' : '' }}">Home</a>
                            </li>
                            <li class="menu-item nav-item ">
                                <a href="{{ url('/leave-review') }}" class="{{ $tab1 == 'leave-review' ? 'active' : '' }}">Leave a review</a>
                            </li>
                            <li class="menu-item nav-item">
                                <a href="{{ url('/categories') }}" class="{{ $tab1 == 'categories' ? 'active' : '' }}">Categories</a>
                            </li>
                            <li class="menu-item nav-item">
                                <a href="{{ url('/aboutus') }}" class="{{ $tab1 == 'aboutus' ? 'active' : '' }}">About</a>
                            </li>

                            <li class="menu-item nav-item">
                                <a href="{{ url('/contactus') }}" class="{{ $tab1 == 'contactus' ? 'active' : '' }}">Contact us</a>
                            </li>

                            @if(Auth::check())
                                <li class="menu-item nav-item dropdown acc-details-nav">
                                    <a class="nav-link dropdown-toggle d-flex" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        
                                        @if(empty(Auth::user()->avatar))
                                            <img class="avatar-img m-0" src="{{ asset('assets/images/profile1.png') }}" alt="avatar" title="avatar">
                                        @else
                                            <img class="avatar-img m-0" src="{{ asset(Auth::user()->avatar) }}" alt="avatar" title="avatar">
                                        @endif

                                        <b class="align-self-center pl-2">{{ Auth::user()->name }} &nbsp;{{ Auth::user()->surname }}</b>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item py-2" href="{{ url('/setting') }}">My settings</a>
                                        <a class="dropdown-item py-2" href="{{ url('/logout') }}">Sign out</a>
                                    </div>
                                </li>
                            @else
                                <li class="menu-item nav-item">
                                    <a href="{{ url('/login') }}" 
                                        class="btn round btn-login-menu {{ $tab1 == 'login' ? 'btn-login-menu-checked' : 'btn-login-menu' }}">Login</a>
                                </li>
                                <li class="menu-item nav-item">
                                    <a href="{{ url('/signup') }}" 
                                        class="btn round btn-signup-menu {{ $tab1 == 'signup' ? 'btn-signup-menu-checked' : 'btn-signup-menu' }}">Sign up</a>
                                </li>
                            @endif

                        </ul>
                    @else
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item error-sidebar" style="color: #e33333; padding-left: 20px; font-style: italic;">Please check tab variable.</li>
                        </ul>
                    @endif
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- end header -->