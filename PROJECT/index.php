<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vaccine On Time</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="Assets/Templetes/Main/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="Assets/Templetes/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="Assets/Templetes/Main/lib/animate/animate.min.css" rel="stylesheet">
    <link href="Assets/Templetes/Main/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="Assets/Templetes/Main/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Assets/Templetes/Main/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Assets/Templetes/Main/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
     <style>
        .text-primary {
    color: #007b83 !important;
        }
        .btn-primary {
    color: #000;
    background-color: #007b83;
    border-color: #06A3DA;
        }
        
     </style>



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="index.php" class="navbar-brand p-0 d-flex align-items-center">
        <!-- Add the logo here -->
        <img src="Assets/Templetes/Main/img/Vaccinelogo.jpg" alt="Logo" style="height:80px; margin-right:0px;">
        <h1 class="m-0 text-primary">Vaccine On Time</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="Guest/NewUser.php" class="nav-item nav-link">User Registration</a>
            <a href="Guest/NewCentre.php" class="nav-item nav-link">Center Registration</a>
        </div>
        <a href="Guest/Login.php" class="btn btn-primary py-2 px-4 ms-3">Login</a>
    </div>
</nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="Assets/Templetes/Main/img/doctor.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5> -->
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Hello! Ready to safeguardyour health?</h5>
                            <h3 class="display-1 text-white mb-md-4 animated zoomIn">WELCOME TO <b>VACCINE ON TIME</b></h3>
                    
                            <!-- <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a> -->
                            <!-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="Assets/Templetes/Main/img/frontsecond.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">"We are determined for your better life"</h5>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Book your vaccine appointments in just a few clicks!</h5>
                            <!-- <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Dental Treatment</h1> -->
                            <a href="Guest/Login.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Now</a>
                            <!-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

     <!-- About Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h5 class="display-5 mb-0">Welcome to VACCINE ON TIME</h5>
                    </div>
                    <!-- <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore</h4> -->
                    <p class="mb-4"><b>At Vaccine On Time, we simplify the vaccination process to make healthcare more accessible for everyone. Our platform offers an easy way to book vaccinations for all age groups, connecting you with nearby hospitals and real-time appointment availability. We’re dedicated to reducing the hassle of healthcare management with a user-friendly interface. Your health and convenience are our top priorities. Thank you for trusting us to be your vaccination booking partner.
</b></p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>User Friendly</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Real Time Availability</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="Guest/NewUser.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Register Now</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="Assets/Templetes/Main/img/file.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Pricing Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <!-- Separate Title -->
    <div class="container text-start mb-4"> <!-- Left-aligned title to the full width of the webpage -->
        <h3 class="position-relative d-inline-block text-primary text-uppercase">GET VACCINATED IN 4 STEPS</h3>
    </div>
    
    <!-- Centered Content -->
    <div class="container d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                <!-- Price Items -->
                <div class="price-item pb-4">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="Assets/Templetes/Main/img/Steps1.jpg" alt="">
                    </div>
                    <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                        <h4>STEP 1 - Register or Log In</h4>
                        <hr class="text-primary w-50 mx-auto mt-0">
                        <div class="d-flex justify-content-between mb-3"><span><b>Click on the “Register” button.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span><b>Fill in your details and create your account.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span><b>Already registered? Just click “Log In.”</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                    </div>
                </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="Assets/Templetes/Main/img/Step2.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <!-- <h2 class="text-primary m-0">$49</h2> -->
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Step 2 - Choose a Vaccine</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span><b>Log in to your account.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span><b>Browse the vaccine options by category.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span><b>Select the vaccine you need.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                                <!-- <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a> -->
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="Assets/Templetes/Main/img/Step3book.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <!-- <h2 class="text-primary m-0">$99</h2> -->
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Step 3 - Select a Nearby Hospital</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span><b>See the list of hospitals near you.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span><b>Check available times and details.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span><b>Pick the hospital that suits you.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                                <!-- <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a> -->
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="Assets/Templetes/Main/img/Step4.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <!-- <h2 class="text-primary m-0">$99</h2> -->
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Step 4 - Confirm Your Booking</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span><b>Review your selection.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span><b>Confirm the booking.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span><b>Get your token and bring it to the hospital.</b></span><i class="fa fa-check text-primary pt-1"></i></div>
                                <!-- <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->

<br><br>
   <!-- Why Book With Us Start -->
