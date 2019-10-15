<?php
 Require "../php/conn.php";
 session_start() ;
 require "../php/setBranch.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/befb6dabc5.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <!-- <script src="js/custom.js"></script> -->
</head>
<body>

<style>
 .leaderboard {
  position: relative;
  top: 250px;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 90%;
  height: 8%;
  background: linear-gradient(to bottom, #3a404d, #181c26);
  border-radius: 10px;
  box-shadow: 0 7px 30px rgba(62, 9, 11, .3);
}
.leaderboard h1 {
  font-size: 18px;
  color: #e1e1e1;
  padding: 12px 13px 18px;
}
.leaderboard h1 svg {
  width: 25px;
  height: 26px;
  position: relative;
  top: 3px;
  margin-right: 6px;
  vertical-align: baseline;
}
.leaderboard ol {
  counter-reset: leaderboard;
   list-style-type: none;
}
.leaderboard ol li {
  position: relative;
  z-index: 1;
  font-size: 20px;
  counter-increment: leaderboard;
  padding: 18px 10px 18px 50px;
  cursor: pointer;
  backface-visibility: hidden;
  transform: translateZ(0) scale(1, 1);
}
.leaderboard ol li::before {
  content: counter(leaderboard);
  position: absolute;
  z-index: 2;
  top: 27px;
  left: -2%;
  width: 20px;
  height: 20px;
  line-height: 20px;
  color: #c24448;
  background: #fff;
  border-radius: 20px;
  text-align: center;
  vertical-align: middle;
}
.leaderboard ol li mark {
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 18px 10px 18px 50px;
  margin: 0;
  background: none;
  color: #fff;
}
.leaderboard ol li mark::before, .leaderboard ol li mark::after {
  content: '';
  position: absolute;
  z-index: 1;
  bottom: -11px;
  left: -9px;
  border-top: 10px solid #c24448;
  border-left: 10px solid transparent;
  transition: all 0.1s ease-in-out;
  opacity: 0;
}
.leaderboard ol li mark::after {
  left: auto;
  right: -9px;
  border-left: none;
  border-right: 10px solid transparent;
}
.leaderboard ol li small {
  position: relative;
  z-index: 2;
  display: block;
  text-align: right;
}
.leaderboard ol li::after {
  content: '';
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fa6855;
  box-shadow: 0 3px 0 rgba(0, 0, 0, .08);
  transition: all 0.3s ease-in-out;
  opacity: 0;
}
.leaderboard ol li:nth-child(6) {
  background: #fa6855;
}
.leaderboard ol li:nth-child(6)::after {
  background: #fa6855;
}
.leaderboard ol li:nth-child(7) {
  background: #e0574f;
}
.leaderboard ol li:nth-child(7)::after {
  background: #e0574f;
  box-shadow: 0 2px 0 rgba(0, 0, 0, .08);
}
.leaderboard ol li:nth-child(7) mark::before, .leaderboard ol li:nth-child(7) mark::after {
  border-top: 6px solid #ba4741;
  bottom: -7px;
}
.leaderboard ol li:nth-child(8) {
  background: #d7514d;
}
.leaderboard ol li:nth-child(8)::after {
  background: #d7514d;
  box-shadow: 0 1px 0 rgba(0, 0, 0, .11);
}
.leaderboard ol li:nth-child(8) mark::before, .leaderboard ol li:nth-child(8) mark::after {
  border-top: 2px solid #b0433f;
  bottom: -3px;
}
.leaderboard ol li:nth-child(9) {
  background: #cd4b4b;
}
.leaderboard ol li:nth-child(9)::after {
  background: #cd4b4b;
  box-shadow: 0 -1px 0 rgba(0, 0, 0, .15);
}
.leaderboard ol li:nth-child(9) mark::before, .leaderboard ol li:nth-child(9) mark::after {
  top: -7px;
  bottom: auto;
  border-top: none;
  border-bottom: 6px solid #a63d3d;
}
.leaderboard ol li:nth-child(10) {
  background: #c24448;
  border-radius: 0 0 10px 10px;
}
.leaderboard ol li:nth-child(10)::after {
  background: #c24448;
  box-shadow: 0 -2.5px 0 rgba(0, 0, 0, .12);
  border-radius: 0 0 10px 10px;
}
.leaderboard ol li:nth-child(10) mark::before, .leaderboard ol li:nth-child(10) mark::after {
  top: -9px;
  bottom: auto;
  border-top: none;
  border-bottom: 8px solid #993639;
}
.leaderboard ol li:hover {
  z-index: 2;
  overflow: visible;
}
.leaderboard ol li:hover::after {
  opacity: 1;
  transform: scaleX(1.06) scaleY(1.03);
}
.leaderboard ol li:hover mark::before, .leaderboard ol li:hover mark::after {
  opacity: 1;
  transition: all 0.35s ease-in-out;
}
.the-most {
  position: fixed;
  z-index: 1;
  bottom: 0;
  left: 0;
  width: 50vw;
  max-width: 200px;
  padding: 10px;
}
.the-most img {
  max-width: 100%;
}


</style>




<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="#"><img src="../images/council.png" alt="logo"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                        <ul>
                            <li><a href="homepage.php" style="color: white;" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='white'">Home</a></li>
                            <!-- <li><a href="#"style="color: white;" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='white'">About us</a></li> -->
                            <li><a href="eventsFront.php" style="color: white;" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='white'">Events</a></li>
                            
                            <li><a href="contact.php" style="color: white;" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='white'">Contact</a></li>
                            <?php
                             
                             if(isset($_SESSION['userId']))
                                    { ?>
 <li><a href="myEvents.php" style="color: white;" onMouseOver="this.style.color='rgb(175, 45, 232)'" onMouseOut="this.style.color='white'">My Events</a></li>
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
                                    }
                                    else { ?>
                                        <a class="btn gradient-bg" href="../studentlogin/studentlogin.php">Login</a>
                                        <?php
                                    }
                        ?>
        
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-date="2019/08/29" style="background: url('images/header-bg.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div><!-- .countdown-holder -->
                                    </div><!-- .countdown -->

                                    <h2 class="entry-title">We have the best events. <br>Participate Now!</h2>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="eventsFront.php">Events</a>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            <div class="swiper-slide" data-date="2019/08/29" style="background: url('images/football-1.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div><!-- .countdown-holder -->
                                    </div><!-- .countdown -->

                                    <h2 class="entry-title">We have the best events. <br>Participate Now!</h2>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="eventsFront.php">Events</a>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            <div class="swiper-slide" data-date="2019/08/29" style="background: url('images/football.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div><!-- .countdown-holder -->
                                    </div><!-- .countdown -->

                                    <h2 class="entry-title">We have the best events. <br>Participate Now!</h2>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="eventsFront.php">Events</a>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .swiper-container -->


<div class="homepage-info-section">

        <div class="leaderboard">
  <h1 style="font-size: 40px;">
    <svg class="ico-cup">
      <use xlink:href="#cup"></use>
    </svg>
    Scoreboard
  </h1>
  <ol>
         <?php 
        $query = "SELECT * FROM branchScore ORDER BY Score DESC";
        $result = mysqli_query($conn, $query);
        $count =0;
        $max = 0;
        if(mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_array($result))
            {   
                if (($count == 0 || $max = $row["Score"]) && $row["Score"] != 0) { 
                    $max = $row["Score"]?>
                            <li style="color: white;">
                              <mark ><?php
                                if ($row["branchName"] == "IT") { ?>
                                <i class="fab fa-linux"></i>
                                <?php 
                                $branchName = "Information Technology";
                            }
                                if ($row["branchName"] == "Mechanical") { ?>
                                <i class="fa fas fa-cogs"></i>
                                <?php 
                                $branchName = "Mechanical";
                            }
                                if ($row["branchName"] == "EXTC") { ?>
                                <i class="fas fa-microchip"></i>
                                <?php 
                                $branchName = "Electronics & Telecommunication";
                            }
                                if ($row["branchName"] == "Electrical") { ?>
                                <i class="fas fa-car-battery"></i>
                                <?php 
                                $branchName = "Electrical";
                            }
                                if ($row["branchName"] == "Computers") { ?>
                                <i class="fas fa-laptop-code"></i>
                                <?php 
                                $branchName = "Computer";
                            }

                                 ?><?php echo $branchName; ?></mark>
                              <small><?php echo $row["Score"]; ?></small>
                            </li>
                    <?php
                    $count = 1;
                }
                else {
                ?>
                    <li style="color: white;">

                              <mark ><?php
                                if ($row["branchName"] == "IT") { ?>
                                <i class="fab fa-linux"></i>
                                <?php 
                                $branchName = "Information Technology ";
                            }
                                if ($row["branchName"] == "Mechanical") { ?>
                                <i class="fa fas fa-cogs"></i>
                                <?php 
                                $branchName = "Mechanical";
                            }
                                if ($row["branchName"] == "EXTC") { ?>
                                <i class="fas fa-microchip"></i>
                                <?php 
                                $branchName = "Electronics & Telecommunication";
                            }
                                if ($row["branchName"] == "Electrical") { ?>
                                <i class="fas fa-car-battery"></i>
                                <?php 
                                $branchName = "Electrical";
                            }
                                if ($row["branchName"] == "Computers") { ?>
                                <i class="fas fa-laptop-code"></i>
                                <?php 
                                $branchName = "Computer";
                            }

                                 ?><?php echo $branchName; ?></mark>
                              <small><?php echo $row["Score"]; ?></small>
                            </li>
                    
                     <?php
                 }
            }
        }  
       
        ?>

  </ol>
