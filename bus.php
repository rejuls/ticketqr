<?php include('config.php');

?>
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
          <div class="intro-heading text-uppercase">PLAN YOUR JOURNEY</div>


 <!-- search BUS -->
    <section id="bus book"><?php session_start();
?>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form method="post" action="bus.php" id="bsearch" name="bsearch" novalidate="novalidate">
              <div class="row">
                Select Boarding Bus Stop:  &nbsp;
                <select name="bsearch">
                  <?php
                  $sql="select distinct name from stand";
                  $query = mysqli_query($db,$sql);
                  while ($rowst=mysqli_fetch_assoc($query)){
                    echo "<option value=\"{$rowst['name']}\">";
                    echo $rowst['name'];
                    echo "</option>";
                  }

                  if (isset($_POST['search']))
                {
                 session_start();
                $startst = $_POST['bsearch'];
                $endst = $_POST['bsearch2'];
                $date = $_POST['date'];
              }
                ?>
                </select>&nbsp;&nbsp;
                Select Deparing Bus Stop: &nbsp;
                <select name="bsearch2">
                <?php
                $sql="select distinct name from stand";
                $query = mysqli_query($db,$sql);
                while ($rowst=mysqli_fetch_assoc($query)){
                  echo "<option value=\"{$rowst['name']}\">";
                  echo $rowst['name'];
                  echo "</option>";
                }
                ?>
                </select>&nbsp;&nbsp;
                Select journey date:
                <input type="date" name="date" min="2018-11-12" max="2018-11-14"> &nbsp;&nbsp;
          <button id="sendMessageButton" type="submit" name="search" >Submit</button>
              </div>
            </form>
          </div>
        </div>
<br><br>


<!--select bus-->
<div class="row">
  <div class="col-lg-12">
    <form id="book" name="book" novalidate="novalidate">
      <div class="row">
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

        th:nth-child(6) {
            background-color: #FFA500;
        }
        </style>

                    <table>
<tr><th>Bus Name</th><th>Journey Date</th><th>Departure Time</th><th>Available Tickets</th><th>Ticket Cost</th><th>BOOKTICKS</th></tr>
              <?php

            $sql="select stand_code from stand where name='$startst'";
            $stacode = mysqli_query($db,$sql);
            $stacode1=mysqli_fetch_assoc($stacode);
            $sql="select stand_code from stand where name='$endst'";
            $stocode = mysqli_query($db,$sql);
            $stocode1=mysqli_fetch_assoc($stocode);
            $sql1="SELECT name,bus_no from bus WHERE bus_no in (SELECT DISTINCT a.bus_no FROM `route` a join route b on a.stand_code='".$stacode1['stand_code']."' and b.stand_code='".$stocode1['stand_code']."' where a.bus_no=b.bus_no)";
            $query = mysqli_query($db,$sql1);
            $sql3="SELECT( r2.fare - r1.fare ) FROM  route r1 JOIN route r2 ON r1.bus_no='".$rowst['bus_no']."' and r2.bus_no='".$rowst['bus_no']."' WHERE r1.stand_code='".$stacode1['stand_code']."' and r2.stand_code='".$stocode1['stand_code']."'";
              $query3 = mysqli_query($db,$sql3);
              $sql3a=mysqli_fetch_assoc($query3);
              if ($sql3a['( r2.fare - r1.fare )']<0) {
                  echo "asd";}
                  else{
            while ($rowst=mysqli_fetch_assoc($query)){
              echo" <th>";
              echo $rowst['name'];
            echo "</th>";
            echo "<th>";
            echo $date;
            $_SESSION["date"] = $date;
            echo "</th>";
            echo "<th>";
            $sql3="select start_time from route where bus_no='".$rowst['bus_no']."' and stand_code='".$stacode1['stand_code']."'";
            $query3 = mysqli_query($db,$sql3);
            $sql3a=mysqli_fetch_assoc($query3);
            echo $sql3a['start_time'];
            echo "</th>";
            echo "<th>";
            $sql2="select avail_seat from journey where journey_date='$date' and bus_no='".$rowst['bus_no']."'";
              $query2 = mysqli_query($db,$sql2);
              $sql2a=mysqli_fetch_assoc($query2);
              echo $sql2a['avail_seat'];
              echo "</th>";
              echo "<th>";
              $sql3="SELECT( r2.fare - r1.fare ) FROM  route r1 JOIN route r2 ON r1.bus_no='".$rowst['bus_no']."' and r2.bus_no='".$rowst['bus_no']."' WHERE r1.stand_code='".$stacode1['stand_code']."' and r2.stand_code='".$stocode1['stand_code']."'";
                $query3 = mysqli_query($db,$sql3);
                $sql3a=mysqli_fetch_assoc($query3);
                echo $sql3a['( r2.fare - r1.fare )'];
              echo "</th>";
$a=$rowst['name'];
$b=$rowst['bus_no'];
$c=$stacode1['stand_code'];
$d=$stocode1['stand_code'];
$e=$sql3a['( r2.fare - r1.fare )'];
            echo"<th><a href=\"thanku.php?bus=$a&bno=$b&sta=$c&sto=$d&f=$e\"> <button>BOOKTICKS</button></a></th></tr>";
}}
  ?>
        </table>
                  </div>
      </div>
    </form>
  </div>
</div>


      </div>
    </section>

        </div>
      </div>
    </header>

    <!-- Footer             $sql1="select name from bus WHERE bus_no in (SELECT DISTINCT a.bus_no FROM `route` a join route b on a.stand_code='".$stacode1['stand_code']."' and b.stand_code='".$stocode1['stand_code']."' where a.bus_no=b.bus_no;);";
-->
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
                <a href="./terms.html">Terms of Use</a>
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
