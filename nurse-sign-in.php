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


//$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "medical");


$query = mysqli_query($conn, "SELECT * FROM nurse WHERE username = '$username' AND password = '$password_hash'");
 $row = mysqli_fetch_assoc($query);
 //echo "this is from the row varuiable</br>";
 //print_r($row);
 $_SESSION['profile'] = $row['profile'];
 $_SESSION['gender'] = $row['gender'];
 $_SESSION['surname'] = $row['surname'];
 $_SESSION['f_name'] = $row['f_name'];
 $_SESSION['phone'] = $row['pnumber'];
 $_SESSION['email'] = $row['email'];
 $_SESSION['postal'] = $row['paddress'];
 $year = $row['year'];
 //$_SESSION['reference'] = $row['reference'];

$rows = mysqli_num_rows($query);
    if ($rows == 1) {

 $_SESSION['username'] = $username;
 $_SESSION['year'] = $year;
 $_SESSION['reference'] = $reference;
    	header("location: nurse-panel.php");
    }
    else{
    	$error = "Username or password is invalid";
    }
		//the session is needed in the next page and it is destroyed there ..session_destroy();
    mysqli_close($conn);
}
}
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Nurse-login-in</title>



      <link rel="stylesheet" href="css/style-nurse.css">


</head>

<body>
  <body>
<div class="container">
	<section id="content">
		<form action="nurse-sign-in.php" method="POST">
			<h1>Nurse Login</h1>
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
