<?php
include"config.php";
// define variables and set to empty values
$name = $email = $subject = $message = "";
$nameError = $emailError  = $subjectError = $messageError = "";
$isSuccess = false;
$emailTo = "ibougaze@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = verifyInput($_POST["name"]);
  $email = verifyInput($_POST["email"]);
  $subject = verifyInput($_POST["subject"]);
  $message = verifyInput($_POST["message"]);
  $isSuccess = true;
  $emailText = "";

  if(empty($name)){
    $nameError = $lang['quel nom'];
    $isSuccess = false;
  } elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameError = $lang['nom lettre']; 
      $isSuccess = false;
    }
    else {
      $emailText .= "Name : $name\n";
    }
  if(!isEmail($email)){
    $emailError = $lang['essaies'];
    $isSuccess = false;
  }
  else {
    $emailText .= "Email : $email\n";
  }

  if(empty($subject)){
    $subjectError = $lang['quel sujet'];
    $isSuccess = false;
  }
  else {
    $emailText .= "sujet : $subject\n";
  }
  if(empty($message)){
    $messageError = $lang['quel Message'];
    $isSuccess = false;
  }
  else {
    $emailText .= "Message : $message\n";
  }

  if($isSuccess){
    $headers = " From: $name <$email>\r\nReplay-To:$email";
    mail($emailTo,"Un message de votre site",$emailText);
    $name = $email = $subject = $message = "";
  }
}

function isEmail($var)
{
  return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function verifyInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
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
      	<div class="img" style="background-image: url(images/Iliass.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.php" class="logo">Bougaze Iliass</a></h1>
              <ul>
                <li><a href="index.php"><span><small>01</small><?php echo $lang['Home']?></span></a></li>
                <li><a href="about.php"><span><small>02</small><?php echo $lang['About']?></span></a></li>
                <li><a href="Skills.php"><span><small>03</small><?php echo $lang['Skills']?></span></a></li>
                <li><a href="portfolio.php"><span><small>04</small><?php echo $lang['Portfolio']?></span></a></li>
                <li class="active"><a href="contact.php"><span><small>05</small><?php echo $lang['Contact']?></span></a></li>
                <a href="contact.php?lang=fr" ><img src="images/fr.png" style="width:30px;height:auto"></a>
                <a href="contact.php?lang=en" ><img src="images/en.png" style="width:30px;height:auto"></a>
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

      <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4"><?php echo $lang['Contact Information']?></h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span><?php echo $lang['Adress']?><br></span> <?php echo $lang['Quartier']?></p>
            </div>
            <div class="col-md-3">
              <p><span><?php echo $lang['Phone']?></span><br><a href="tel://212640156084">+ 212 6 40 15 60 84</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span><br><a href="ibougaze@gmail.com">ibougaze@gmail.com</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Linkedin :</span><a href="https://www.linkedin.com/in/iliass-bougaze-392894173"> Linkedin</a></p>
            </div>
          </div>
          <div class="row block-9">
            <div class="col-md-6 pr-md-5">
              <form id="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form">
                <div class="form-group">
                  <input type="text" name ="name" class="form-control" placeholder="<?php echo $lang['Your Name']?>" value="<?php echo $name ?>">
                  <p class="comments" style="color:red ; font-style:italic"><?php echo $nameError; ?> </p>
                </div>
                <div class="form-group">
                  <input type="text" name ="email" class="form-control" placeholder="<?php echo $lang['Your Email']?>"value="<?php echo $email ?>">
                  <p class="comments" style="color:red ; font-style:italic"><?php echo $emailError; ?></p>
                </div>
                <div class="form-group">
                  <input type="text" name ="subject" class="form-control" placeholder="<?php echo $lang['Subject']?>" value="<?php echo $subject ?>">
                  <p class="comments" style="color:red ; font-style:italic"><?php echo $subjectError; ?></p>
                </div>
                <div class="form-group">
                  <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="<?php echo $lang['Message']?>" value="<?php echo $message ?>"></textarea>
                  <p class="comments" style="color:red ; font-style:italic"><?php echo $messageError; ?></p>
                </div>

                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                  <p class="comments" style="color:#2f89fc ; font-style:italic ; display :<?php if($isSuccess) echo 'block'; else echo 'none';?>"><?php echo $lang['message success']?></p>
                </div>
              </form>
            
            </div>
            <div class="col-md-6" id="map"><div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=youssoufia%20youcode&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
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
                <h2 class="mb-3"><?php echo $lang['Contact Us']?></h2>
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