</div>


<svg style="display: none;">
  <symbol id="cup" x="0px" y="0px"
     width="25px" height="26px" viewBox="0 0 25 26" enable-background="new 0 0 25 26" xml:space="preserve">
<path fill="#F26856" d="M21.215,1.428c-0.744,0-1.438,0.213-2.024,0.579V0.865c0-0.478-0.394-0.865-0.88-0.865H6.69
    C6.204,0,5.81,0.387,5.81,0.865v1.142C5.224,1.641,4.53,1.428,3.785,1.428C1.698,1.428,0,3.097,0,5.148
    C0,7.2,1.698,8.869,3.785,8.869h1.453c0.315,0,0.572,0.252,0.572,0.562c0,0.311-0.257,0.563-0.572,0.563
    c-0.486,0-0.88,0.388-0.88,0.865c0,0.478,0.395,0.865,0.88,0.865c0.421,0,0.816-0.111,1.158-0.303
    c0.318,0.865,0.761,1.647,1.318,2.31c0.686,0.814,1.515,1.425,2.433,1.808c-0.04,0.487-0.154,1.349-0.481,2.191
    c-0.591,1.519-1.564,2.257-2.975,2.257H5.238c-0.486,0-0.88,0.388-0.88,0.865v4.283c0,0.478,0.395,0.865,0.88,0.865h14.525
    c0.485,0,0.88-0.388,0.88-0.865v-4.283c0-0.478-0.395-0.865-0.88-0.865h-1.452c-1.411,0-2.385-0.738-2.975-2.257
    c-0.328-0.843-0.441-1.704-0.482-2.191c0.918-0.383,1.748-0.993,2.434-1.808c0.557-0.663,1-1.445,1.318-2.31
    c0.342,0.192,0.736,0.303,1.157,0.303c0.486,0,0.88-0.387,0.88-0.865c0-0.478-0.394-0.865-0.88-0.865
    c-0.315,0-0.572-0.252-0.572-0.563c0-0.31,0.257-0.562,0.572-0.562h1.452C23.303,8.869,25,7.2,25,5.148
    C25,3.097,23.303,1.428,21.215,1.428z M5.238,7.138H3.785c-1.116,0-2.024-0.893-2.024-1.99c0-1.097,0.908-1.99,2.024-1.99
    c1.117,0,2.025,0.893,2.025,1.99v2.06C5.627,7.163,5.435,7.138,5.238,7.138z M18.883,21.717v2.553H6.118v-2.553H18.883
    L18.883,21.717z M13.673,18.301c0.248,0.65,0.566,1.214,0.947,1.686h-4.24c0.381-0.472,0.699-1.035,0.947-1.686
    c0.33-0.865,0.479-1.723,0.545-2.327c0.207,0.021,0.416,0.033,0.627,0.033c0.211,0,0.42-0.013,0.627-0.033
    C13.195,16.578,13.344,17.436,13.673,18.301z M12.5,14.276c-2.856,0-4.93-2.638-4.93-6.273V1.73h9.859v6.273
    C17.43,11.638,15.357,14.276,12.5,14.276z M21.215,7.138h-1.452c-0.197,0-0.39,0.024-0.572,0.07v-2.06
    c0-1.097,0.908-1.99,2.024-1.99c1.117,0,2.025,0.893,2.025,1.99C23.241,6.246,22.333,7.138,21.215,7.138z"/>
      </symbol>