<div class="container-fluid py-5" style="background-image: url('Assets/Templetes/Main/img/why book.jpg'); background-size: cover; background-position: center;">
    <div class="container" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
        <h3 class="text-center text-primary mb-4">Why Book With Us?</h3>
        <div class="row">
            <!-- List of Reasons on the Left -->
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <i class="fa fa-clock text-primary fa-2x me-2"></i> <b>Quick and Easy Booking</b>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-calendar text-primary fa-2x me-2"></i> <b>24/7 Availability</b>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-hospital text-primary fa-2x me-2"></i><b> Trusted Healthcare Partners</b>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-dollar-sign text-primary fa-2x me-2"></i><b> Affordable and Transparent Pricing</b>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-lock text-primary fa-2x me-2"></i><b> Safe and Secure</b>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-tablet-alt text-primary fa-2x me-2"></i><b> User-Friendly Interface</b>
                    </li>
                </ul>
            </div>
            <!-- Detail Box on the Right -->
            <div class="col-md-8">
                <div id="detail1" class="detail-box" style="display: none;">
                    <h5 class="text-primary mb-2">Quick and Easy Booking</h5>
                    <p><b>Book your vaccinations in just a few clicks, saving you time and hassle.</b></p>
                </div>
                <div id="detail2" class="detail-box" style="display: none;">
                    <h5 class="text-primary mb-2">24/7 Availability</h5>
                    <p><b>Book appointments anytime with our 24/7 availability.</b></p>
                </div>
                <div id="detail3" class="detail-box" style="display: none;">
                    <h5 class="text-primary mb-2">Trusted Healthcare Partners</h5>
                    <p><b>We connect you with the best hospitals and healthcare providers in your area.</b></p>
                </div>
                <div id="detail4" class="detail-box" style="display: none;">
                    <h5 class="text-primary mb-2">Affordable and Transparent Pricing</h5>
                    <p><b>We offer competitive prices with no hidden fees, so you know exactly what to expect.</b></p>
                </div>
                <div id="detail5" class="detail-box" style="display: none;">
                    <h5 class="text-primary mb-2">Safe and Secure</h5>
                    <p><b>Your personal information is protected with industry-leading security measures.</b></p>
                </div>
                <div id="detail6" class="detail-box" style="display: none;">
                    <h5 class="text-primary mb-2">User-Friendly Interface</h5>
                    <p><b>Our platform is designed to be easy to navigate, even for first-time users.</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Book With Us End -->

<script>
let currentDetail = 0;
const details = document.querySelectorAll('.detail-box');

function showNextDetail() {
    // Hide all details
    details.forEach(detail => detail.style.display = 'none');
    
    // Show the next detail
    details[currentDetail].style.display = 'block';
    
    // Move to the next detail, or loop back to the first
    currentDetail = (currentDetail + 1) % details.length;
}

// Show the first detail immediately
showNextDetail();

// Set interval to show next detail every 3 seconds
setInterval(showNextDetail, 3000);
</script>

<script>
function showDetail(detailId) {
    // Hide all details
    var details = document.querySelectorAll('.detail-box');
    details.forEach(function(detail) {
        detail.style.display = 'none';
    });
    
    // Show the selected detail
    document.getElementById(detailId).style.display = 'block';
}
</script>

<script>
function showDetail(detailId) {
    // Hide all details
    var details = document.querySelectorAll('.detail-box');
    details.forEach(function(detail) {
        detail.style.display = 'none';
    });
    
    // Show the selected detail
    document.getElementById(detailId).style.display = 'block';
}
</script>


<div class="container-fluid py-5 my-5 wow fadeInUp" data-wow-delay="0.1s" style="background: url('Assets/Templetes/Main/img/Review.jpg') no-repeat center center/cover; background-size: cover;">
    <!-- Overlay -->
    <div class="container py-4 px-4" style="background: rgba(0, 0, 0, 0.6); border-radius: 50px; height: auto; max-width: 90%;">
        <div class="text-center mb-5">
            <h1 class="display-4 text-white wow fadeInUp" data-wow-delay="0.3s">Happy Users</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s" style="background-color: rgba(255, 255, 255, 0.8); box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);">
                    <div class="testimonial-item text-center">
                        <img class="img-fluid mx-auto rounded-circle mb-4" src="Assets/Templetes/Main/img/testimonial-1.jpg" alt="" style="border: 3px solid #02d1ff; width: 80px; height: 80px;">
                        <p class="fs-5 text-dark">
                            Booking my vaccination was quick and easy with a user-friendly site and a smooth, step-by-step process. Finding a nearby hospital was seamless, and the token system made my appointment hassle-free. I highly recommend Vaccine On Time!
                        </p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-dark mb-0">Catherin Theresa</h4>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid mx-auto rounded-circle mb-4" src="Assets/Templetes/Main/img/testimonial-2.jpg" alt="" style="border: 3px solid #02d1ff; width: 80px; height: 80px;">
                        <p class="fs-5 text-dark">The site is slick and super easy to use—I had my appointment booked in just minutes. The token system was genius; I felt like a VIP walking into the hospital! Highly impressed and will definitely use it again.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-dark mb-0">Jesicca John</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 
    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>
                        Distributed by <a class="text-white border-bottom" href="https://themewagon.com">ThemeWagon</a>              
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/Templetes/Main/lib/wow/wow.min.js"></script>
    <script src="Assets/Templetes/Main/lib/easing/easing.min.js"></script>
    <script src="Assets/Templetes/Main/lib/waypoints/waypoints.min.js"></script>
    <script src="Assets/Templetes/Main/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="Assets/Templetes/Main/lib/tempusdominus/js/moment.min.js"></script>
    <script src="Assets/Templetes/Main/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="Assets/Templetes/Main/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="Assets/Templetes/Main/lib/twentytwenty/jquery.event.move.js"></script>
    <script src="Assets/Templetes/Main/lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="Assets/Templetes/Main/js/main.js"></script>
</body>

</html>