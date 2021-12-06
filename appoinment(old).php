<?php 
include 'dbconnect.php';
$appo=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $wno=$_POST['wno'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $ptype=$_POST['ptype'];
    $dname=$_POST['dname'];
    $lda=$_POST['lda'];
    $nda=$_POST['nda'];
    $reason=$_POST['reason'];
    $message=$_POST['message'];
    $stmt=$conn->prepare("insert into appoint(fname,lname,email,wno,gender,age,ptype,dname,lda,nda,reason,message)
    values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssssss",$fname,$lname,$email,$wno,$gender,$age,$ptype,$dname,$lda,$nda,$reason,$message);
    $stmt->execute();
    $sql= "SELECT * FROM appoint WHERE dname='$dname' AND nda='$nda'";
    $result = mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    while($row)
    $apno=20-$num;
    $appo=true;
    $stmt->close();
    $conn->close();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment Form(Old)</title>
    <link rel="stylesheet" href="appoinment_type_style.css">
</head>
<body>
    <?php
    if($appo){
    echo "Your appoinment is successfull and no is $apno";
    }
    ?>
    <h2 class="appoin_heading">Doctor Appoinment</h2>
    <div class="main_section">
        <div class="image">
            <img src="img/home_1.jpg" alt="">
        </div>
        <div class="appoint">
            <p class="heading">Appoinment Form</p>
            <p class="content">A small river named Duden flows by their place and supplies it with the necessary regelialia. 
                For checkup, book your appoinment.
                Appoinment form for <strong>OLD</strong> patients.
            </p>
            <div class="old_form">
                <form action="appoinment(old).php" method="post" autocomplete="on">
                        <table>
                            <tr>
                                <td><label for="fname">First Name :</label></td>
                                <td><input type="text" name="fname" id="fname"></td>
                            </tr>
                            <tr>
                                <td><label for="lname">Last Name :</label></td>
                                <td><input type="text" name="lname" id="lname"></td>
                            </tr>
                            <tr>
                                <td><label for="email">Email Id :</label></td>
                                <td><input type="email" name="email" id="email"></td>
                            </tr>
                            <tr>
                                <td><label for="wno">Whatsapp No. :</label></td>
                                <td><input type="tel" name="wno" id="wno"></td>
                            </tr>
                            <tr>
                                <td><label for="gender">Patient's Gender :</label></td>
                                <td class="gender_radio">
                                    <input type="radio" name="gender" id="gender">Male
                                    <input type="radio" name="gender" id="gender">Female
                                </td>
                            </tr>
                            <tr>
                                <td><label for="age">Patient's Age :</label></td>
                                <td><input type="text" name="age" id="age"></td>
                            </tr>
                            <tr>
                                <td><label for="ptype">Patient's Type :</label></td>
                                <td><input type="text" name="ptype" id="ptype" value="Old" readonly></td>
                            </tr>
                            <tr>
                                <td><label for="dname">Doctor's Name :</label></td>
                                <td>
                                    <input list="doctors" name="dname" id="dname" placeholder="Choose your doctor..">
                                    <datalist id="doctors">
                                        <option value="Dr. Sayandip Naskar">
                                        <option value="Dr. Mitra Chakraborty">
                                        <option value="Dr. Sayan Ghosh">
                                        <option value="Dr. Sambit Ghosh">
                                        <option value="Dr. Sudip Koley">
                                        </datalist>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="lda">Last Date of Appoinment :</label></td>
                                <td><input type="date" name="lda" id="lda"></td>
                            </tr>
                            <tr>
                                <td><label for="nda">Next Date of Appoinment :</label></td>
                                <td><input type="date" name="nda" id="nda"></td>
                            </tr>
                            <tr>
                                <td><label for="reason">Reason Type :</label></td>
                                <td>
                                    <input list="reasons" name="reason" id="reason" placeholder="Give your reason">
                                    <datalist id="reasons">
                                        <option value="Report Checking">
                                        <option value="Checkup">
                                    </datalist>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="message">Message :</label></td>
                                <td><textarea name="message" id="message" cols="30" rows="10"></textarea></td>
                            </tr>
                        </table>
                        <button type="submit">Book Your Appoinment</button>
                        <button formaction="appoinment.php">Back</button>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>