<?php

        //when contact from submit
        
    //get the contact inputs
    if (isset($_POST['cnt_submit'])) {

        //get inputs
        $name       =       $_POST['name'];
        $email      =       $_POST['email'];
        $message    =       $_POST['message'];

        $to         = "contact@ifmsindia.in";
        $subject    = "Contact from IFMS web.";
        $headers    = "From:".$email . "\r\n";
        //echo $name.$email.$message;


        $sendmail = mail($to,$subject,$message,$headers);

        if($sendmail){
                
                echo "<script>alert('Thanks for contact. We will connect with you in short time.')</script>";
        }
        else{

                echo "Mail error.";
        }
    }



?>

<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>IFMS</title>

    <!--====== Favicon Icon ======-->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png"> -->

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    
    <!--====== PRELOADER PART START ======-->
<!-- 
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->

    <section class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="assets/images/log_n.svg" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">ABOUT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#portfolio">SERVICES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimonial">WHY IFMS?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">CONTACT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#workwithus">WORK WITH US</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="https://wa.me/8488830443?text=Hello_IFMS" target="_blank">
                                            <i class="lni lni-whatsapp wa"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- <div class="navbar-btn d-none mt-15 d-lg-inline-block">
                                <a class="menu-bar" href="#side-menu-right"><i class="lni-menu"></i></a>
                            </div> -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="slider-area">
            <div class="bd-example">
                <div id="carouselOne" class="carousel slide" data-ride="carousel">
                    <!-- <ol class="carousel-indicators">
                        <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselOne" data-slide-to="1"></li>
                        <li data-target="#carouselOne" data-slide-to="2"></li>
                    </ol> -->

                    <div class="carousel-inner">
                        <div class="carousel-item bg_cover active" style="background-image: url(assets/images/s1.png);margin-top:15px">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">We Provide Services for Commercial and Residential Spaces.</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="#portfolio">All Services</a></li>
                                                <!-- <li><a class="main-btn rounded-one" href="#">DOWNLOAD</a></li> -->
                                            </ul>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                    
                </div> <!-- carousel -->
            </div> <!-- bd-example -->
        </div>

    </section>

    <!--====== NAVBAR PART ENDS ======-->

    <!--====== SAIDEBAR PART START ======-->

    <div class="sidebar-right">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo text-center">
                <a href="#"><img src="assets/images/logo-alt.png" alt="Logo"></a>
            </div> <!-- logo -->
            <div class="sidebar-menu">
                <ul>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">RESOURCES</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div> <!-- menu -->
            <div class="sidebar-social d-flex align-items-center justify-content-center">
                <span>FOLLOW US</span>
                <ul>
                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                </ul>
            </div> <!-- sidebar social -->
        </div> <!-- content -->
    </div>
    <div class="overlay-right"></div>

    <!--====== SAIDEBAR PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="about-image text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="100">
                        <!-- <img src="assets/images/s1-03.svg"> -->
                    </div>
                    <div class="section-title text-center mt-30 pb-40">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">About Us</h4>
                        <br>
                        <p class="text wow fadeInUp text-justify p-2" style="line-height:1.6" data-wow-duration="1.5s" data-wow-delay="1s">IFMS is a young and fast growing organisation backed by professionals with rich relevant operational experience in various industries and the Indian Armed Forces.
                        IFMS is one of the few companies which understands the business of facility management</b> and strives to provide best solutions and services for its clients, in residential and commercial spaces. It provides one stop shop solutions as per the need and requirement of clients.
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="about-icon">
                            <img src="assets/images/mission.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Mission</h4>
                            <p class="text">“To provide best space management services in best possible manner at most affordable price”.</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.4s">
                        <div class="about-icon">
                            <img src="assets/images/vision.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Vision</h4>
                            <p class="text">“To become the obvious choice in residential and commercial space management in Indian market”.</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== portfolio PART START ======-->

    <section id="portfolio" class="portfolio-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Our Services</h3>
                        <!-- <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p> -->
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu pt-30 text-center">

                        <ul>
                            <li data-filter="*" class="active">ALL Services</li>
                            <li data-filter=".security-services">Security Services</li>
                            <li data-filter=".soft-services">Hygiene & Soft Services</li>
                            <li data-filter=".pest-services">Pest Management</li>
                            <li data-filter=".special-services">Specialised Services</li>
                            <li data-filter=".business-services">Business Support Solutions</li>
                            <li data-filter=".technical-services">Technical Solutions</li>
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
            </div> <!-- row -->
            <div class="row grid">
                <div class="col-lg-4 col-sm-6 security-services planning-3 services pricing-style-one mt-40 wow fadeIn" id="security">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="assets/images/sec_guard.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="assets/images/sec_guard.jpg"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <!-- <a href="#"><i class="lni-link"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text"  >
                            <h4 class="portfolio-title"><a href="#">Security management for residential And commercial spaces.</a></h4>
                            <p class="text">
                                <div class="pricing-list">
                                    <ul class="">
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Manual and electronic surveillances.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Security manpower.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Security review and audits.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Hazard identification and risk assessment.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Maintenance and operations of fire-fighting appliances.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Maintenance and operations of security appliances.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Parking management.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Fire & safety training.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Emergency mock drills and evacuation drills for residential and commercial premises.</span></li>

                                    </ul>
                                </div>
                            </p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 soft-services pricing-style-one mt-40 wow fadeIn" id="soft">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="portfolio-image">
                            <img src="assets/images/safsafai.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="assets/images/safsafai.jpg"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <!-- <a href="#"><i class="lni-link"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text" >
                            <h4 class="portfolio-title"><a href="#">Hygiene and soft service solutions.</a></h4>
                            <p class="text">
                                <div class="pricing-list">
                                    <ul>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>End to end housekeeping and cleaning service solutions.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Pantry services.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Club & gym management.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Landscaping and grounds maintenance services.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Front office and reception management.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Guest house management.</span></li>

                                    </ul>
                                </div>
                            </p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 pest-services pricing-style-one mt-40 wow fadeIn" id="pest">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <div class="portfolio-image">
                            <img src="assets/images/pest_control.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="assets/images/pest_control.jpg"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <!-- <a href="#"><i class="lni-link"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text " >
                            <h4 class="portfolio-title text-center"><a href="#">Pest Management.</a></h4>
                            <p class="text ml-2 p-2">
                            Our integrated pest control services protect your premises, products and 
                            goods and ensure they meet the appropriate quality, health and safety regulations.


                                <div class="pricing-list">
                                        <ul>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Cockroach control.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Termite control.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Anti-mosquito treatment.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Rodent control.</span></li>
                                        </ul>
                                </div>

                                
                                <!-- <ul class="ml-4 p-2">
                                    <li>Cockroach control.</li>
                                    <li>Termite control.</li>
                                    <li>Anti-mosquito treatment.</li>
                                    <li>Rodent control.</li>
                            
                                </ul> -->
                            </p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 business-services pricing-style-one mt-40 wow fadeIn" id="business">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="assets/images/desk.jpg" alt="" height="220px">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="assets/images/desk.jpg"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <!-- <a href="#"><i class="lni-link"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Business support solutions.</a></h4>
                            <div class="pricing-list">
                                        <ul>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Space planning.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Staffing solutions.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Move management.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Transport & logistics.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Mailroom and record management.</span></li>
                                        </ul>
                                </div>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 technical-services pricing-style-one mt-40 wow fadeIn" id="technical">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="portfolio-image">
                            <img src="assets/images/wire.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="assets/images/wire.jpg"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <!-- <a href="#"><i class="lni-link"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Technical solutions.</a></h4>
                            <div class="pricing-list">
                                        <ul>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Electro mechanical services & building repairs.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>HVAC operations and maintenance.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Electrical operations and maintenance.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Plumbing.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Carpentry.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>STP/WTP maintenance.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Repairs and maintenance.</span></li>
                                        
                                        </ul>
                                </div>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 special-services pricing-style-one mt-40 wow fadeIn" style="border-shadow:none" id="special">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <div class="portfolio-image">
                            <img src="assets/images/facade_cleaning.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="assets/images/facade_cleaning.jpg"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <!-- <a href="#"><i class="lni-link"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Specialised service solutions.</a></h4>
                            <p class="text">
                            <div class="pricing-list">
                                        <ul>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Maintenance and AMC management.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Property management.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Waste management solutions.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Façade cleaning services.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Occupational health and safety management.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Energy management.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Strategic sourcing & vendor management.</span></li>
                                        <li class="d-flex"><span><i class="lni-check-mark-circle"></i></span><span>Retrofit project solutions.</span></li>
                                        </ul>
                                </div>

                            </p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== portfolio PART ENDS ======-->
    
    
    <!--====== TESTIMONIAL THREE PART START ======-->

    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title pb-20">
                        <h3 class="title">Why IFMS?</h3>
                        <br>
                        <br>
                        <ul class="whyifms">
                            <li><i class="lni lni-check-box"></i> <b>IFMS is backed by experience of former professionals from the Indian Armed Forces.</b></li>
                            <li><i class="lni lni-check-box"></i> <b>Integrated Solutions for all residential and commercial space management.</b></li>
                            <li><i class="lni lni-check-box"></i> <b>At IFMS safety is our prime focus and priority.</b></li>
                            <li><i class="lni lni-check-box"></i> <b>Process driven approach.</b></li>
                            <li><i class="lni lni-check-box"></i> <b>IFMS is specialised at optimum cost utility.</b></li>
                            <li><i class="lni lni-check-box"></i> <b>Professional service delivery with quality.</b></li>
                            <li><i class="lni lni-check-box"></i> <b>Streamlined operations.</b></li>
                            <li><i class="lni lni-check-box"></i> <b>Flat, flexible and interactive organisation.</b></li>
                        </ul>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL THREE PART ENDS ======-->
    
    <!--====== CLIENT LOGO PART START ======-->

    <section id="clients" class="client-logo-area">
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Our Clients</h3>
                        <br><br>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row client-active">
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/big_bazar.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/fbb.jpg" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/ggc.jpg" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/iscon2.jpg" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/savy.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/city_gold_logo.jpg" alt="Logo">
                    </div> <!-- single client -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CLIENT LOGO PART ENDS ======-->
    
    <!--====== CONTACT TWO PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Get in touch</h3>
                        <!-- <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p> -->
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-two mt-50 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <!-- <h4 class="contact-title">Lets talk about the project</h4>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde repellendus delectus facilis quia consequatur maxime perferendis! Sequi, modi consequatur.</p> -->
                        <ul class="contact-info">
                            <li><i class="lni-money-location"></i> G 1004, Godrej Garden City, Ahmedabad.</li>
                            <li><i class="lni-phone-handset"></i> +91 8511187076</li>
                            <li><a class="page-scroll" href="https://wa.me/8488830443?text=Hello_IFMS" target="_blank">
                                <i class="lni-whatsapp"></i> +91 8488830443</a>
                            </li>
                            <li><i class="lni-envelope"></i> contact@ifmsindia.in</li>
                        </ul>
                    </div> <!-- contact two -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <form  id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-input mt-15">
                                <label>Name</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="Name" name="name" required>
                                    <i class="lni-user"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Email</label>
                                <div class="input-items default">
                                    <input type="email" placeholder="Email" name="email" required>
                                    <i class="lni-envelope"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Message</label>
                                <div class="input-items default">
                                    <textarea placeholder="Message" name="message" required></textarea>
                                    <i class="lni-pencil-alt"></i>
                                </div>
                            </div> <!-- form input -->
                            <p class="form-message"></p>
                            <div class="form-input rounded-buttons mt-20">
                                <button type="submit" name="cnt_submit" class="main-btn rounded-three">Submit</button>
                            </div> <!-- form input -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== CONTACT TWO PART ENDS ======-->

    
    
    <!--====== wORK with us ======-->

    <section id="workwithus" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Work with us</h3>
                        <!-- <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p> -->
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6 offset-md-3">
                    <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <form  id="work-with-us-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                            <div class="form-input mt-15">
                                <label>Name</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="Name" name="name" required>
                                    <i class="lni-user"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Mobile No.</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="Mobile No." name="mobile" required>
                                    <i class="lni-mobile"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Position applied for</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="Post applied for" name="position" required>
                                    <i class="lni-user"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Attach your CV / Resume.</label>
                                <br>
                                <!-- <div class="input-items default"> -->
                                    <input type="file" name="cv_resume" required>
                                    <!-- <i class="lni-pencil-alt"></i> -->
                                <!-- </div> -->
                            </div> <!-- form input -->
                            <p class="form-message"></p>
                            <div class="form-input rounded-buttons mt-20">
                                <button type="submit" name="upload" class="main-btn rounded-three">Upload</button>
                            </div> <!-- form input -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT TWO PART ENDS ======-->


    <!--====== FOOTER FOUR PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Links</h6>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#portfolio">Services</a></li>
                                <li><a href="#testimonial">Why IFMS?</a></li>
                                <li><a href="#clients">Clients</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Services</h6>
                            <ul>
                                <li><a href="#security">Security Services</a></li>
                                <li><a href="#soft">Hygiene & Soft Services</a></li>
                                <li><a href="#pest">Pest Management</a></li>
                                <li><a href="#special">Specialised Services</a></li>
                                    <li><a href="#business">Business Support Solutions</a></li>
                                <li><a href="#technical">    Technical Solutions </a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                            <p class="text">Crafted by <a style="color: #fc4a1a" rel="nofollow" href="">prashant.tech.dev</a></p>
                        </div> <!--  copyright -->
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-logo text-center mt-10">
                            <a href="#home"><img src="assets/images/log_n.svg" alt="Logo"></a>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-5">
                        <ul class="social text-center text-lg-right mt-10">
                            <!-- <li><a href=""><i class="lni-facebook-filled"></i></a></li>
                            <li><a href=""><i class="lni-twitter-original"></i></a></li>
                            <li><a href=""><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li> -->
                        </ul> <!-- social -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER FOUR PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->  

    <!--====== PART START ======-->



    <!--====== PART ENDS ======-->










    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>

