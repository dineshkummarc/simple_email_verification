<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require_once 'conn.php';
	session_start();
	
	if(ISSET($_POST['register'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		
		mysqli_query($conn, "INSERT INTO `user` VALUES('', '$username', '$password', '$firstname', '$lastname', '$email', '')") or die(mysqli_error());
		
		$link = "localhost/PHP - Simple Email Verification Using PHPMailer/verified.php?email=".$email."";
		$message = "Hello $firstname $lastname! <br>"
        . "Please click the link below to confirm your email and complete the registration process.<br>"
        . "You will be automatically redirected to a welcome page where you can then sign in.<br><br>"            
        . "Please click below to activate your account:<br>"
        . "<a href='$link'>Click Here!</a>";
		
		//Load composer's autoloader
		require 'vendor/autoload.php';
 
		$mail = new PHPMailer(true);                            
   
		try {
			//Server settings
			$mail->isSMTP();                                     
			$mail->Host = 'smtp.gmail.com';                      
			$mail->SMTPAuth = true;                             
			$mail->Username = 'sourcecod404@gmail.com';     
			$mail->Password = 'programmer54321';             
			$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			);                         
			$mail->SMTPSecure = 'ssl';                           
			$mail->Port = 465;                                   
	
			//Send Email
			$mail->setFrom('sourcecod404@gmail.com');
	
			//Recipients
			$mail->addAddress($email);              
			$mail->addReplyTo('sourcecod404@gmail.com');
	
			//Content
			$mail->isHTML(true);                                  
			$mail->Subject = "Account registration confirmation";
			$mail->Body    = $message;
	
			$mail->send();
	
			header("location:verification.php?firstname=".$firstname."&lastname=".$lastname."&email=".$email."");
			
		} catch (Exception $e) {
			$_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
			$_SESSION['status'] = 'error';
		}

	}
	
?>