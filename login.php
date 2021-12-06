<?php
include 'dbconnect.php';
error_reporting(0);
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}
$checkLogin = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $uname = $_POST["uname"];
    $pword = $_POST["pword"]; 
    $checksqllogin = "SELECT * FROM signup_system WHERE Username='$uname' AND Password='$pword'";
    $resultlogin = mysqli_query($conn, $checksqllogin);
    if ($resultlogin->num_rows == 1) {
        while($row=mysqli_fetch_assoc($resultlogin)){
            if (password_verify($pword, $row['password'])){ 
                $_SESSION['showAlert'] = "Wow! You have successfully login...";
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $uname;
                $_SESSION['password'] = $pword;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                header("location: welcome.php");
            } 
            else{
                $_SESSION['showAlert'] = "Woops! Your password was not matched...";
            }
        }
    } 
    else{
        $_SESSION['showAlert'] = "Woops! Your account was not created,please signup...";
    }
}
?>