<?php

// //get the attached file and continue
// if(isset($_POST['upload'])){

//     if (isset($_FILES) && (bool) $_FILES) {

//         $allowedExtensions = array("pdf", "doc", "docx");
    
//         $files = array();
//         foreach ($_FILES as $name => $file) {
//             $file_name = $file['name'];
//             $temp_name = $file['tmp_name'];
//             $file_type = $file['type'];
//             $path_parts = pathinfo($file_name);
//             $ext = $path_parts['extension'];
//             if (!in_array($ext, $allowedExtensions)) {
//                 // die("File $file_name has the extensions $ext which is not allowed");
//                 echo "<script>alert('Only PDF, DOC , DOCX file allowed.')</script>";
//             }
//             array_push($files, $file);
//         }
        
//         $semi_rand = md5(time());
//         $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    
    
//         $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
//         $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
//         $message .= "--{$mime_boundary}\n";
    
//         // preparing attachments
//         for ($x = 0; $x < count($files); $x++) {
//             $file = fopen($files[$x]['tmp_name'], "rb");
//             $data = fread($file, filesize($files[$x]['tmp_name']));
//             fclose($file);
//             $data = chunk_split(base64_encode($data));
//             $name = $files[$x]['name'];
//             $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
//                     "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
//                     "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
//             $message .= "--{$mime_boundary}\n";

