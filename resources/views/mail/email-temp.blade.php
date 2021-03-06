<!doctype html>
<html lang="en">
	<head>
		<title>Send Email in Laravel 8 Using Mailgun | Programming Fields</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
				integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
				Someone is contacting support team through BotAmiGscan
				
				<p><u>Sender information:</u></p>
				
				<div>
					<p><b>Sender Name:</b>&nbsp;{{ $email_obj['sender_name'] }}</p>
					<p><b>Sender Email:</b>&nbsp;{{ $email_obj['sender_email'] }}</p>
					<p><b>Sender Message:</b>&nbsp;{{ $email_obj['sender_message'] }}</p>
				</div>
            </div>
        </div>
    </div>
  </body>
</html>