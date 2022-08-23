<?php
session_start();
$id=$_SESSION['loginid'];
if($id=="")
{

header("location:index.php");
}
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"certed");

if(isset($_POST['submit1']))
{
$menu_cat_name=$_POST['menu_cat_name'];
$insrt="insert into class(classname)values('$menu_cat_name')";
$a=mysqli_query($con,$insrt);
 if($a)
  {
  header("location:addclass.php");
}
}
?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon-->
<link rel="shortcut icon" href="img/fav.png">
<!-- Author Meta -->
<meta name="author" content="colorlib">
<!-- Meta Description -->
<meta name="description" content="">
<!-- Meta Keyword -->
<meta name="keywords" content="">
<!-- meta character set -->
<meta charset="UTF-8">
<!-- Site Title -->
<title>E-learning</title>

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  <!--
  CSS
  ============================================= -->
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header id="header">
    <div class="header-top">
      <div class="container">
          <div class="row justify-content-center">
              <div id="logo">
                <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
              </div>
          </div>
      </div>
    </div>
    <div class="container main-menu">
      <div class="row align-items-center justify-content-center d-flex">
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="admin_home.php">Home</a></li>
              <li class="menu-has-children"><a href="">Approvals</a>
                <ul>
                  <li><a href="admin_approve_tu.php">teachers Requests</a></li>
                  <li><a href="admin_approve_stu.php">Students Request</a></li>
                </ul>
              </li>
          <li><a href="approved_student.php">Approved Students</a></li>
          <li><a href="approved_tutor.php">Approved Teachers</a></li>
          <li><a href="addclass.php">Add Class</a></li>
          <li><a href="addsubject.php">Add Subject</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
      </div>
    </div>
  </header><!-- #header -->

  <!-- start banner Area -->
  <section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">
            Class
          </h1>
          <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Add Class</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- Start contact-page Area -->
  <section class="contact-page-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 form-group">
        <form class="form-area contact-form text-right"  method="POST">
        <center>	<label class="label-heading">Add Class</label></center><br>
          <input name="menu_cat_name" placeholder="Enter class name eg:Class 9" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Enter class name'" class="common-input mb-20 form-control" required="" type="text">
          <center>
          <button class="primary-btn text-uppercase mt-20" name="submit1">Add Class</button>
          </center>
        </form>
        </div>

      </div>
      </div>
  </section>
  <!-- End contact-page Area -->

  <!-- start footer Area -->
  <footer class="footer-area">
    <div class="footer-bottom-wrap">
      <div class="container">
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
          <p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright All rights reserved | This web is made with <i class="fa fa-heart-o" aria-hidden="true"></i>  by mace
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer Area -->

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/jquery-ui.js"></script>
    <script src="js/easing.min.js"></script>
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
