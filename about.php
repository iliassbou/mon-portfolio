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
                <li class="active"><a href="about.php"><span><small>02</small><?php echo $lang['About']?></span></a></li>
								<li><a href="Skills.php"><span><small>03</small><?php echo $lang['Skills']?></span></a></li>
                <li><a href="portfolio.php"><span><small>04</small><?php echo $lang['Portfolio']?></span></a></li>
								<li><a href="contact.php"><span><small>06</small><?php echo $lang['Contact']?></span></a></li>
								<a href="about.php?lang=fr" ><img src="images/fr.png" style="width:30px;height:auto"></a>
                <a href="about.php?lang=en" ><img src="images/en.png" style="width:30px;height:auto"></a>
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

      <section class="ftco-section about-section">
        <div class="container">
          <div class="row d-flex my-5" data-scrollax-parent="true">
            <div class="col-md-4 author-img" style="background-image: url(images/iliass.jpg);" data-scrollax=" properties: { translateY: '-70%'}"></div>
            <div class="col-md-2"></div>
            <div class="col-md-6 wrap ftco-animate">
              <div class="about-desc">
                <h1 class="bold-text" style="<?php echo $lang['font-size: 120px'] ?>"><?php echo $lang['About']?></h1>
                <div class="p-5">
                  <h2 class="mb-5"><?php echo $lang['Hi me']?></h2>
                  <p><?php echo $lang['my description']?></p>
                  <a href="https://drive.google.com/file/d/1828E7PUyUCFMtxxQrJ-wPZ3gwxTa0yDZ/view?usp=sharing"><?php echo $lang['Checkout my resume']?></a>
                  <ul class="ftco-footer-social list-unstyled mt-4">
                    <li><a href="https://twitter.com/ibougaze"><span class="icon-twitter"></span></a></li>
                    <li><a href="https://www.facebook.com/iliass.bougaze"><span class="icon-facebook"></span></a></li>
                    <li><a href="https://www.linkedin.com/in/iliass-bougaze-392894173/"><span class="icon-linkedin"></span></a></li>
                  </ul>
                  <h5><?php echo $lang['Contact me here!'] ?></h5>
                  <p>Email : <a href="#"> ibougaze@gmail.com</a></p>
                  <p><?php echo $lang['Phone'] ?> <a href="#"> +212 640 15 60 84</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-end mt-5">
          	<div class="col-md-10">
          		</div>

          		<div class="exp mt-5 ftco-animate">
          			<h2 class="mb-4"><?php echo $lang['Experience'] ?></h2>
          			<div class="exp-wrap py-4">
          				<div class="desc">
	          				<h4><?php echo $lang['Stage Calcination'] ?><span><?php echo $lang['OCP Company'] ?> </span> </h4>
	          				<p class="location"><?php echo $lang['local'] ?></p>
          				</div>
          				<div class="year">
          					<p><?php echo $lang['Avril 2017 - Mai 2017'] ?></p>
          				</div>
          			</div>

          			<div class="exp-wrap py-4">
          				<div class="desc">
	          				<h4><?php echo $lang['Stage Laverie'] ?><span> <?php echo $lang['OCP Company'] ?></span> </h4>
	          				<p class="location"><?php echo $lang['local'] ?></p>
          				</div>
          				<div class="year">
          					<p><?php echo $lang['Juin 2016'] ?></p>
          				</div>
          			</div>

          			<div class="exp-wrap py-4">
          				<div class="desc">
	          				<h4><?php echo $lang['Stage Eau'] ?><span> <?php echo $lang['OCP Company'] ?></span> </h4>
	          				<p class="location"><?php echo $lang['local'] ?></p>
          				</div>
          				<div class="year">
          					<p><?php echo $lang['Juillet 2015'] ?></p>
          				</div>
          			</div>
          		</div>


          		<div class="exp mt-5 ftco-animate">
          			<h2 class="mb-4"><?php echo $lang['Education'] ?></h2>
          			<div class="exp-wrap py-4">
          				<div class="desc">
	          				<h4><?php echo $lang['Formation Web'] ?> <span> - YouCode</span> </h4>
	          				<p class="location"><?php echo $lang['local'] ?></p>
          				</div>
          				<div class="year">
          					<p><?php echo $lang['2018 – Encours'] ?></p>
          				</div>
          			</div>

          			<div class="exp-wrap py-4">
          				<div class="desc">
	          				<h4><?php echo $lang['DUT'] ?><span> - EST</span> </h4>
	          				<p class="location"><?php echo $lang['Morocco - Berrechid'] ?></p>
          				</div>
          				<div class="year">
          					<p>2015 – 2017</p>
          				</div>
          			</div>

          			<div class="exp-wrap py-4">
          				<div class="desc">
	          				<h4><?php echo $lang['bac'] ?><span> <?php echo $lang['Lycée'] ?></span> </h4>
	          				<p class="location"><?php echo $lang['local'] ?></p>
          				</div>
          				<div class="year">
          					<p>2013 – 2014</p>
          				</div>
          			</div>

          		
          		</div>
          	</div>
					</div>
					<div class="container">
						<div class="row mt-5 flex-column ftco-animate">
							<div class="col-md-10">
								<h2 class="mb-4"><?php echo $lang['My Skills'] ?></h2>
							</div>
								<div class="col-md-12 animate-box" data-animate-effect="fadeInRight">
									<div class="progress-wrap">
										<h4>java script</h4>
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" aria-valuenow="60"
												aria-valuemin="0" aria-valuemax="100" style="width:40%">
												<span>40%</span>
												</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 animate-box">
									<div class="progress-wrap">
										<h4>HTML5</h4>
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" aria-valuenow="85"
												aria-valuemin="0" aria-valuemax="100" style="width:60%">
												<span>60%</span>
												</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 animate-box" data-animate-effect="fadeInRight">
									<div class="progress-wrap">
										<h4>CSS3</h4>
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
												aria-valuemin="0" aria-valuemax="100" style="width:60%">
												<span>60%</span>
												</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 animate-box">
									<div class="progress-wrap">
										<h4>Abode Illustrator</h4>
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" aria-valuenow="70"
												aria-valuemin="0" aria-valuemax="100" style="width:70%">
												<span>70%</span>
												</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 animate-box">
									<div class="progress-wrap">
										<h4>Adobe Photoshop</h4>
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
												aria-valuemin="0" aria-valuemax="100" style="width:60%">
												<span>60%</span>
												</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 animate-box">
									<div class="progress-wrap">
										<h4>Adobe XD</h4>
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
												aria-valuemin="0" aria-valuemax="100" style="width:65%">
												<span>65%</span>
												</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 animate-box" data-animate-effect="fadeInRight">
									<div class="progress-wrap">
										<h4>Adobe After Effects</h4>
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" aria-valuenow="80"
												aria-valuemin="0" aria-valuemax="100" style="width:40%">
												<span>40%</span>
												</div>
										</div>
									</div>
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
									<li><a href="https://twitter.com/ibougaze"><span class="icon-twitter"></span></a></li>
									<li><a href="https://www.facebook.com/iliass.bougaze"><span class="icon-facebook"></span></a></li>
									<li><a href="https://www.linkedin.com/in/iliass-bougaze-392894173/"><span class="icon-linkedin"></span></a></li>
                </ul>
              </div>
              <div class="ftco-footer-widget">
                <h2 class="mb-3"><?php echo $lang['Contact Me'] ?></h2>
                <p class="h3 email"><a href="#">ibougaze@gmail.com</a></p>
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