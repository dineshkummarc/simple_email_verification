<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Email Verification Using PHPMailer</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">	
			<?php
				if(ISSET($_REQUEST['firstname']) && ISSET($_REQUEST['lastname']) && ISSET($_REQUEST['email'])){
			?>
				<h3><strong>You're ready to go!</strong></h3>
				<br />
				<h5>Hi, <?php echo $_REQUEST['firstname']." ".$_REQUEST['lastname']?><h5>
				<h5>We've finished setting up your account.<h5>
				<h5>We sent you a confirmation to your email account<h5>
				<a class="btn btn-primary" href="https://<?php echo $_REQUEST['email']?>" target="_blank">Confirm Email</a>
			<?php
				}
			?>
		</div>
	</div>
</body>
</html>