<?php
 Require "../php/conn.php";
 session_start() ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Events</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <img src="../images/council.png" alt="logo">
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none fa fas fa-bars">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="homepage.php" style="color: rgb(70, 20, 110);" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='rgb(70, 20, 110)'">Home</a></li>
               <!--              <li><a href="#"style="color: rgb(70, 20, 110);" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='rgb(70, 20, 110)'">About us</a></li> -->
                            <li><a href="#" style="color: rgb(70, 20, 110);" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='rgb(70, 20, 110)'">Events</a></li>
          <!--                   <li><a href="#" style="color: rgb(70, 20, 110);" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='rgb(70, 20, 110)'">News</a></li> -->
                            <li><a href="#" style="color: rgb(70, 20, 110);" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='rgb(70, 20, 110)'">Contact</a></li>
                            <?php
                             
                             if(isset($_SESSION['userId']))
                                    { ?>
 <li><a href="myEvents.php" style="color: rgb(70, 20, 110);" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='rgb(70, 20, 110)'">My Events</a></li>
                                            </ul>
                                         </nav>
                                     </div>

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                                        
                                    <form action="includes/logout.inc.php" method="post">
                                    <button class = "btn gradient-bg" type="submit" name="logout-submit">Logout</button>
                                    </form> </div></div>
                                    <?php
                                        $userID = $_SESSION["userId"]; 
                                        $userRoll = $_SESSION["userRoll"];
                                    }
                                    else { ?>
                                        <a class="btn gradient-bg" href="../studentlogin/studentlogin.php">Login</a>
                                        <?php
                                    }
                        ?>




            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <!-- <div class="swiper-container hero-slider"> --><!-- 
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-date="2018/05/01" style="background: url('images/header-bg.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div>
                                    </div>

                                    <h2 class="entry-title">We have the best events. <br>Participate Now!</h2>
                                </div>

                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="#">Register here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide" data-date="2019/05/01" style="background: url('images/football-1.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div>
                                    </div>

                                    <h2 class="entry-title">We have the best events. <br>Participate Now!</h2>
                                </div>
                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="#">Register here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide" data-date="2020/05/01" style="background: url('images/football.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div>
                                    </div>

                                    <h2 class="entry-title">We have the best events. <br>Participate Now!</h2>
                                </div>

                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="#">Register here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="swiper-pagination"></div>

        
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
     --><!-- </div> -->
</header>

<!-- <div class="homepage-info-section"> --><!-- 
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5">
                <figure>
                    <img src="images/Fcrit-Faces.jpg" alt="logo">
                </figure>
            </div>

            <div class="col-12 col-md-8 col-lg-7">
                <header class="entry-header">
                    <h2 class="entry-title">What is FACES?</h2>
                </header>

                <div class="entry-content">
                    <p>Fr. Agnel Cultural Event And Sports - FACES. It is an annual Sports and Cultural fest of FCRIT Vashi. It is held every year in the month of August!</p>
                </div>

                <footer class="entry-footer">
                    <a href="#" class="btn gradient-bg">Read More</a>
                    <a href="#" class="btn dark">Register Now</a>
                </footer>
            </div>
        </div>
    </div>
 --><!-- </div> -->

<!-- <div class="homepage-featured-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="featured-events-wrap flex flex-wrap justify-content-between">
                    <div class="event-content-wrap positioning-event-1">
                        <figure>
                            <a href="#"><img src="images/1.jpg" alt="1"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Michael Smith in concert</h3>

                            <div class="posted-date">August 25</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-2">
                        <figure>
                            <a href="#"><img src="images/2.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Street art fest</h3>

                            <div class="posted-date">November 28</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-3">
                        <figure>
                            <a href="#"><img src="images/3.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Anabelle in concert</h3>

                            <div class="posted-date">August 28</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-4 half">
                        <figure>
                            <a href="#"><img src="images/events-in-london.jpg" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-5 half">
                        <figure>
                            <a href="#"><img src="images/check-july.png" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-6 half">
                        <figure>
                            <a href="#"><img src="images/summer-festivals.jpg" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-7">
                        <figure>
                            <a href="#"><img src="images/90.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">90’s Disco Night</h3>

                            <div class="posted-date">August 28</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-8">
                        <figure>
                            <a href="#"><img src="images/modern.jpg" alt="1"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Modern Ballet</h3>

                            <div class="posted-date">August 25</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-9">
                        <figure>
                            <a href="#"><img src="images/smoke.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Smoke show</h3>

                            <div class="posted-date">August 28</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-10 half">
                        <figure>
                            <a href="#"><img src="images/summer-festival.jpg" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-11 half">
                        <figure>
                            <a href="#"><img src="images/autumn.jpg" alt=""></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="homepage-next-events">
    <div class="container">
        <div class="row">
            <div class="next-events-section-header">
                <h2 class="entry-title">Our next events</h2>
                <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et, scelerisque sit amet metus. Duis vel semper turpis, ac tempus libero. Maecenas id ultrices risus. Aenean nec ornare ipsum, lacinia.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next1.jpg" alt="1"></a>

                        <div class="event-rating">8.9</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">U2 Concert in Detroitt</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                    </header>

                    <div class="entry-content">
                        <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus.</p>
                    </div>

                    <footer class="entry-footer">
                        <a href="#">Buy Tikets</a>
                    </footer>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next1.jpg" alt="1"></a>

                        <div class="event-rating">7.9</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">TED Talk California</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                    </header>

                    <div class="entry-content">
                        <p>Eget lacus at mauris sagittis varius. Etiam ut ven enatis dui. Nullam tellus risus, pellentesque.</p>
                    </div>

                    <footer class="entry-footer">
                        <a href="#">Buy Tikets</a>
                    </footer>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next1.jpg" alt="1"></a>

                        <div class="event-rating">9.9</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Ultra Music Miami</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                    </header>

                    <div class="entry-content">
                        <p>Lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facili.</p>
                    </div>

                    <footer class="entry-footer">
                        <a href="#">Buy Tikets</a>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="homepage-regional-events" style="overflow: hidden;" >
    <div class="container" style="float: left; position: relative; top: -75px;">
        <div class="row"  style="width: 140%;">
            <div class="col-12" style="width: 120%;">
                <div class="swiper-container homepage-regional-events-slider" style="width: 120%;">
                    <header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
                        <h2 class="entry-title" >Cultural Events</h2>
                    </header>
                    <div class="swiper-wrapper">

                        <?php

                            $sql = "SELECT * FROM eventList where eventType = 'Cultural'";  
                            $result = mysqli_query($conn, $sql); 
                            if(mysqli_num_rows($result) > 0)  
                            {  
                                while($row = mysqli_fetch_array($result))  
                                { 
                                    $imageSponsor = base64_encode($row['eventImage'])
                                    ?>
                                    <div class="swiper-slide">
                                        <figure >
                                            <img src="data:image/jpeg;base64, <?php echo $imageSponsor; ?>" height="400" width="300"/>

                                            <button type="button" name="viewEvent" class="event-overlay-link flex justify-content-center align-items-center viewEvent" id = <?php echo $row["SrNo"]; ?>>+</button>
                                        </figure>

                                        <div class="entry-header">
                                            <h2 class="entry-title"><?php echo $row["eventName"]; ?></h2>
                                        </div>

                                        <div class="entry-footer">
                                            <div class="posted-date"><?php echo $row["eventDate"]; ?> <span><?php echo $row["eventTime"]; ?></span></div>
                                        </div>
                                    </div>

                                <?php 
                                } }

                        ?>
                        </div><!-- .swiper-slide -->
                    </div><!-- .swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-pagination"></div>
                    <div style="position: relative; right: -300px; top: -330px">
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div> </div>>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div> </div> </div>
                </div><!-- .swiper-container -->
                <br>
                <br>
                <div class="container" style="float: left; position: relative; top: -100px;">
                <div class="row"  style="width: 140%;">
                <div class="col-12" style="width: 120%;">
                <div class="swiper-container homepage-regional-events-slider" style="width: 180%;">
                    <header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
                        <h2 class="entry-title" >Sports Events</h2>
                    </header>
                    <div class="swiper-wrapper">

                        <?php
                            $sql = "SELECT * FROM eventList where eventType = 'Sports' OR eventType= 'Technical'";  
                            $result = mysqli_query($conn, $sql); 
                            if(mysqli_num_rows($result) > 0)  
                            {  
                                while($row = mysqli_fetch_array($result))  
                                { 
                                    $imageSponsor = base64_encode($row['eventImage'])
                                    ?>
                                    <div class="swiper-slide">
                                        <figure>
                                            <img src="data:image/jpeg;base64, <?php echo $imageSponsor; ?>" height="300" width="300"/>

                                            <button type="button" name="viewEvent" class="event-overlay-link flex justify-content-center align-items-center viewEvent" id = <?php echo $row["SrNo"]; ?>>+</button>
                                        </figure>

                                        <div class="entry-header">
                                            <h2 class="entry-title"><?php echo $row["eventName"]; ?></h2>
                                        </div>

                                        <div class="entry-footer">
                                            <div class="posted-date"><?php echo $row["eventDate"]; ?> <span><?php echo $row["eventTime"]; ?></span></div>
                                        </div>
                                    </div>

                                <?php 
                                } }

                        ?>


                    </div></div>>
                <div class="swiper-pagination"></div>
                <div style="position: relative; right: -300px; top: -330px">
                <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div></div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div></div> </div> 
</div> </div>

<!-- <div class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h2 class="entry-title">Subscribe to our newsletter to get the latest trends & news</h2>
                    <p>Join our database NOW!</p>
                </header>

                <div class="newsletter-form">
                    <form class="flex flex-wrap justify-content-center align-items-center">
                        <div class="col-md-12 col-lg-3">
                            <input type="text" placeholder="Name">
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <input type="email" placeholder="Your e-mail">
                        </div>

                        <div class="col-md-12 col-lg-3">
                            <input class="btn gradient-bg" type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="../images/council.png" alt="logo" height="150" width="150"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="homepage.php">Home</a></li>
                      <!--   <li><a href="#">About us</a></li> -->
                        <li><a href="eventsFront.php">Events</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

<!--                 <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>


</body>
</html>

 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog modal-lg" >  
           <div class="modal-content">  
                <div class="modal-header">   
                     <h4 class="modal-title">Event Details</h4>  
                </div>  
                <div class="modal-body" id="event_detail">  
                    
                </div>  
                <div class="modal-footer">  
                    <!-- <button type="button" name="registerEvent" class="btn btn-default registerEvent">Register</button> -->
                          <form id="image_form" method="post" enctype="multipart/form-data"> 
        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
      </form>
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>

 <script>
    $(document).ready(function(){
        $('.viewEvent').click(function(){
            var userid = '<?php echo $userID ?>' ;
            var event_id = $(this).attr("id");
            $.ajax ({
                url: "selectEventReg.php",
                method: "post",
                data: {event_id:event_id, userid:userid},
                success:function(data) {
                    $('#event_detail').html(data);
                    $('#dataModal').modal("show");
                }
            });
        });


        $('#image_form').submit(function(event){
        event.preventDefault();
          var userid = '<?php echo $userID ?>' ;
          var userroll = '<?php echo $userRoll ?>' ;
          var event_name = $('.event_name').text();
          $.ajax({
           url:"completeReg.php",
           method:"POST",
           data:{userid:userid, event_name:event_name, userroll:userroll},
           success:function(data)
           {
            alert(data);
            $('#dataModal').modal('hide');
          }
         });
        });



    });
</script>