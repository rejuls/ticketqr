<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Reservation Center</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">BOOKTICKS</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Online Reservation Center !</div>
          <div class="intro-heading text-uppercase">BOOK YOUR TICKETS HERE</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#login">LOGIN</a>
<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#register">REGISTER</a>


        </div>
      </div>
    </header>

    <Br>  <center><h3 class="section-subheading text-muted"> <?php   if (isset($_SESSION['message'])) {
echo $_SESSION['message']; echo"<br>";
echo "Buy tickets <a href='./bus.php'>here</a>";
} ?> </h3></center>
    <!-- login -->
    <section id="login">
    <form method="post" action="login.php">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Login</h2>
            <h3 class="section-subheading text-muted">Enter your details to login to BOOKTICKS.</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">

                  <div class="form-group">
                    <input class="form-control" id="user" type="text" name="user" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>

 <div class="form-group">
                    <input class="form-control" id="pass" type="password" name="password" placeholder="Enter Password" required="required" data-validation-required-message="Please enter a password here.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" name="login" >Submit</button>
               </div>
              </div>

          </div>
        </div>
      </div>
     </form>
    </section>


    <!-- register -->
    <section id="register">
       <form method="post" action="login.php">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Register</h2>
            <h3 class="section-subheading text-muted">Please Enter your details here</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text"name="username" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" name="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" name="phone" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
 <div class="form-group">
                    <input class="form-control" id="pass" type="password" name="password1" placeholder="Enter Password" required="required" data-validation-required-message="Please enter a password here.">
                    <p class="help-block text-danger"></p>
                     <input class="form-control" id="pass" type="password" name="password2" placeholder="Confirm Password" required="required" data-validation-required-message="Please enter a password here.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" name="register" >Submit</button>
            </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      </form>
    </section>

     <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; BOOKTICKS 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/login?lang=en">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://in.linkedin.com/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="privacy.html">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="terms.html">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
  <!--   <script src="js/contact_me.js"></script> -->

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
