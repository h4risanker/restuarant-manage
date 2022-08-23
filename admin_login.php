 <?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"certed");
if(isset($_POST['submit']))
	{
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from admin where username='$username' and password='$password' and status=1";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
 $_SESSION['loginid']=$row['id'];
 $id=$_SESSION['loginid'];
	if($id!="")
	{

		header("location:admin_home.php");
	}
	}
	?>
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
	<section class="reservation-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 reservation-left">

						</div>
						<div class="col-lg-4 reservation-right">
						<center>
						<h1 style="color:white">Admin Login</h1>
						</center>
						<form class="form-wrap text-center" method="POST">
								<input type="text" class="form-control " name="username" placeholder="Enter Username" onChange="">

								<input type="password" class="form-control " name="password" placeholder="Enter Password" onChange="">
								<button class="primary-btn text-uppercase mt-20" name="submit">Login</button>
							</form>
						</div>
						<div class="col-lg-4 reservation-right">

						</div>
					</div>
				</div>
			</section>


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
