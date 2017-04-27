<?php

$error = '';


if (isset($_POST['login'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or password is empty";
	}
	else
	{


$username = $_POST['username'];
$password = $_POST['password'];
$password_hash = md5($password);
session_start();


$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "medical");



$query = mysqli_query($conn, "SELECT * FROM doctor WHERE username = '$username' AND password = '$password_hash'");
 $row = mysqli_fetch_assoc($query);

/*
 echo "<p>This is for the row </p>";
 print_r($row);
 echo "</br>";

 echo "<p>This is for the session </p>";
 print_r($_SESSION);
 echo "</br>";*/

 echo "sessions";
  //print_r($_SESSION);
	$_SESSION['Did'] = $row['doctor_id'];
  $_SESSION['profile'] = $row['profile'];
 $_SESSION['gender'] = $row['gender'];
 $_SESSION['surname'] = $row['surname'];
 $_SESSION['f_name'] = $row['f_name'];
 $_SESSION['email'] = $row['email'];



$rows = mysqli_num_rows($query);
    if ($rows == 1) {

 $_SESSION['username'] = $username;
 //$_SESSION['year'] = $year;
// $_SESSION['reference'] = $reference;
    	header("location: doctor-panel.php");
    }
    else{
    	$error = "Username or password is invalid";
    }

    mysqli_close($conn);
}
}
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Doctor-login-in</title>



      <link rel="stylesheet" href="css/style-nurse.css">


</head>

<body>
  <body>
<div class="container">
	<section id="content">
		<form action="" method="POST">
			<h1>Doctor Login</h1>
			<div>
				<input type="text" name="username" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input type="password" name="password" placeholder="Password" required="" id="password" />
			</div>
			<div>
				<input type="submit" name="login" value="Log in" />
				<a href="#">Lost your password?</a>
			</div>
		</form><!-- form -->
		<div class="button">
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>

    <script src="js/nurse-sign-in.js"></script>

</body>
</html>
