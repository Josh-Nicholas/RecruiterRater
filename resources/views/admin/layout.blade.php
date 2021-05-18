<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading" data-textdirection="ltr">

<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="BotAmi, BotAmiScan, BotAmi Scan Library, Document scan, multi page scan">
    <meta name="keywords" content="BotAmi, BotAmiScan, BotAmi Scan Library, module, SDK">
    <meta name="author" content="BotAmiScan">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">

    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

    @yield('additional_css')
    
    <style>
      .header {
         position: fixed;
         width: 100%;
         height: 60px;
         top: 0;
         left: 0;
         z-index: 1;
         background: #fff;
         -webkit-box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.5); 
         box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.5);
      }
      .header .dropdown {
         width: max-content;
      }
      .header .dropdown .dropdown-toggle {
         margin-top: 10px;
         margin-right: 10px;
      }
      .sidebar {
         position: fixed;
         top: 0;
         left: 0;
         width: 320px;
         height: 100%;
         z-index: 1000;
         background: #fff;
         -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); 
         box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
      }
      .sidebar .logo-container {
         height: 60px;
         text-align: center;
         padding-top: 15px;
         background: #d4ff45;
      }
      .sidebar .side-nav {
         padding-left: 0;
         list-style: none;
      }
      .sidebar .side-nav .nav-item {
         padding: 10px;
      }
      .sidebar .side-nav .nav-item .nav-link {
         text-decoration: none;
         font-size: 16px;
      }
      .sidebar .side-nav .nav-item.active {
         background: #26d685;
      }
      .main {
         background: #fff;
         margin-top: 60px;
         padding-top: 20px;
         padding-bottom: 20px;
         margin-left: 320px;
      }
    </style>

</head>

<body class="horizontal-layout horizontal-menu 2-columns bg-white">
   <!-- header -->
   <div class="header">
      <div class="dropdown ml-auto">
         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('admin') ? Session::get('admin')->name : ''}}
         </button>
         <div class="dropdown-menu p-0 m-0" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/admin/logout">Logout</a>
         </div>
      </div>
   </div>
   <!-- ./header -->
   <div class="">
      <div class="sidebar">
         <div class="logo-container">
            <h2>BotAmiScan</h2>
         </div>
         <ul class="side-nav">
            <!-- <li class="nav-item {{$route == 'dashboard' ? 'active' : ''}}">
               <a class="nav-link" href="/admin">Dashboard</a>
            </li> -->
            <li class="nav-item {{$route == 'payment-history' ? 'active' : ''}}">
               <a class="nav-link" href="/admin/payment-history"><i class="fa fa-money"></i>&nbsp;&nbsp;&nbsp; Payment History</a>
            </li>
            <li class="nav-item {{$route == 'membership-settings' ? 'active' : ''}}">
               <a class="nav-link" href="/admin/membership-settings"><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp; Membership Settings</a>
            </li>
            <li class="nav-item {{$route == 'contact-users' ? 'active' : ''}}">
               <a class="nav-link" href="/admin/contact-users"><i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp; Contacted Users</a>
            </li>
            <li class="nav-item {{$route == 'user-opinion' ? 'active' : ''}}">
               <a class="nav-link" href="/admin/user-opinion"><i class="fa fa-question-circle"></i>&nbsp;&nbsp;&nbsp; Questions For SDK</a>
            </li>
         </ul>
      </div>
      <div class="main">
         <!-- BEGIN: Content-->
         @yield('content')
         <!-- END: Content-->
      </div>
   </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/plugins/Flash-Toast-Notification/flash.min.js') }}"></script>

    <!-- <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->
    <script>
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      // toastr option
      var successOption = {
         'bgColor' :'#5cb85c',
         'ftColor' :'white',
         'vPosition' :'top',
         'hPosition' :'right',
      }
      var warningOption = {
         'bgColor' :'#fd9900',
         'ftColor' :'white',
         'vPosition' :'top',
         'hPosition' :'right',
      }
      var dangerOption = {
         'bgColor' :'#c1392b',
         'ftColor' :'white',
         'vPosition' :'top',
         'hPosition' :'right',
      }
    </script>
    
    @yield('additional_script')

    <script>
      $(document).ready(function(){
         $(".zoom").hover(function(){
            $(this).addClass('transition');
         }, function(){
            $(this).removeClass('transition');
         });
      });
      var flash_success = "{{Session::has('flash_success') ? Session::get('flash_success') : false}}";
      var flash_message = "{{Session::has('flash_message') ? Session::get('flash_message') : ''}}";
      if(flash_message) {
         var flashOption = flash_success ? successOption : dangerOption;
         flash(flash_message, flashOption);
      }
   </script> 
    
</body>
</html>
