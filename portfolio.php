<?php
include"config.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $lang['my portfolio']?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="KW_progressContainer">
      <div class="KW_progressBar">

      </div>
    </div>
    <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
      	<div class="img" style="background-image: url(images/iliass.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.php" class="logo">Bougaze Iliass</a></h1>
              <ul>
                <li><a href="index.php"><span><small>01</small><?php echo $lang['Home']?></span></a></li>
                <li><a href="about.php"><span><small>02</small><?php echo $lang['About']?></span></a></li>
								<li><a href="Skills.php"><span><small>03</small><?php echo $lang['Skills']?></span></a></li>
                <li class="active"><a href="portfolio.php"><span><small>04</small><?php echo $lang['Portfolio']?></span></a></li>
                <li><a href="contact.php"><span><small>06</small><?php echo $lang['Contact']?></span></a></li>
                <a href="portfolio.php?lang=fr" ><img src="images/fr.png" style="width:30px;height:auto"></a>
                <a href="portfolio.php?lang=en" ><img src="images/en.png" style="width:30px;height:auto"></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <div id="colorlib-page">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="colorlib-navbar-brand">
                <a class="colorlib-logo" href="index.php"><span class="logo-img" style="background-image: url(images/ib.png);"></span>Bougaze Iliass</a>
              </div>
              <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            </div>
          </div>
        </div>
      </header>


      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>Portfolio</span>
              <h2><?php echo $lang['Checkout a few of my works'] ?></h2>
            </div>
          </div>
            <div class="row no-gutters">
	          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
	            <a href="portfolio.php" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/work-1.png'); " data-scrollax=" properties: { translateY: '-30%'}">
	              <div class="icon d-flex text-center justify-content-center align-items-center">
	                <span class="icon-search"></span>
	              </div>
	            </a>
	            <div class="text">
	              <h4 class="subheading"><?php echo $lang['App design'] ?></h4>
	              <h2 class="heading"><a href="portfolio.php">EPOCKETS</a></h2>
	              <p><?php echo $lang['EPOCKETS'] ?></p>
	            
	            </div>
	          </div>
	          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
	            <a href="portfolio.php" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url('images/Webdesign.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
	              <div class="icon d-flex text-center justify-content-center align-items-center">
	                <span class="icon-search"></span>
	              </div>
	            </a>
	            <div class="text order-1">
	              <h4 class="subheading"><?php echo $lang['Web Design'] ?></h4>
	              <h2 class="heading"><a href="portfolio.php"><?php echo $lang['SITE WEB YOUCODE'] ?></a></h2>
	              <p><?php echo $lang['youcode'] ?></p>
	            </div>
	          </div>
	          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
	            <a href="portfolio.php" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/tim9it.png'); " data-scrollax=" properties: { translateY: '-30%'}">
	              <div class="icon d-flex text-center justify-content-center align-items-center">
	                <span class="icon-search"></span>
	              </div>
	            </a>
	            <div class="text">
	              <h4 class="subheading">Application</h4>
	              <h2 class="heading"><a href="portfolio.php">TIM9IT</a></h2>
	              <p><?php echo $lang['tim9it'] ?></p>
	            </div>
	          </div>
	        </div>

	        <div class="row mt-5">
	          <div class="col text-center">
	            <div class="block-27">
	              <ul>
	                <li><a href="#">&lt;</a></li>
	                <li class="active"><span>1</span></li>
	                <li><a href="#">2</a></li>
	                <li><a href="#">3</a></li>
	                <li><a href="#">4</a></li>
	                <li><a href="#">5</a></li>
	                <li><a href="#">&gt;</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
        </div>
      </section>
      
      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
              <div class="ftco-footer-widget mb-5">
                <ul class="ftco-footer-social list-unstyled">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
              <div class="ftco-footer-widget">
                <h2 class="mb-3">Contact Us</h2>
                <p class="h3 email"><a href="#">info@email.com</a></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Made <i class="icon-heart" aria-hidden="true" style="color: red;"></i> by <a href="" target="_blank">Iliass Bougaze</a>
                </p>
            </div>
          </div>
        </div>
      </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>