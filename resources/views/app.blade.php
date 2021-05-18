<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading" data-textdirection="ltr">

   <head>
      <title>@yield('title')</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

      <meta name="description" content="RecruiterRater, Recruiter, Rater">
      <meta name="keywords" content="RecruiterRater, Recruiter, Rater">
      <meta name="author" content="RecruiterRater">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
         rel="stylesheet">
      
      <!-- BEGIN: Vendor CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}">

      <!-- BEGIN: Theme CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/components.css') }}">
    
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      
      <link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/css/header.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
      <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet" type="text/css">

      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
      
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

      <!-- BEGIN: Custom CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

      @yield('additional_css')

   </head>

   <body class="horizontal-layout horizontal-menu 2-columns bg-white" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

      <!-- Header -->
      @include('header')

      <!-- BEGIN: Content-->
      @yield('content')
      <!-- END: Content-->

      <!-- Footer -->
      @include('footer')   
      

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <script src="{{ asset('assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>

      <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
      <script src="{{ asset('assets/js/home-script.js') }}"></script>
      <script src="{{ asset('assets/plugins/validation/jquery.validate.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/Flash-Toast-Notification/flash.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
      
      @yield('additional_script')

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

         @if(Session::has('success'))
            toastr.options =
            {
               "closeButton" : true,
               "progressBar" : true
            }
            toastr.success("{{ session('success') }}");
         @endif

         @if(Session::has('error'))
            toastr.options =
            {
               "closeButton" : true,
               "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
         @endif

         @if(Session::has('info'))
            toastr.options =
            {
               "closeButton" : true,
               "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
         @endif

         @if(Session::has('warning'))
            toastr.options =
            {
               "closeButton" : true,
               "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
         @endif
      </script>
      
   </body>
</html>
