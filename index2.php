 <?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>

 <!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Chatting Friends Shout</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="assets/fonts/line-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Team
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                 Contact 
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
      <div class="content">

    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <h1 style="text-align: center; color:red; "><b>Welcome</b> <strong><?php echo $_SESSION['username']; ?></strong></h1>
      <button style="font-size: 30px; border-radius: 10px; text-decoration: none;"><p> <a href="index.php?logout='1'" style="color: brown; text-align: center;">Logout</a> </p></button>
    <?php endif ?>
  </div>

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">      
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title" style="color: black;">Shout to your Friends</h2>
                <p style="color: white;">Free talk to the world you say all friends what is inside the box? </p>
                
                  <a href="index.php" class="btn btn-common">Back to Chat</i></a>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="intro-img">
                <img class="img-fluid" src="assets/img/intro-mobile.png" alt="">
              </div>            
            </div>
          </div> 
        </div> 
      </div>
      <!-- Hero Area End -->
 <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Meet Our team</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-01.png" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Louie Roncesvalles</a></h3>
                  <p>Front-end Developer</p>
                </div>
                <p>A Reliable Web Developer and basically does the front-end design.</p> 
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-02.png" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Dennis De Leon</a></h3>
                  <p>Back-end</p>
                </div>
                <p>He is C-sharp coder and a competent Full-Stack Web Developer.</p>
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
         
            <!-- Team Item Ends -->
          </div>
        </div>
      </div>
    </section>

    </header>
    <!-- Header Area wrapper End -->
 <!-- Contact Section Start -->
    <section id="contact" class="section-padding bg-gray">    
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Contact Us</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">   
          <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                     <h6 style="color: blue;">Address</h6>
                     <p style="color: solid green;">Epifanio de los Santos Ave, Metro Manila</p>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                     <h6 style="color: blue;">Contact Number</h6>
                     <p style="color: solid green;">#09343434343</p>
                     <p style="color: solid green;">#09232323232</p>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button text-left">
                      <h6 style="color: blue;">Email Address</h6>
                      <p>DennisDeleons@gmail.com</p>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="map">
              <object style="border:0; height: 280px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7722.77408469082!2d121.04605372925057!3d14.577008099996954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9da821341b9%3A0x446ff353334ba713!2sEpifanio+de+los+Santos+Ave%2C+Metro+Manila!5e0!3m2!1sen!2sph!4v1549594429871"></object>
            </div>
          </div>
        </div>
      </div> 
    </section>
  
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-content">
                <p>Copyright ?? 2019 All Right Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </footer> 
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>  
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
      
  </body>
</html>
