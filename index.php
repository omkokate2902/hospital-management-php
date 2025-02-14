
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Bai Ratanabai Gharda Hospital </title>
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Website Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM+I7y0xQOgO6Zf6A8A1i57a0QYkMjjb1F/1P" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        header {
            position: relative;
            overflow: hidden;
            padding: 20px 0;
            color: #fff; /* Text color for better contrast */
        }
        /* Animated gradient background */
        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(270deg, #4caf50, #8bc34a, #cddc39, #ffeb3b, #ffc107);
            background-size: 400% 400%;
            animation: gradient-animation 15s ease infinite;
            z-index: 0; /* Ensure background is behind the content */
        }
        @keyframes gradient-animation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .header-nav {
            position: relative; /* Make nav content above the background */
            z-index: 1;
        }
        .nav-item ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around; /* Distribute menu items evenly */
        }
        .nav-item ul li a {
            color: #fff; /* White color for links */
            text-decoration: none;
            font-size: 20px;
            transition: color 0.3s, transform 0.3s; /* Smooth color change and scale effect */
        }
        .nav-item ul li a:hover {
            color: #ffc107; /* Change color on hover */
            transform: scale(1.1); /* Slightly enlarge the text on hover */
        }
        .appoint a {
            color: #fff; /* White color for button text */
            padding: 10px 20px; /* Padding for the button */
            background-color: #28a745; /* Bootstrap success color */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s, transform 0.3s; /* Smooth transition */
            text-decoration: none; /* Remove underline */
        }
        .appoint a:hover {
            background-color: #218838; /* Darker green on hover */
            transform: scale(1.05); /* Slightly enlarge button on hover */
        }
        /* Animated headline style */
        .hospital-headline {
            position: absolute;
            bottom: 10px; /* Position above the bottom */
            left: 100%; /* Start off-screen to the right */
            white-space: nowrap; /* Prevent wrapping */
            font-size: 24px; /* Adjust font size as needed */
            color: #fff; /* White color for the headline */
            animation: slide-left 10s linear infinite; /* Animation */
        }
        @keyframes slide-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
    </style>
</head>
<body>

    <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12" style="color:#fff;font-weight:bold; font-size: 35px; margin-top: 0% !important;">
                        <img src="assets/images/Gharda Hospital Logo (2).jpg" alt="Gharda Hospital Logo" style="max-width: 75%; height: auto;">
                        <a data-toggle="collapse" data-target="#menu" href="#menu">
                            <i class="fas d-block d-md-none small-menu fa-bars"></i>
                        </a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item" style="color:#fff;font-weight:bold; margin-top: 2% !important;">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about_us">About </a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact_us">Contact </a></li>
                            <li><a href="#logins">Logins</a></li>  
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Animated Hospital Headline -->
        <div class="hospital-headline">Bai Ratnabai Gharda Hospital</div>
    </header>

