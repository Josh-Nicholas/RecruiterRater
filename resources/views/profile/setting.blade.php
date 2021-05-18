@extends('app')

@section('title', 'Recruiter | Settings')

@section('additional_css')

@stop('additional_css')

@section('content')
   <!-- BEGIN: Content-->
    <div class="header-fix"></div>

    <section id="contact" class="account">

        <img class="login-detail-left" src="{{ asset('assets/images/login-detail-left.png') }}">
        <img class="login-detail-right" src="{{ asset('assets/images/login-detail-right.png') }}">

        <div class="background-wrapper">
            <h2 class="text-center">My <strong>Settings</strong></h2>
            
            <div class="container h-100 account-box">
                <div class="row h-100 height-auto">
                    <div class="col-lg-3 h-100 height-auto px-0">
                        <div class="navbar-light h-100 height-auto">

                            <div class="h-100">
                                <div class="d-flex justify-content-center flex-column position-relative">

                                    @if(empty(Auth::user()->avatar))
                                        <img id="user_photo" class="avatar-img mx-auto mx-lg-0" src="{{ asset('assets/images/profile1.png') }}" alt="avatar" title="avatar">
                                    @else
                                        <img id="user_photo" class="avatar-img mx-auto mx-lg-0" src="{{ asset(Auth::user()->avatar) }}" alt="avatar" title="avatar">
                                    @endif

                                    <button class="change-avatar-img-btn" for="account-upload"><i class="fa fa-camera"></i></button>
                                </div>

                                <div class="d-flex nav mt-0">
                                    <ul class="nav nav-tabs d-flex flex-column mx-auto mx-lg-0" id="myAccount">
                                        <li class="nav-item">
                                            <a href="#information" class="nav-link py-2 {{ $sub_tab == 'information' ? 'active' : '' }}"
                                                data-toggle="tab">User information</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#email-settings" class="nav-link py-2 {{ $sub_tab == 'email_setting' ? 'active' : '' }}" 
                                                data-toggle="tab">Email settings</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#delete-acc" class="nav-link py-2" data-toggle="tab">Detele account</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="pl-sm-0 h-100 input-box pb-lg-0 pb-3 tab-content">
                            
                            <div class="tab-pane fade {{ $sub_tab == 'information' ? 'active show' : '' }}" id="information">
                                <form action="{{ url('/user-info') }}" method="post" id="form-user-info" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5 text-center text-lg-left">
                                            <h3 class="mt-2 account-settings-name mb-0">{{ Auth::user()->name }}&nbsp;{{ Auth::user()->surname }}</h3>
                                            <p class="account-settings-loc">New York</p>

                                            <div class="register-notice">
                                                @if ($errors->any())
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

                                            <div class="acc-avatar-details">
                                                <input type="text" name="username" value="{{ Auth::user()->username }}">
                                                <input type="email" name="email" value="{{ Auth::user()->email }}">
                                                <input type="text" name="address" value="English (United States)">
                                                <input type="name" name="addresscity" value="United States">
                                                <input type="password" name="password" value="password">

                                                <input type="file" name="input_user_photo" id="account-upload" hidden>
                                            </div>
                                        </div>

                                        <div class="col-md-7 account-numbers">
                                            <ul class="d-flex pl-0">
                                                <li class="d-flex align-items-center flex-column">
                                                    <div class="acc-single-number">0</div>
                                                    <div class="acc-single-description"><i class="far fa-star"></i> Reviews</div>
                                                </li>
                                                <li class="d-flex align-items-center flex-column">
                                                    <div class="acc-single-number">0</div>
                                                    <div class="acc-single-description"><i class="fas fa-user"></i> Reads</div>
                                                </li>
                                                <li class="d-flex align-items-center flex-column">
                                                    <div class="acc-single-number">0</div>
                                                    <div class="acc-single-description"><i class="fas fa-thumbs-up"></i> Useful</div>
                                                </li>
                                            </ul>

                                            <button type="submit" id="btn-info-save" class="acc-setting-save">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade {{ $sub_tab == 'email_setting' ? 'active show' : '' }}" id="email-settings">
                                <form action="{{ url('/email-setting') }}" method="post" id="form-email-setting">
                                    @csrf
                                    <p class="w-100 f-15 mb-50">
                                        We only want to send you emails that you want. Select your preferences below and remember that you can always unsubscribe.
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="acc-check-boxes-d">
                                                <h4 class="acc-checkboxes-title">Contribution</h4>

                                                <div class="acc-contribution-form">
                                                    @if(empty(Auth::user()->email_setting))
                                                        <input type="checkbox" id="reviews" name="reviews">
                                                        <label for="reviews"><u>Your reviews: Who did you help?</u></label><br>
                                                        <input type="checkbox" id="companies" name="companies">
                                                        <label for="companies"><u>Companies on Logohere can invite me to write reviews</u></label>
                                                    @else
                                                        <input type="checkbox" id="reviews" name="reviews" {{ Auth::user()->email_setting->reviews == 1 ? "checked" : "" }}>
                                                        <label for="reviews"><u>Your reviews: Who did you help?</u></label><br>
                                                        <input type="checkbox" id="companies" name="companies" {{ Auth::user()->email_setting->companies == 1 ? "checked" : "" }}>
                                                        <label for="companies"><u>Companies on Logohere can invite me to write reviews</u></label>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="acc-check-boxes-d">
                                                <h4 class="acc-checkboxes-title">Updates</h4>

                                                <div class="acc-updates-form">
                                                    @if(empty(Auth::user()->email_setting))
                                                        <input type="checkbox" id="updates" name="updates">
                                                        <label for="updates"><u>General updates</u></label><br>
                                                        <input type="checkbox" id="insparation" name="insparation">
                                                        <label for="insparation"><u>Insparation</u></label><br>
                                                        <input type="checkbox" id="new-features" name="new_features">
                                                        <label for="new_features"><u>New features</u></label>
                                                    @else
                                                        <input type="checkbox" id="updates" name="updates" {{ Auth::user()->email_setting->updates == 1 ? "checked" : "" }}>
                                                        <label for="updates"><u>General updates</u></label><br>
                                                        <input type="checkbox" id="insparation" name="insparation" {{ Auth::user()->email_setting->insparation == 1 ? "checked" : "" }}>
                                                        <label for="insparation"><u>Insparation</u></label><br>
                                                        <input type="checkbox" id="new-features" name="new_features" {{ Auth::user()->email_setting->new_features == 1 ? "checked" : "" }}>
                                                        <label for="new_features"><u>New features</u></label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="acc-check-boxes-d">
                                                <h4 class="acc-checkboxes-title">Account support</h4>
                                                <p class="f-15">This setting is always enabled so we can send account-related emails, e.g., if you request a new password.</p>

                                                <div class="acc-support-form d-flex">
                                                    @if(empty(Auth::user()->email_setting))
                                                        <input type="checkbox" id="support" name="support">
                                                    @else
                                                        <input type="checkbox" id="support" name="support" {{ Auth::user()->email_setting->support == 1 ? "checked" : "" }}>
                                                    @endif
                                                    <label for="support"><u>Account-related emails: This is enabled for every Trustpilot user</u></label>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" id="btn-email-save" class="acc-setting-save">Save</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade  text-center text-lg-left" id="delete-acc">
                                <form action="{{ route('user.delete', Auth::user()->id) }}" role="form-horizontal" method="post">
                                    @method('DELETE')
                                    @csrf
                                    
                                    <h4 class="acc-checkboxes-title">Delete user</h4>
                                    <p class="f-15 mb-50">When you delete your user profile, your reviews are deleted as well and can not be restored</p>
                                    <button type="submit" id="btn-delete" class="acc-setting-save mx-0" hidden></button>
                                </form>
                                <button type="submit" id="btn-alert" class="acc-setting-save mx-0">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <!-- END: Content-->
@endsection

@section('additional_script')
    <script src="{{ asset('assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/polyfill.min.js') }}"></script>
    <script src="{{ asset('assets/js/user/setting.js') }}"></script>
@endsection
