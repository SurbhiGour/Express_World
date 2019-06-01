<?php 
include("dbinfo.php");
session_start();
if(isset($_SESSION['admin_session']))
{
  // header('location:admin_home.php');
}
else{
  header('location:admin_login.php');
}
   

 
?>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title> Express World Logistics</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/titlel.PNG" rel="icon">
  <link href="img/titlel.PNG" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="css/style4.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/track.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



 <!--<style>
 .progress-container {
   width: 100%;
   height: 7px;
   background: #fff;
 }

 .progress-bar {
   height: 7px;
   background: #094f9d;
   width: 0%;
 }

</style>-->

</head>

<body id="body">


  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">

        <i class="fa fa-envelope"></i><a href="mailto:info@expressworldlogistics.com">info@expressworldlogistics.com  </a>
        <i class="fa fa-phone"></i> +91-7770021122
        </div>
      <div class="social-links float-right">
        <a href="https://twitter.com/expressworld3" class="twitter"target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://fb.me/ExpressWorld2019" class="facebook"target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/expressworld2019/" class="instagram"target="_blank"><i class="fa fa-instagram"></i></a>
        <!-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> -->
        <!-- <a href="admin_login.php"><img src="adm.png" class="admmin"></a> -->

      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#body" class="scrollto"><img src="ewlogo.png" alt="logo"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="admin_home.php">Home <i class="fa fa-home"></i></a></li>
          <li class="menu-has-children"><a href="admin_add.php">Add New</a></li>
         <li class="menu-has-children"><a href="admin_display.php">Display</a>
          <!-- <ul>
            <li><a href="air-freight.php">Air Freight</a></li>
            <li><a href="Sea-Freight.php">Sea Freight</a></li>
            <li><a href="Courier-Services.php">Courier services</a></li>
            <li><a href="rail-freight.php">Rail Freight</a></li>
            <li><a href="surface-freight.php">Surface Freight</a></li>
            </ul> -->
        </li>
       <!-- <li><a href="quote.html">Get a quote </a></li>-->
        <li><a href="logout.php">Logout </a></li>
        





    </div>



          </li>

        </ul>
      </nav><!-- #nav-menu-container -->
    <!--  <div class="progress-container">
     <div class="progress-bar" id="myBar">
     </div>
   </div>-->


  </header><!-- #header -->


  
  <!--==========================
    Intro Section
  ============================-->
  