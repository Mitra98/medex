<?php 

include 'dbconnect.php';

error_reporting(0);

session_start();

if (isset($_SESSION['uname'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pword = md5($_POST['pword']);
	$phone = ($_POST['phone']);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO `signup_system` (`Username`, `Phone_No`, `Email_Id`, `Password`, `Date_of_Signup`) VALUES ('$uname', '$phone', '$email', '$pword', current_timestamp());";
			$result = mysqli_query($conn, $sql);
			if ($result) {
                echo  "<p>Wow! Your account is now created,please login...</p>";
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                $_SESSION['username'] = $uname;
                $_SESSION['password'] = $pword;
                header("location: index2.php");
                $uname = "";
                $email = "";
                $phone = "";
                $_POST['pword'] = "";
            }
            else{
                $_SESSION['showAlert'] = "Woops! Your account is not created...";
            }
        }
        else{
            $_SESSION['showAlert'] = "Woops! You have already exists,please login...";
        }  
}

?>