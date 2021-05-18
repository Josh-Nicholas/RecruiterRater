<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading" data-textdirection="ltr">
	<head>
		<!-- <title>Send Email in Laravel 8 Using Mailgun | Programming Fields</title> -->
		<title>Send Email to new company-user</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	    <meta name="description" content="Proency, mental health solution">
	    <meta name="keywords" content="Proency,mental,health">
	    <meta name="author" content="Proency">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
				integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<!-- BEGIN: Custom CSS-->
	    	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom/custom.css') }}">
	    <!-- END: Custom CSS-->
	</head>

  	<body>
	    <div class="container">
	        <div class="row">
	            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
					
					<div>
						<p><b>Sender Name:</b>&nbsp;{{ $email_obj['sender_name'] }}</p>
						<p><b>Sender Email:</b>&nbsp;{{ $email_obj['sender_email'] }}</p>
						<p><b>Sender secret:</b>&nbsp;{{ $email_obj['sender_message'] }}</p>
					</div>
	            </div>
	        </div>
	    </div>
  	</body>
</html>