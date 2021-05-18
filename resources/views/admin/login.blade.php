<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading" data-textdirection="ltr">

<head>
    <title>Admin Dashboard Login</title>
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

</head>

<body class="horizontal-layout horizontal-menu 2-columns bg-white" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Content-->
    <div class="container">
        <div class="content">
            <div class="card p-4" style="max-width: 500px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <h2 class="text-center">Admin Login</h2>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="email" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="password" />
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-lg w-100 btn-login">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/plugins/Flash-Toast-Notification/flash.min.js') }}"></script>

    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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
    <script>
        $(document).on('click', '.btn-login', function() {
            var email = $('input[name=email]').val();
            var password = $('input[name=password]').val();
            console.log('>>>', email, password);
            if(email == '' || password == '') {
                flash("Credentials are required!", warningOption);
                return;
            }
            var fd = new FormData();
            fd.append('email', email);
            fd.append('password', password);
            // api call
            $('.loader_bg').fadeToggle();
            $.ajax({
                url: "{{ route('admin.login.post') }}", 
                type: 'POST',
                data: fd,
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log('data >> ', data);
                    $('.loader_bg').fadeToggle();
                    if(data.status == 200) {
                        window.location.href = '/admin';
                    } else {
                        flash(data.message, dangerOption);
                    }
                }
            });
        });
    </script>
</body>
</html>