</body>
</html>




     <!-- ################# Slider Starts Here#######################--->
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Carousel with Moving Text</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .slider-detail {
            position: relative;
            overflow: hidden;
        }
        .carousel-caption h5 {
            animation: fadeInSlide 2s ease forwards;
            opacity: 0;
            transform: translateY(-30px);
            background: linear-gradient(90deg, blue, green, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        @keyframes fadeInSlide {
            0% { opacity: 0; transform: translateY(-30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .moving-text {
            position: absolute;
            bottom: 20px;
            white-space: nowrap;
            font-size: 24px;
            color: #fff;
            animation: slide-left 20s linear infinite;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }
        @keyframes slide-left {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .ambulance {
            width: 100px;
            position: absolute;
            bottom: 100px;
            left: 0;
            animation: moveAmbulance 10s linear infinite;
        }
        @keyframes moveAmbulance {
            0% { transform: translateX(0); }
            100% { transform: translateX(100vw); }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="slider-detail">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <!-- First Slide with Video -->
                <div class="carousel-item active" data-interval="14000"> <!-- Set interval for 14 seconds -->
                    <video class="d-block w-100" autoplay muted loop>
                        <source src="assets/images/video/video.mp4" type="video/mp4">
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bai Ratnabai Gharda Hospital</h5>
                    </div>
                </div>

               
            

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Animated Moving Text -->
        <div class="moving-text">
            Bai Ratnabai Gharda Hospital, Contact Info - 9579787466, Email - info@brghlavel.org / admin@brghlavel.org 
            Address - A/P Lavel, Tal. Khed, Dist - Ratnagiri, 415708
        </div>

        <!-- Ambulance Image -->
        <img src="https://img.icons8.com/color/48/000000/ambulance.png" alt="Ambulance" class="ambulance" />
    </div>

</body>
</html>

  <!--  ************************* Logins ************************** -->
    
    
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/patient.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Patient Login</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>
            
        </div>
    </section>  







    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Cardiology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Orthopaedic</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>Neurologist</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Pharma Pipeline</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Pharma Team</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>High Quality treatments</h5>

                    </div>
                </div>
            </div>






        </div>

    </section>
    
    
  
    
    <!--  ************************* About Us Starts Here ************************** -->
        
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm image-bg no-padding">
                
            </div>
            <div class="col-sm abut-yoiu">
                <h3>About Our Hospital</h3>
                <p>
Our hospital, a 30-bedded Institute, stands as a beacon of healthcare excellence in the region, equipped with a dedicated team of medical professionals including full-time gynecologists, intensivists, and medical officers available round the clock. Our mission is deeply rooted in serving the community and addressing the healthcare needs of the nearby villages, especially those who are underserved.

 

In terms of services, our hospital offers a comprehensive range of medical treatments and facilities. From general surgeries to specialized procedures such as deliveries, C-sections, THR, TKR, etc we ensure top-notch care for our patients. Additionally, we boast specialized departments including radiology, orthopedics, and have provisions for CT Scan, sonography, an in-house pathology lab, and pharmacy services. It's worth noting that we extend our services under various government schemes such as Ayushman Bharat and MJPJAY, ensuring accessibility and affordability for all.</p>

            </div>
        </div>
    </section>    
    
    
            <!--  ************************* Gallery Starts Here ************************** -->
        <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
              <div class="row">
                

   
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
            </div>

          

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->
    
    
     <!--  ************************* Contact Us Starts Here ************************** -->
    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
          

        </div>
    </section>
    
    
    
    
    
    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call for Ambulance</title>
    <style>
        /* Styling for the ambulance image */
        .ambulance-image {
            width: 250px; /* Adjust the width */
            height: auto; /* Keeps aspect ratio */
            cursor: pointer;
        }

        /* Styling for the call text */
        .call-text {
            font-size: 30px; /* Adjust text size */
            color: red; /* Red for emergency */
            margin-left: 10px;
            font-weight: bold; /* Make it bold */
            animation: blink 1.5s infinite; /* Blinking animation */
        }

        /* Keyframes for blinking effect */
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* Optional: Add a pulsing effect */
        .pulsing-text {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>

    <!-- Image for Ambulance Icon with Call Us text -->
    <a href="tel:9067496368" title="Call Ambulance">
        <img src="/hospital/assets/images/gallery/unnamed.png" alt="Call Us for Ambulance" class="ambulance-image">
        <span class="call-text">Call Us for Ambulance</span>
    </a>

</body>
</html>

</body>
</html> 
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
         Bai Ratanabai Gharda Hospital
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>

<!-- ################# whatsapp#######################--->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Icon with Heading</title>
    <style>
        /* Style for WhatsApp icon */
        a:hover img {
            transform: scale(1.1); /* Hover effect */
        }
        /* Style for the heading */
        .ask-questions-heading {
            position: fixed;
            bottom: 70px; /* Position below the WhatsApp icon */
            right: 20px;
            font-size: 20px; /* Adjust size as needed */
            color: green; /* WhatsApp-like green color */
            font-weight: bold;
            text-align: center; /* Center the text */
            animation: pulse 1.5s infinite; /* Continuous pulse animation */
        }

        /* Keyframes for pulse effect */
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); } /* Scale up */
        }
    </style>
</head>
<body>

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/919067496368" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" style="position:fixed; bottom:20px; right:20px; width:50px; height:50px;">
    </a>

    <!-- Heading for Ask Questions -->
    <h2 class="ask-questions-heading">Ask Questions</h2>

</body>
</html>








