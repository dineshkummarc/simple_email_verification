<?php session_start()?>
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
		<div class="col-md-6">	
		<a href="index.php">Already a member? Sign in here...</a>
		<br /><br />
			<form method="POST" action="register.php">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" minlength="12" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" name="firstname" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" name="lastname" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<button name="register" class="btn btn-primary btn-block">Sign up</button>
				</div>
				<?php
					if(ISSET($_SESSION['status'])){
						if($_SESSION['status'] == "error"){
				?>
							<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
							
				<?php
						}
	
						unset($_SESSION['result']);
						unset($_SESSION['status']);
					}	
				?>
			</form>
		</div>
	</div>
</body>
</html>