</svg>



</div>

<div class="homepage-info-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5">
                <figure>
                    <img src="../images/faceslogo.jpg" alt="logo">
                </figure>
            </div>

            <div class="col-12 col-md-8 col-lg-7">
                <header class="entry-header">
                    <h2 class="entry-title">What is FACES?</h2>
                </header>

                <div class="entry-content">
                    <p>The theme for FACES 2019 is a dedication to the web platforms that sustain our binge watching
culture! The numerous web series that keep us engaged, entertained and intrigued constitute a
major part of the type of media we consume these days. Oh the comfort of slipping into our blanket
after a long day and forgetting all our worries and fatigue to these amazing stories! A theme that is
surely going to keep up the enthusiasm for the three day gala!
FACES has always held a special place in our hearts. A flamboyant fusion of sports and cultural
activities, FACES has something to offer to each and everyone and oppurtunities for all to shine and
bond.
Hence, keeping up with our theme this year, we bring to you FACES as a streaming platform, with all
of the events presented to you with your favourite web series as the packaging! Just the way you
surf various web platforms, we endeavour to give FACES an illusion of the same, that you can surf
through to find several of our fresh and classic content. So grab some energy drink and get ready for
the most magnificent three days that you can enjoy to your heart&#39;s content! Happy binging!</p>
                </div>
   <!--
                <footer class="entry-footer">
                 
                </footer>-->
            </div>
        </div>
    </div>
