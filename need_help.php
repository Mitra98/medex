<?php
$showSuccess = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$sql="INSERT INTO `need_help` (`Name`, `Email_Id`, `Phone_No`, `Subject`, `Messege`, `Date_of_Messege`) 
	VALUES ('$name', '$email', '$phone', '$subject','$message', current_timestamp())";
	$result = mysqli_query($conn, $sql);
	if ($result){
		$showSuccess = true;
	}
	else{
		$showError = true;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
		<meta name="viewport"content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<title>Need Help Page</title>
		<link href="need_help_style.css"rel="stylesheet"type="text/css"/>
		<link href="style.css"rel="stylesheet"type="text/css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	</head>
	<body>
	<?php
    if($showSuccess){
    echo ' <div class="alertation" id="alertation>
        <div class="alert_note">
            <strong>Success!</strong> Your account is now created and you can login
            <button onclick="myfunction()"><i id="close-alert-button" class="fa fa-times"></i></button>
        </div> 
    </div> ';
	$name="";
	$email="";
	$phone="";
	$subject="";
	$message="";
    }
    if($showError){
    echo ' <div class="alertation" id="alertation>
        <div class="alert_note">
            <strong>Woops!</strong> Something went wrong
            <i id="close-alert-button" class="fa fa-times"></i>
        </div> 
    </div> ';
    }
	?>
		<div class="contact-wrap">
			<div class="contact-in">
				<h1>Contact Info</h1>
				<h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
				<p>+91-123-456-789</p>
				<p>+91-123-456-789</p>
				<h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
				<p>info@democompany.com</p>
				<p>yourmail@gmail.com</p>
				<h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
				<p>198 West 21th Street, Suite 721 New York NY 10016</p>
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="contact-in">
				<h1>Send a Message</h1>
				<form action="need_help.php" method="post">
					<input type="text" placeholder="Full Name" class="contact-in-input" name="name" id="name" required>
					<input type="email" placeholder="Email" class="contact-in-input" name="email" id="email" required>
					<input type="tel" placeholder="Phone No." class="contact-in-input" name="phone" id="phone" required>
					<input type="text" placeholder="Subject" class="contact-in-input" name="subject" id="subject" required>
					<textarea placeholder="Message" class="contact-in-textarea" name="message" id="message"></textarea>
					<input type="submit" value="SUBMIT" class="contact-in-btn">
				</form>
			</div>
			
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.83923192776!2d77.06889754725782!3d28.52758200617607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1601968196548!5m2!1sen!2sin" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<script src="script.js"></script>
	</body>
</html>