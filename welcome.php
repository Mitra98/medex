
<?php
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Medicine Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link href="./Colorlib _ Free Bootstrap Website Template_files/A.bootstrap.min.css+template.css+fa.min.css+gfonts.min.css,Mcc.LI5f1xXhbm.css.pagespeed.cf.G00NPyYGCq.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/bootstarp/css/bootstarp.min.css">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="header_left">
            <div class="your_mail">
                <p><i class="fa fa-share" aria-hidden="true"></i>shopmail@gmail.com</p>
            </div>
            <div class="header_icon">
                <p><i class="fa fa-facebook" aria-hidden="true"></i></p>
                <p><i class="fa fa-twitter" aria-hidden="true"></i></p>
                <p><i class="fa fa-instagram" aria-hidden="true"></i></p>
                <p><i class="fa fa-whatsapp" aria-hidden="true"></i></p>
            </div>
        </div>
        <form class="header_button">
                <button class="order_button" formaction="order.php">Order Medicine</button>
                <button class="doctor_button" formaction="appoinment.php">Make An Appoinment</button>
        </form>
    </header>

<!-- Nevigation Bar -->
<nav class="navbar">
    <div class="nav-left">
        <ul>
            <li class="active"><a href="#">HOME</a></li>
            <li></i><a href="order.php">ORDER</a></li>
            <li></i><a href="doctors.php">DOCTORS</a></li>
            <li><a href="appoinment.php">APPOINMENT</a></li> 
            <li class="more"><a href="#">MORE</a>
                <ul>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="blogs.php">BLOGS</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
            </li> 
        </ul>
    </div>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100 search-box">
          <div class="searchbar">
            <input class="search_input" type="text" name="" placeholder="Search here..."/>
            <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
          </div>
        </div>
      </div>
<div class="nav-right">
    <div class="login_signup">
        <ul>
            <li><i class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION['username']?></li> |
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <form class="offer">
        <button class="offer" formaction="offer.php">OFFER</button>
    </form>
    <div class="cart">
        <i class="fa fa-cart-plus" aria-hidden="true"></i>
    </div>
    <div class="help">
        <span><a href="need_help.php">NEED HELP?</a></span>
    </div>