</div>

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

<div class="homepage-regional-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
                    <h2 class="entry-title">Some Interesting Events</h2>

<!--                     <div class="select-location">
                        <select>
                            <option>New York</option>
                            <option>California</option>
                            <option>South Carolina</option>
                        </select>
                    </div> -->
                </header>

                <div class="swiper-container homepage-regional-events-slider">
                    <div class="swiper-wrapper">

                        <?php
                            $sql = "SELECT * FROM eventList where eventType = 'Sports' ORDER BY RAND() LIMIT 3";  
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

                                            <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
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

                            $sql = "SELECT * FROM eventList where eventType = 'Cultural' ORDER BY RAND() LIMIT 3";  
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

                                            <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
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
                        <!-- <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-1.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure>

                            <div class="entry-header">
                                <h2 class="entry-title">U2 Concert </h2>
                            </div>

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-2.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure>

                            <div class="entry-header">
                                <h2 class="entry-title">Broadway Hit </h2>
                            </div>

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-3.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure>

                            <div class="entry-header">
                                <h2 class="entry-title">Gallery Exibition</h2>
                            </div>

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-4.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure>

                            <div class="entry-header">
                                <h2 class="entry-title">Art Gallery</h2>
                            </div>

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-5.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure>

                            <div class="entry-header">
                                <h2 class="entry-title">Music Concert</h2>
                            </div>

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div>
                        </div> -->

                        
                        </div><!-- .swiper-slide -->
                    </div><!-- .swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .swiper-container -->

                <div class="events-partners">
                    <header class="entry-header">
                        <h2 class="entry-title">Partners</h2>
                    </header>

                    <div class="events-partners-logos flex flex-wrap justify-content-between align-items-center">

                        <?php

                            $sql = "SELECT * FROM sponsorData";  
                            $result = mysqli_query($conn, $sql);  
                            if(mysqli_num_rows($result) > 0)  
                            {  
                                while($row = mysqli_fetch_array($result))  
                                { 
                                    $imageSponsor = base64_encode($row['sponsorImage'])
                                    ?>
                                    <div class="event-partner-logo">
                                        <a href="#"><img src="data:image/jpeg;base64, <?php echo $imageSponsor; ?>" height="200" width="200"/></a>
                                    </div>

                                <?php 
                                } }

                        ?>
                        <!-- <div class="event-partner-logo">
                            <a href="#"><img src="images/pixar.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/the-pirate.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/himalayas.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/sa.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/south-porth.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/himalayas.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/sa.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/south-porth.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/pixar.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/the-pirate.png" alt=""></a>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

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
                        <!-- <li><a href="#">About us</a></li> -->
                        <li><a href="eventsFront.php">Events</a></li>
                        <!-- <li><a href="#">News</a></li> -->
                        <li><a href="contact.php">Contact</a></li>
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
