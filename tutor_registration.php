<?php
$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"certed");
		$sql="select id,dname from district ";
		$conn=mysqli_query($con,$sql);

		$sql="select classid,classname from class ";
		$connn=mysqli_query($con,$sql);

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
		<title>Certed Academia</title>

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
				          <li><a href="index.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <li><a href="login.php">Login</a></li>
						  <li class="menu-has-children"><a href="">Registration</a>
				            <ul>
				              <li><a href="tutor_registration.php">Tutor Registration</a></li>
				              <li><a href="customer_registration.php">Student Registration</a></li>
				            </ul>
				          </li>
						<li><a href="menu.php">Classroom</a></li>
						<li><a href="contact.php">Feedback</a></li>
				          <li><a href="view_feedbacks.php">View Feedback</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->
					</div>
				</div>
			</header><!-- #header -->

			<!-- start banner Area -->
			<section class="about-banner relative" style="height:112px;">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Registration
							</h1>
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.html"> Registration</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<section class="reservation-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 reservation-left">
							<h1 class="text-white">Register here </h1>
							<p class="text-white pt-20">
							</p>
						</div>
						<div class="col-lg-5 reservation-right">
							<form class="form-wrap text-center" method="POST">
								<label class="label-text"> Name:</label>
								<input type="text" class="form-control" name="name" required="true">
								<label class="label-text"> Qualification:</label>
								<input type="text" class="form-control" name="qualification" >
								<label class="label-text"> Subject you would like to teach:</label>
								<input type="text"  class="form-control" name="sub" >
								<select class="form-control" name="cls">
	                  <option data-display="" >Select Class you would like to teach</option>
	                  <?php
	                  while($r1=mysqli_fetch_array($connn))
	                  {
	                  ?>
	                  <option value="<?php echo$r1['classid']; ?>"><?php echo$r1['classname']; ?></option>
	                  <?php } ?>
	                  </select>
                <label class="label-text">Email Address:</label>
								<input type="email" class="form-control" name="email"  required="true">
								<label class="label-text">Contact Number:</label>
								<input type="text" class="form-control" name="phone" required="true">
								<select class="form-control" name="did">
										<option data-display="" >Select District</option>
										<?php
										while($r1=mysqli_fetch_array($conn))
										{
										?>
										<option value="<?php echo$r1['id']; ?>"><?php echo$r1['dname']; ?></option>
										<?php } ?>
								</select>
								<label class="label-text"> Address:</label>
								<textarea name="address" class="form-control" required="true"></textarea>
								<label class="label-text">Password:</label>
								<input type="password" class="form-control" name="password" required="true">

								<button class="primary-btn text-uppercase mt-20" name="submit">Register</button>
							</form>
						</div>
					</div>
				</div>
			</section>

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

<?php
	if(isset($_POST['submit']))
	{
	  $name=$_POST['name'];
		$qua=$_POST['qualification'];
		$sub=$_POST['sub'];
		$c=$_POST['cls'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $did=$_POST['did'];
    $password=$_POST['password'];
	$two=2;
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"certed");
	$insrt="insert into tutor(id,name,subname,classid,qual,email,phone,address,did,password,status) values('','$name','$sub','$c','$qua','$email','$phone','$address',$did,'$password','$two')";
	$a=mysqli_query($con,$insrt);
	 if($a)
    {
		header("location:tutor_registration.php");
	}
	}
	?>
