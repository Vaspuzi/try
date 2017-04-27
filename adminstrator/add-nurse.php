<?php
 $conn = mysqli_connect("localhost","root","","medical");
session_start();

 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>Add Nurse</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts--->
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head>
<!--onload="initMap()"-->
   <body class="sticky-header left-side-collapsed"  >
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.html">MH <span>Admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.html"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li><a href="index.html"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
						<li class="active"><a href="#"><i class="lnr lnr-spell-check"></i> <span>Register</span></a>
							<ul class="sub-menu-list">
								<li><a href="add-nurse.php">Add Nurse</a> </li>
								<li><a href="add-doctor.php">Add Doctor</a></li>
								<li><a href="add-adminstrator.php">Add Adminstrator</a> </li>
								<li><a href="add-user.php">Add User</a></li>
							</ul>
						</li>
						<li><a href="codes.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
						<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Pages</span></a>
							<ul class="sub-menu-list">
								<li><a href="view-user.php">Patient</a> </li>
								<li><a href="view-nurse1.php">Nurse</a></li>
								<li><a href="view-doctor1.php">Doctor</a></li>

								<li><a href="view-admin.php">Adminstrator</a></li>
							</ul>
						</li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
    <!-- left side end-->

    <!-- main content start-->
		<div class="main-content main-content3">
			<!-- header-starts -->
			<div class="header-section">

			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">
					<div class="profile_details">
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">
										<span style="background:url(<?php echo  $_SESSION['admprofile'] ?>) no-repeat center"> </span>
										 <div class="user-name">
											<p><?php echo $_SESSION['admusername'] ?><span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>
									</div>
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
									<li> <a href="admin-profile.php"><i class="fa fa-user"></i>Profile</a> </li>
									<li> <a href="../logout1.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!--notification menu end -->
			</div>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Register Nurse</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
								<div class="col-md-8 col-md-offset-2">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">First Name</label>
									<div class="col-sm-8">
										<input type="text" name="f_name" class="form-control1" id="focusedinput" placeholder="First Name" required>
									</div>
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Surname</label>
									<div class="col-sm-8">
										<input type="text" name="surname" class="form-control1" id="focusedinput" placeholder="Surname" required>
									</div>
									</div>
									<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Gender</label>
									<div class="col-sm-8">
                                     <input type="radio" name="gender" id="inlineRadio1" value="Male"> Male
                                     <input type="radio" name="gender" id="inlineRadio2" value="Female"> Female
									</div>
								</div>
								<div class="form-group">
				<label class="col-sm-2 control-label">Email Address</label>
				<div class="col-sm-8">
					<input type="text" name="email" class="form-control1" id="focusedinput" placeholder="example@email.com" required>
									</div>
				<div class="clearfix"> </div>
			</div>
			                     <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" name="username" class="form-control1" id="focusedinput" placeholder="Username" required>
									</div>
									</div>
									<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" name="pass" class="form-control1" id="inputPassword" placeholder="Password" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Confirm Password</label>
									<div class="col-sm-8">
										<input type="password" name="conpass" class="form-control1" id="inputPassword" placeholder="Password" required>
									</div>
								</div>
								<div class="form-group">
							<label for="exampleInputFile" class="col-sm-2 control-label">Profile Picture</label>
							<div class="col-sm-8">
							<input type="file" name="profile" accept="image/*" id="profile" required>
							<a class="help-block">Image should be png or jpg or gif</a>
						  </div>
						  <div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<input type="submit" name="submit" class="button" value="Submit">
								</div>
							</div>
								</div>
				</div>
				<div><span><?php //echo $error; ?></span></div>
			</form>
			</div>
		</div>
		<!--footer section start-->
			<footer>
			   <p>This project is developed by <a href='#'>Gabiben</a></p>
			</footer>
        <!--footer section end-->
	</section>

<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>

</body>
</html>




<?php
$error = '';

if (isset($_POST['submit'])) {
	if (!empty($_POST['username']) && !empty($_POST['pass'])) {
		if ($_POST['pass'] == $_POST['conpass']) {

		$f_name = $_POST['f_name'];
		$surname = $_POST['surname'];
		$gender = $_POST['gender'];
 		$email = $_POST['email'];
 		$username = $_POST['username'];
 		$password = $_POST['pass'];
 		$conpass = $_POST['conpass'];
 		$profile ='images/'.$_FILES['profile']['name'];
 		$password_hash = md5($password);

 		if (preg_match("|image|", $_FILES['profile']['type'])) {

 			if (copy($_FILES['profile']['tmp_name'], $profile)) {

/*
 				$_SESSION['admusername'] = $username;
 				 $_SESSION['admprofile'] = $profile;
        */





 		$conn = new mysqli('localhost', 'root', '') or die(mysql_error());
 		$db = mysqli_select_db($conn, 'medical') or die("DB error");

 		$query = mysqli_query($conn, "SELECT * FROM nurse WHERE username = '".$username."'");
 		$numrows = mysqli_num_rows($query);
    //first check if username already exists.. otherwise add nurse
 		if ($numrows == 0) {
 			$sql = "INSERT INTO nurse ('f_name', 'surname', 'gender', 'email', 'username', 'password', 'profile') VALUES ('$f_name', '$surname', '$gender', '$email', '$username', '$password_hash','$profile')";
 			$result = mysqli_query($conn, $sql);


 			if ($result) {
 				//$error = "Your account created successfully";
        echo "<script type='text/javascript'> alert('Nurse Added successfully!') </script>";
 			}
 			else {
 				//$error = "Failure";
        echo "<script type='text/javascript'> alert('Failed to Add Nurse!') </script>";

 			}
 		}
            else{
            	$error =  "That username already exists. Please try again";
            }
        }
}
}
else{
	$error = "Passwords do not match";
}
	}
	// else {
	// 	?>
	// 	<!--script>alert('Required all fields');</script-->
	// 	<?php
	// }
}
 ?>