</div>
</nav>


    <!-- Shop details -->
    <div class="shop_details">
        <div class="shop_logo"><img src="img/logo.jpeg" alt="Shop Logo"></div>
        <div class="free_call">
            <div class="details_icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <div class="details_content">
                <p><span style="color: #4091FF;">Free Call</span> +1 234 456 78910</p>
                <p>Call Us Now 24/7 Customer Support</p>
            </div>
        </div>
        <div class="location">
            <div class="details_icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
            <div class="details_content">
                <p>Our Location</p>
                <p>198 West 21th Street, <br>Suite 721 New York NY 10016</p>
            </div>
        </div>
        <div class="timing">
            <div class="details_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
            <div class="details_content">
                <p>Opening Timing</p>
                <p>Morning: 8am - 2pm<br>Evening: 5pm - 11pm</p>
            </div>
        </div>

    </div>
    <!-- First Section -->
    <section class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background: url(img/home_slide_background_1.jpg) center center / cover no-repeat;">
                    <p>Welcome to <span style="color:#4091FF;">Medex</span></p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                </div>
                <div class="swiper-slide" style="background: url(img/home_slide_background_2.jpg) center center / cover no-repeat;">
                    <p>Book Appoinment</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                </div>
                <div class="swiper-slide" style="background: url(img/home_slide_background_3.jpg) center center / cover no-repeat;">
                    <p>Order Medicine</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- Second Section -->
    <section class="second_section">
        <p class="facility_heading">Welcome to <span style="color: #4091FF;">Medex</span></p>
        <div class="facilities">
            <div class="faci">
                <div class="facility_icon"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
                <div class="facility_content">
                    <h2>Emergency Help</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="faci facility2_prescription_order">
                <div class="faci">
                    <div class="facility_icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                    <div class="facility_content">
                        <h2>Prescribed Medicine</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="faci facility3_doctors">
                <div class="faci">
                    <div class="facility_icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
                    <div class="facility_content">
                        <h2>Qualified Doctors</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="facilities">
            <div class="faci">
                <div class="facility_icon"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></div>
                <div class="facility_content">
                    <h2>Secure Payment</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="faci facility2_prescription_order">
                <div class="faci">
                    <div class="facility_icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                    <div class="facility_content">
                        <h2>Stored Safely</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="faci facility3_doctors">
                <div class="faci">
                    <div class="facility_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="facility_content">
                        <h2>Location & Direction</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Third Section -->
    <section class="third_section">
        <div class="image"><img src="img/home_1.jpg" alt=""></div>
        <div class="healthcare">
            <p class="heading">We Are <span style="color:#4091FF;">Medex</span> A Healthcare <br>Provider</p>
            <p class="content">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
    </section>

    <!-- Fourth Section -->
    <section class="fourth_section">
        <div class="healthcare_provide">
            <p class="heading">Your Health is Our Priority</p>
            <p class="content">We can manage your dream building A small river named Duden flows by their place</p>
            <form class="fourth_button">
                <button class="order_button" formaction="order.php">Order Medicine</button>
                <button class="doctor_button" formaction="appoinment.php">Make An Appoinment</button>
            </form>
        </div>
    </section>

    <!-- Fifth Section -->
    <section class="doctor_part">
        <p class="doctor_heading">Our Qualified Doctors</p>
        <div class="swiper doctor_list">
            <div class="swiper-wrapper">
            <div class="swiper-slide card">
                <div class="bg-image">
                    <img src="" alt="">
                </div>
                <div class="pic">
                    <img src="img/pic-1.png" alt="">
                </div>
                <div class="info">
                    <h3>Dr. Sayandip Naskar</h3>
                    <span>NEUROLOGIST</span>
                    <div class="icons">
                        <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="bg-image">
                <img src="" alt="">
                </div>
                <div class="pic">
                <img src="img/pic-2.png" alt="">
                </div>
                <div class="info">
                    <h3>Dr. Sayandip Naskar</h3>
                    <span>NEUROLOGIST</span>
                    <div class="icons">
                        <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="bg-image">
                <img src="" alt="">
                </div>
                <div class="pic">
                <img src="img/pic-3.png" alt="">
                </div>
                <div class="info">
                    <h3>Dr. Sayandip Naskar</h3>
                    <span>NEUROLOGIST</span>
                    <div class="icons">
                        <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="bg-image">
                <img src="" alt="">
                </div>
                <div class="pic">
                <img src="img/pic-4.png" alt="">
                </div>
                <div class="info">
                    <h3>Dr. Sayandip Naskar</h3>
                    <span>NEUROLOGIST</span>
                    <div class="icons">
                        <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            
            
            <div class="swiper-slide card">
                <div class="bg-image">
                    <img src="" alt="">
                </div>
                <div class="pic">
                    <img src="img/pic-1.png" alt="">
                </div>
                <div class="info">
                    <h3>Dr. Sayandip Naskar</h3>
                    <span>NEUROLOGIST</span>
                    <div class="icons">
                        <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="bg-image">
                <img src="" alt="">
                </div>
                <div class="pic">
                <img src="img/pic-2.png" alt="">
                </div>
                <div class="info">
                    <h3>Dr. Sayandip Naskar</h3>
                    <span>NEUROLOGIST</span>
                    <div class="icons">
                        <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="bg-image">
                <img src="" alt="">
                </div>
                <div class="pic">
                <img src="img/pic-3.png" alt="">
                </div>
                <div class="info">
                    <h3>Dr. Sayandip Naskar</h3>
                    <span>NEUROLOGIST</span>
                    <div class="icons">
                        <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide card">
                <div class="bg-image">
                <img src="" alt="">
                </div>
                <div class="pic">
                <img src="img/pic-4.png" alt="">
                </div>
                <div class="info">
                    <h3>Dr. Sayandip Naskar</h3>
                    <span>NEUROLOGIST</span>
                    <div class="icons">
                        <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <p class="more_doctor">
            <a href="doctors.php">All Doctors List..</a>
        </p>
    </section>

    <!-- Doctor Table -->
    <div class="doctor_table">
        <h1 class="heading">Doctor Table</h1>
        <table class="table table-bordered text-center">
          <tbody>
            <tr>
              <td>SUNDAY</td>
              <td>
                <span>Dr. Sayandip</span>
                <div>Orthopedic</div>
                <div>10:30am-11:30am</div>
              </td>
              <td>
                <span>Dr. Sudip</span>
                <div>Dentist</div>
                <div>12:00pm-2:00pm</div>
              </td>
              <td>
                <span>Dr. Ram</span>
                <div>Pediatrician</div>              
                <div>2:30pm-4:00pm</div>
              </td>
              <td>
                <span>Dr. Sham</span>
                <div>Neurologist</div>
                <div>5:00pm-6:30pm</div>
              </td>
              <td>
                <span>Dr. Sayan</span>
                <div>Cardiologist</div>
                <div>7:00pm-8:30pm</div>
              </td>
            </tr>

            <tr>
              <td>MONDAY</td>
              <td>
                <span>Dr.Sujoy</span>
                <div>Allergist</div>
                <div>11:00am-12:00pm</div>
              </td>
              <td>-----</td>
              <td>
                <span>Dr. Kumar</span>
                <div>Dermatologist</div>
                <div>3:30pm-5:00pm</div>
              </td>
              <td>-----</td>
              <td>
                <span>Dr. Roy</span>
                <div>Gynecologist</div>
                <div>7:30pm-9:00pm</div>
              </td>
            </tr>

            <tr>
              <td>TUESDAY</td>
              <td>
                <span>Dr. Ghosh</span>
                <div>Ophthalmologist</div>
                <div>9:00am-10:30am</div>
              </td>
              <td>
                <span>Dr. Sayandip</span>
                <div>Orthopedic</div>
                <div>2:00pm-3:30pm</div>
              </td>
              <td>-----</td>
              <td>
                <span>Dr. Ram</span>
                <div>Pediatrician</div>
                <div>5:00pm-6:00pm</div>
              </td>
              <td>
                <span>Dr. pal</span>
                <div>General Physician</div>
                <div>7:30pm-9:00pm</div>
              </td>
            </tr>

            <tr>
              <td>WEDNESDAY</td>
              <td>-----</td>
              <td>
                <span>Dr. Banerjee</span>
                <div>Neurologist</div>
                <div>11:00am-1:00pm</div>
              </td>
              <td>
                <span>Dr. Sayan</span>
                <div>Cardiologist</div>
                <div>4:00pm-5:30pm</div>
              </td>
              <td>
                <span>Dr. Sarkar</span>
                <div>Dermatologist</div>
                <div>6:00pm-7:00pm</div>
              </td>
              <td>-----</td>
            </tr>

            <tr>
              <td>THURSDAY</td>
              <td>
                <span>Dr. Chakraborty</span>
                <div>Pediatrician</div>
                <div>10:00am-11:00am</div>
              </td>
              <td>
                <span>Dr. Karmakar</span>
                <div>Dentist</div>
                <div>1:00pm-2:30pm</div>
              </td>
              <td>-----</td>
              <td>
                <span>Dr. Das</span>
                <div>Allergist</div>
                <div>4:00pm-5:30pm</div>
              </td>
              <td>
                <span>Dr. Singha</span>
                <div>General Surgeon</div>
                <div>7:30pm-9:00pm</div>
              </td>
            </tr>
            
            <tr>
              <td>FRIDAY</td>
              <td>
                <span>Dr. Roy</span>
                <div>Gynecologist</div>
                <div>10:30am-11:30am</div>
              </td>
              <td>-----</td>
              <td>
                <span>Dr. pal</span>
                <div>General Physician</div>
                <div>4:00pm-5:30pm</div>
              </td>
              <td>-----</td>
              <td>
                <span>Dr. Mondol</span>
                <div>ENT Specialist</div>
                <div>8:00pm-9:30pm</div>
              </td>
            </tr>
            
            <tr>
              <td>SATURDAY</td>
              <td>
                <span>Dr. Halder</span>
                <div>Cardiologist</div>
                <div>9:00am-10:30am</div>
              </td>
              <td>
                <span>Dr. Banerjee</span>
                <div>Neurologist</div>
                <div>11:30am-1:30pm</div>
              </td>
              <td>-----</td>
              <td>
                <span>Dr. Kumar</span>
                <div>Dermatologist</div>
                <div>4:00pm-6:00pm</div>
              </td>
              <td>
                <span>Dr. Ram</span>
                <div>Pediatrician</div>
                <div>7:30pm-9:00pm</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Seventh Review Section -->
    <section class="review" id="review">
        <h3>READ TESTIMONIALS</h3>
        <h1 class="heading">Our Patients Says</h1>
        <div class="swiper review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="img/pic-1.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Sayandip Naskar</h3>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                </div>
    
                <div class="swiper-slide box">
                    <img src="img/pic-2.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Sayandip Naskar</h3>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                </div>
    
                <div class="swiper-slide box">
                    <img src="img/pic-3.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Sayandip Naskar</h3>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                </div>
    
                <div class="swiper-slide box">
                    <img src="img/pic-4.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Sayandip Naskar</h3>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                </div>
    
            </div>
    
        </div>
    
    </section>

    <!-- Eighth Blog Section -->
    <section class="blogs" id="blogs">
        <h1 class="heading">Latest Blog Updates</h1>
        <div class="box-container">
            <div class="box">
                <img src="img/home_slide_background_1.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> by user </a>
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> 1st may, 2021 </a>
                    </div>
                    <h3>fresh and organic vegitables and fruits</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <img src="img/home_slide_background_2.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> by user </a>
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> 1st may, 2021 </a>
                    </div>
                    <h3>fresh and organic vegitables and fruits</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <img src="img/home_slide_background_3.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> by user </a>
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> 1st may, 2021 </a>
                    </div>
                    <h3>fresh and organic vegitables and fruits</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
        </div>
        <p class="more_blogs">
            <a href="blogs.php">More Blogs..</a>
        </p>
    </section>

    <!-- Sixth Section -->
    <section class="sixth_section">
        <div class="counter">
            <div class="col">
                <div class="counter-box">
                    <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                    <h2 class="counters">17</h2>
                    <h4>Years of Experienced</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                    <h2 class="counters">200K</h2>
                    <h4>Happy Patients</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                    <h2 class="counters">20</h2>
                    <h4>No of Doctors</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    <i class="fa fa-male" aria-hidden="true"></i>
                    <h2 class="counters">2500</h2>
                    <h4>No of Visitors</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- End Section -->
    <section class="footer">
        <table>
            <tr>
                <td><img src="img/logo.jpeg" alt="Shop Logo"></td>
                <td>Departments</td>
                <td>Link</td>
                <td>Facilities</td>
                <td>Have A Question?</td>
            </tr>
            <tr>
                <td>Far far away, behind the</td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Neurology</span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span><a href="#">Home</a></span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Emergency Help</span></td>
                <td><i class="fa fa-map-marker" aria-hidden="true"></i><span>203 Fake St. Mountain</span></td>
            </tr>
            <tr>
                <td>word mountains, far from</td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Ophthalmology</span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span><a href="about.php">About</a></span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Qualified Doctors</span></td>
                <td><span></span><span>View, San Francisco,</span></td>
            </tr>
            <tr>
                <td>the countries.</td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Neuclear Magnetic</span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span><a href="department.php">Departments</a></span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Location & Direction</span></td>
                <td><span></span><span>California, USA</span></td>
            </tr>
            <tr>
                <td></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>X-Ray</span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span><a href="doctors.php">Doctors</a></span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Order Medicine</span></td>
                <td></td>
            </tr>
            <tr>
                <td class="social_icons">
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a>
                </td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Surgical</span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span><a href="blogs.php">Blogs</a></span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Secure Paymnet</span></td>
                <td><i class="fa fa-phone" aria-hidden="true"></i><span style="color:#4091FF;">+91 1234567890</span></td>
            </tr>
            <tr>
                <td></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Cardiology</span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span><a href="appoinment.php">Appoinments</a></span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Stored Safely</span></td>
                <td><i class="fa fa-envelope" aria-hidden="true"></i><span><a href="#">yourmail.com@gmail.com</a></span></td>
            </tr>
            <tr>
                <td></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span>Dental</span></td>
                <td><i class="fa fa-angle-right" aria-hidden="true"></i><span><a href="gallery.php">Gallery</a></span></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </section>

    <!-- Footer -->
    <footer class="copy_right">
        <p>Copyright ©2021 All rights reserved</p>
    </footer>

    <script src="assets/bootstarp/js/bootstarp.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="jquery.js" charset="utf-8"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="jquery.counterup.min.js"></script>
  
</body>
</html>