<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment Form</title>
    <link rel="stylesheet" href="appoinment_style.css">
</head>
<body>
    <h1 class="appoin_heading">Doctor Appoinment</h1>
    
        
    <div class="main_section">
        <div class="image"><img src="img/home_1.jpg" alt=""></div>
        <div class="appoint">
            <p class="heading">Appoinment Form</p>
            <p class="content">A small river named Duden flows by their place and supplies it with the necessary regelialia. 
                It is a paradisematic country, in which roasted parts of sentences fly into your mouth. 
                It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                If you are old patients, then choose <strong>OLD</strong>, otherwise choose <strong>NEW</strong>.
            </p>
            <form class="ptype_choose">
                <strong>PATIENT'S TYPE : </strong>
                <button type="submit" formaction="appoinment(old).php" class="old_btn">OLD</button>
                <button type="submit" formaction="appoinment(new).php" class="new_btn">NEW</button>
            </form> 
            <p class="content">After choose the patient type, then go to the <strong>Next step...</strong></p>
        </div>
    </div>
</body>
</html>
