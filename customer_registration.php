
	<?php
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"certed");
	$sql="select classid,classname from class ";
	$conn=mysqli_query($con,$sql); ?>

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
							<h1 class="text-white">Register here and start learning </h1>
							<p class="text-white pt-20">
							</p>
						</div>
						<div class="col-lg-5 reservation-right">
							<form class="form-wrap text-center" method="POST">
							<label class="label-text">Your Name:</label>
								<input type="text" class="form-control" name="name" required="true">
								<label class="label-text">Your Email:</label>
								<input type="email" class="form-control" name="email"  required="true" >
								<label class="label-text">Your Phone Number:</label>
								<input type="text" class="form-control" name="phone"  required="true">
								<select class="form-control" name="cls">
	                  <option data-display="" >Select Class</option>
	                  <?php
	                  while($r1=mysqli_fetch_array($conn))
	                  {
	                  ?>
	                  <option value="<?php echo$r1['classid']; ?>"><?php echo$r1['classname']; ?></option>
	                  <?php } ?>
	                  </select>
								<label class="label-text">Subject:</label>
								<input type="text" class="form-control" name="subject" required="true">
								<label class="label-text">Your Date of Birth:</label>
								<input type="date" class="form-control " name="dob"  required="true">
								<label class="label-text">Your Address:</label>
								<textarea name="address" class="form-control"></textarea>
								<label class="label-text">Select Gender:</label>
									<select name="gender" class="form-control " required="true">
										<option value="male">Male</option>
										<option value="female">Female</option>
									</select>

								<label class="label-text">Password:</label>
								<input type="password" class="form-control " name="password" required="true">
								<button class="primary-btn text-uppercase mt-20" name="submit" >Register</button>
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
	<script>
function apply(i)
{/*
	var cmpname=document.getElementById('cmpname'+i).innerText;
	var postname=document.getElementById('postname'+i).innerText;
	var quali=document.getElementById('quali'+i).innerText;
	var cgpa=document.getElementById('cgpa'+i).innerText;
	var salarypack=document.getElementById('salarypack'+i).innerText;
	var noofvac=document.getElementById('noofvac'+i).innerText;
	$.ajax({
	alert();
         type:"POST",
         url:"apply.php",
         data:"fname="+fname+'&lname='+lname,
         complete:function(data){
            alert(data);
         }
      });*/
}
</script>
	<?php
	if(isset($_POST['submit']))
	{
	$name=$_POST['name'];
	$cl=$_POST['cls'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
	$subject=$_POST['subject'];
    $phone=$_POST['phone'];
	$dob=$_POST['dob'];
    $email=$_POST['email'];
    $password=$_POST['password'];
	$two=2;
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"certed");
	$insrt="insert into student(id,classid,name,email,phone,dob,address,gender,password,subject,status)values('','$cl','$name','$email','$phone','$dob','$address','$gender','$password','$subject','$two')";
	$a=mysqli_query($con,$insrt);
	 if($a)
    {
		header("location:customer_registration.php");
	}
	}
	?>
