<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>

    <!-- magnific-popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="gallery_style.css">

</head>
<body>


<div class="gallery">
    <h1 class="heading">Photo Gallery</h1>
    <ul class="controls">
        <li class="buttons active" data-filter="all">All</li>
        <li class="buttons" data-filter="shop">Shop</li>
        <li class="buttons" data-filter="medicine">Medicines</li>
        <li class="buttons" data-filter="instrument">Instruments</li>
        <li class="buttons" data-filter="doctor">Doctors</li>
        <li class="buttons" data-filter="staff">Staffs</li>
    </ul>

    <div class="image-container">

        <a href="img/gallery/shop1.jpg" class="image shop">
            <img src="img/gallery/shop1.jpg" alt="">
        </a>
        <a href="img/gallery/shop2.jpg" class="image shop">
            <img src="img/gallery/shop2.jpg" alt="">
        </a>
        <a href="img/gallery/shop3.jpg" class="image shop">
            <img src="img/gallery/shop3.jpg" alt="">
        </a>
        <a href="img/gallery/shop1.jpg" class="image shop">
            <img src="img/gallery/shop1.jpg" alt="">
        </a>
        <a href="img/gallery/shop2.jpg" class="image shop">
            <img src="img/gallery/shop2.jpg" alt="">
        </a>
        <a href="img/gallery/shop3.jpg" class="image shop">
            <img src="img/gallery/shop3.jpg" alt="">
        </a>
        <a href="img/gallery/shop1.jpg" class="image shop">
            <img src="img/gallery/shop1.jpg" alt="">
        </a>
        <a href="img/gallery/shop2.jpg" class="image shop">
            <img src="img/gallery/shop2.jpg" alt="">
        </a>

        <a href="img/gallery/medicine1.jpg" class="image medicine">
            <img src="img/gallery/medicine1.jpg" alt="">
        </a>
        <a href="img/gallery/medicine2.jpg" class="image medicine">
            <img src="img/gallery/medicine2.jpg" alt="">
        </a>
        <a href="img/gallery/medicine3.jpg" class="image medicine">
            <img src="img/gallery/medicine3.jpg" alt="">
        </a>
        <a href="img/gallery/medicine4.jpeg" class="image medicine">
            <img src="img/gallery/medicine4.jpeg" alt="">
        </a>
        <a href="img/gallery/medicine2.jpg" class="image medicine">
            <img src="img/gallery/medicine2.jpg" alt="">
        </a>
        <a href="img/gallery/3.jpg" class="image medicine">
            <img src="img/gallery/medicine3.jpg" alt="">
        </a>

        <a href="img/gallery/instrument1.jpg" class="image instrument">
            <img src="img/gallery/instrument1.jpg" alt="">
        </a>
        <a href="img/gallery/instrument2.jpg" class="image instrument">
            <img src="img/gallery/instrument2.jpg" alt="">
        </a>
        <a href="img/gallery/instrument3.jpg" class="image instrument">
            <img src="img/gallery/instrument3.jpg" alt="">
        </a>
        <a href="img/gallery/instrument4.jpg" class="image instrument">
            <img src="img/gallery/instrument4.jpg" alt="">
        </a>
        

        <a href="img/gallery/doctor1.jpg" class="image doctor">
            <img src="img/gallery/doctor1.jpg" alt="">
        </a>
        <a href="img/gallery/doctor2.jpg" class="image doctor">
            <img src="img/gallery/doctor2.jpg" alt="">
        </a>
        <a href="img/gallery/doctor3.jpg" class="image doctor">
            <img src="img/gallery/doctor3.jpg" alt="">
        </a>
        <a href="img/gallery/doctor4.jpg" class="image doctor">
            <img src="img/gallery/doctor4.jpg" alt="">
        </a>
        <a href="img/gallery/doctor5.jpg" class="image doctor">
            <img src="img/gallery/doctor5.jpg" alt="">
        </a>

        <a href="img/gallery/staff1.png" class="image staff">
            <img src="img/gallery/staff1.png" alt="">
        </a>
        <a href="img/gallery/staff2.png" class="image staff">
            <img src="img/gallery/staff2.png" alt="">
        </a>
        <a href="img/gallery/staff3.png" class="image staff">
            <img src="img/gallery/staff3.png" alt="">
        </a>
        <a href="img/gallery/staff4.png" class="image staff">
            <img src="img/gallery/staff4.png" alt="">
        </a>

    </div>

</div>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>

$(document).ready(function(){

    $('.buttons').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        var filter = $(this).attr('data-filter')

        if(filter == 'all'){
            $('.image').show(400);
        }else{
            $('.image').not('.'+filter).hide(200);
            $('.image').filter('.'+filter).show(400);
        }

    });

    $('.gallery').magnificPopup({

        delegate:'a',
        type:'image',
        gallery:{
            enabled:true
        }

    });

});

</script>
    
</body>
</html>