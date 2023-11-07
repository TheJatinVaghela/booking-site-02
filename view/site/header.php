<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 08:47:24 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo $this->assets;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->assets;?>css/all.min.css">
    <link rel="stylesheet" href="<?php echo $this->assets;?>css/animate.css">
    <link rel="stylesheet" href="<?php echo $this->assets;?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $this->assets;?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $this->assets;?>css/odometer.css">
    <link rel="stylesheet" href="<?php echo $this->assets;?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $this->assets;?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $this->assets;?>css/nice-select.css">
    <link rel="stylesheet" href="<?php echo $this->assets;?>css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="<?php echo $this->assets;?>css/main.css">

    <link rel="shortcut icon" href="<?php echo $this->assets ;?>images/favicon.png" type="image/x-icon">

    <title>BOOKING - 2</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="<?php echo $this->assets;?>images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="http://localhost/clones/booking-site-02/public/home" class="active">Home</a>
                    </li>
                    <li>
                        <a href="#0">movies</a>
                        <ul class="submenu">
                            <li>
                                <a href="movie-grid.html">Movie Grid</a>
                            </li>
                            <li>
                                <a href="movie-list.html">Movie List</a>
                            </li>
                            <li>
                                <a href="movie-details.html">Movie Details</a>
                            </li>
                            <li>
                                <a href="movie-details-2.html">Movie Details 2</a>
                            </li>
                            <li>
                                <a href="movie-ticket-plan.html">Movie Ticket Plan</a>
                            </li>
                            <li>
                                <a href="movie-seat-plan.html">Movie Seat Plan</a>
                            </li>
                            <li>
                                <a href="movie-checkout.html">Movie Checkout</a>
                            </li>
                            <li>
                                <a href="popcorn.html">Movie Food</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">events</a>
                        <ul class="submenu">
                            <li>
                                <a href="events.html">Events</a>
                            </li>
                            <li>
                                <a href="event-details.html">Event Details</a>
                            </li>
                            <li>
                                <a href="event-speaker.html">Event Speaker</a>
                            </li>
                            <li>
                                <a href="event-ticket.html">Event Ticket</a>
                            </li>
                            <li>
                                <a href="event-checkout.html">Event Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">sports</a>
                        <ul class="submenu">
                            <li>
                                <a href="sports.html">Sports</a>
                            </li>
                            <li>
                                <a href="sport-details.html">Sport Details</a>
                            </li>
                            <li>
                                <a href="sports-ticket.html">Sport Ticket</a>
                            </li>
                            <li>
                                <a href="sports-checkout.html">Sport Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">pages</a>
                        <ul class="submenu">
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="apps-download.html">Apps Download</a>
                            </li>
                            <li>
                                <a href="sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="sign-in">Sign Up</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">blog</a>
                        <ul class="submenu">
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="blog-details.html">Blog Single</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">contact</a>
                    </li>
                    <?php 
                        if(isset($this->user_info["user_name"])){
                            $name = $this->user_info["user_name"];
                            ?>
                            
                                <li class="header-button pr-0">
                                    <a href="http://localhost/clones/booking-site-02/public/user/<?php echo $name?>"><?php echo $name?></a>
                                </li>
                        <?php   
                        }else{ ?>
                                <li class="header-button pr-0">
                                    <a href="sign-in">join us</a>
                                </li>
                        <?php }
                    ?>
                    
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->