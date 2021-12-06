<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "medex";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Connection error". mysqli_connect_error());
}
session_start();
?>
