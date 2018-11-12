<?php include('config.php'); session_start(); ?>

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
              <a class="nav-link js-scroll-trigger" href="./login.php">Login/Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th:nth-child(even) {
    background-color: #FFA500;
}
</style>
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">HAPPY JOURNEY</div>
<!-- login -->
    <section id="train book">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <table>
  <tr>
    <th>Name  :</th><th> <?php echo $_SESSION['username']; ?>    </th>
</tr>
<tr>
    <th>Mail Id  :</th><th><?php   $sql="select email from user where name='".$_SESSION['username']."'";
      $query = mysqli_query($db,$sql);
      $sqla=mysqli_fetch_assoc($query);
      echo $sqla['email']; ?>   </th>
</tr>
<tr>
 <th>Phone No  :</th><th> <?php   $sql1="select phone from user where name='".$_SESSION['username']."'";
   $query1 = mysqli_query($db,$sql1);
   $sql1a=mysqli_fetch_assoc($query1);
   echo $sql1a['phone'];
   ?>     </th>
         </th>
</tr>
<tr>
    <th>Journey Date  :</th><th> <?php echo $_SESSION['date']  ?> </th>
</tr>
<tr>
    <th>Bus Name  :</th><th> <?php echo $_GET["bus"]; ?></th>
</tr>
<tr>
    <th>Bus No  :</th><th> <?php echo $_GET["bno"]; ?>
   </th>
</tr>
<tr>
 <th>Start Stop  :</th><th>  <?php
 $sql2="select name from stand where stand_code='".$_GET["sta"]."'";
   $query2 = mysqli_query($db,$sql2);
   $sql2a=mysqli_fetch_assoc($query2);
   echo $sql2a['name'];
  ?>  </th>
</tr>
<tr>
    <th>End Stop  :</th><th>  <?php
    $sql2="select name from stand where stand_code='".$_GET["sto"]."'";
      $query2 = mysqli_query($db,$sql2);
      $sql2a=mysqli_fetch_assoc($query2);
      echo $sql2a['name'];
     ?>  </th>
</tr>
<tr>
    <th>Fare  :</th>
<th>  <?php echo $_GET["f"]; ?>  </th>
</tr>
<th>Balance  :</th>
<th>  <?php   $sql1="select credit from user where name='".$_SESSION['username']."'";
  $query1 = mysqli_query($db,$sql1);
  $sql1a=mysqli_fetch_assoc($query1);
$ba=$sql1a['credit'];
echo $ba-$_GET["f"];
  ?>     </th>
<tr>

  </tr>

</table>
          </div>


        </div>
<?php $img=$_SESSION['username']; echo"<img src='https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=$img'>"; ?> 
      </div>
    </section>




        </div>
      </div>
    </header>
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
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
