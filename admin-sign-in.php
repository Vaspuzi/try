<?php
session_start();
$conn = mysqli_connect("localhost","root","","medical");
$error = '';


if (isset($_POST['login'])) {
	if (empty($_POST['username']) || empty($_POST['password']) ) {
		$error = "Username or password is empty";
	}
	else
	{

$username = $_POST['username'];
$password = $_POST['password'];
$password_hash = md5($password);
/*echo "this is the first session</br>";
print_r($_SESSION);
//$conn = mysqli_connect("localhost", "root", "");*/

$db = mysqli_select_db($conn, "medical");


$query = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password = '$password_hash'");
 $row = mysqli_fetch_assoc($query);

 $_SESSION['admprofile'] = $row['profile'];
 $_SESSION['admusername'] = $row['username'];
 $_SESSION['gender'] = $row['gender'];
 $_SESSION['surname'] = $row['surname'];
 $_SESSION['f_name'] = $row['f_name'];
 $_SESSION['phone'] = $row['pnumber'];
 $_SESSION['email'] = $row['email'];
 
 //$year = $row['year'];
/*echo "this is the after session</br>";
print_r($_SESSION);*/

$rows = mysqli_num_rows($query);
    if ($rows == 1) {

    	header("location: adminstrator/index.php");

    }
    else
		{
    	$error = "Username or password is invalid";
			//echo 'Incorrect credentials';
    }
  //  session_destroy();
    mysqli_close($conn);
}
}

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Adminstator Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="adminstrator/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="adminstrator/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="adminstrator/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="adminstrator/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="adminstrator/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="adminstrator/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="adminstrator/js/wow.min.js"></script>
	<script type="text/javascript">
		 new WOW().init();

		 function passname(){
		 	//pasing the name of the user to the next php page..

			var name = <?php echo $user?>
			var prof = <?php echo $profiler?>
			alert(name);
			$.ajax({
				url: 'adminstrator/index.php',
				type: 'POST',
				asyn: false,
				data: {
					"username": name,
		"profi": prof
					 },
				success: function(data){
					alert(sent);
				}
			});
		}
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts--->
 <!-- Meters graphs -->
<script src="adminstrator/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head>

 <body class="sign-in-up">
    <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Sign In to</span> <a href="#">Admin</a></p>
						</div>
						<div class="signin">
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox">Forgot Password ?</label>
								</span>

								<div class="clearfix"> </div>
							</div>
							<form action="" method="POST">
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" class="user" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								<span class="checkbox2">
									 <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i></label>
								</span>
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" name="password" class="lock" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								<span class="checkbox2">
									 <label class="checkbox"><input type="checkbox" name="checkbox" ><i> </i></label>
								</span>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="login" value="Login to your account" onClick="passname();">
							<!--span><?php echo $error; ?> </span-->
						</form>
						</div>

					</div>
				</div>
			</div>
		<!--footer section start-->
			<footer>
			   <p>This project is developed by <a href='#'>Gabiben</a></p>
			</footer>
        <!--footer section end-->
	</section>

<script src="adminstrator/js/jquery.nicescroll.js"></script>
<script src="adminstrator/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="adminstrator/js/bootstrap.min.js"></script>
</body>
</html>