//             //$actualMsg = "Name : ".$name."\n Contact : ".$mobile."\n applied For : ".$position."\n".$message;
            
//         }
    

        

//         // send
//         $to = 'leedonniee@gmail.com';
//         $subject = "Post applied from the IFMS web.";
//         $cndname  = $_POST['name'];
//         $cndmobile  = $_POST['mobile'];
//         $cndposition  = $_POST['position'];
//         $senderMail   = "leedonniee@gmail.com";

//         $from = "leedonniee@gmail.com"; 
//         $headers = "From: $from";

//         //$content = "By : ".$cndname."\n Mobile : ".$cndmobile."\n Position : ".$cndposition."\n Resume or CV :".$message;
//         $content = $message;
//         $ok = mail($to, $subject, $message, $headers);
//         // $wo = mail($to, $subject, $content ,$headers);
//     if ($ok) {
//         // echo "<p style='tex-align:center'>mail sent to $to!</p>";
//         echo "<script>alert('We have received your information. We will contact you soon.')</script>";
//     } else {
//         echo "<p>mail could not be sent!</p>";
//     }
// }


// }//main if ends


///checking 2
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['upload'])){
    // Get the submitted form data
    $postData = $_POST;
    $cndname = $_POST['name'];
    $cndmobile = $_POST['mobile'];
    $cndposition = $_POST['position'];
    // Check whether submitted data is not empty
    if(!empty($cndname) && !empty($cndmobile) && !empty($cndposition)){
        
        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
        }else{
            $uploadStatus = 1;
            
            // Upload attachment file
            if(!empty($_FILES["attachment"]["name"])){
                
                // File path config
                $targetDir = "uploads/";
                $fileName = basename($_FILES["attachment"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                
                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $targetFilePath;
                    }else{
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }
            }
            
            if($uploadStatus == 1){
                
                // Recipient
                $toEmail = 'admin@example.com';

                // Sender
                $from = 'sender@example.com';
                $fromName = 'CodexWorld';
                
                // Subject
                $emailSubject = 'Contact Request Submitted by '.$name;
                
                // Message 
                $htmlContent = '<h2>Contact Request Submitted</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Subject:</b> '.$subject.'</p>
                    <p><b>Message:</b><br/>'.$message.'</p>';
                
                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";

                if(!empty($uploadedFile) && file_exists($uploadedFile)){
                    
                    // Boundary 
                    $semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                    
                    // Headers for attachment 
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    
                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                    
                    // Preparing attachment
                    if(is_file($uploadedFile)){
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                    
                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath); 
                    
                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                }else{
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
                }
                
                // If mail sent
                if($mail){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                    
                    $postData = '';
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                }
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
    }
}

?>

