
<?php


$error = '';

include("loginserver.php");

if (isset($_POST['submit'])) {
	if (!empty($_POST['username']) && !empty($_POST['pass'])) {
		if ($_POST['pass'] == $_POST['conpass']) {
		
		$surname = $_POST['surname'];
		$other = $_POST['other'];
 		$phone = $_POST['phone'];
 		$email = $_POST['email'];
 		$postal = $_POST['postal'];
 		$username = $_POST['username'];
 		$year = $_POST['year'];
 		$reference = $_POST['ref'];
 		$password = $_POST['pass'];
 		$conpass = $_POST['conpass'];
 		$gender = $_POST['gender'];
 	$profile ='images/'.$_FILES['profile']['name'];
 		$password_hash = md5($password);



 		if (preg_match("|image|", $_FILES['profile']['type'])) {


 			if (copy($_FILES['profile']['tmp_name'], $profile)) {


 				$_SESSION['username'] = $username;
 				$_SESSION['profile'] = $profile;
 			




 		$conn = new mysqli('localhost', 'root', '') or die(mysql_error());
 		$db = mysqli_select_db($conn, 'medical') or die("DB error");

 		$query = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$username."'");
 		$numrows = mysqli_num_rows($query);
 		if ($numrows == 0) {
 			$sql = "INSERT INTO users (username, password, reference, surname, other, year, gender, pnumber, email, paddress, profile) VALUES ('$username', '$password_hash', '$reference', '$surname', '$other', '$year', '$gender', '$phone', '$email', '$postal', '$profile')";
 			$result = mysqli_query($conn, $sql);


 			if ($result) {
 				$error = "Your account created successfully";
 			}
 			else {
 				$error = "Failure";
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


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>MH Login</title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/sign.css">

  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<!--input id="tab-3" type="radio" name="tab" class="home"><label for="tab-3" class="tab"><a href="index.php">Home</a></label-->
		<div class="login-form">
			<div class="sign-in-htm">
				<form action="sign.php" method="POST">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="username" type="text" class="input" required >
				</div>
				<div class="group">
					<label for="reference" class="label">Reference Number</label>
					<input id="reference" type="text" name="reference" class="input" required >
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="login" class="button" value="Sign In">
				</div>
				<span><?php echo $error; ?></span>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</form>
			</div>
			<div class="sign-up-htm">
				<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
				<div class="row">
				<h2><i>Personal Information</i></h2><hr>
				<div class="group">
					<label for="surname" class="label">Surname</label>
					<input id="surname" name="surname" type="text" class="input" required >
				</div>
				<div class="group">
					<label for="other" class="label">Other Name(s)</label>
					<input id="other" name="other" type="text" class="input" required >
				</div>
				<div class="form-group">
                <label for="gender" class="label">Gender</label>
                    <select class="input"  id="GENDER" name="gender">
                     <option selected="selected" value="Male">Male</option>
                     <option value="Female">Female</option>
                    </select>
                    </div>
                </div>

                <h2><i>Contact Information</i></h2><hr> 
                <div class="row">   
                <div class="group">
					<label for="phone" class="label">Phone Number</label>
					<input id="phone" name="phone" type="text" class="input" required >
				</div>
				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" name="email" type="text" class="input" required >
				</div>
				<div class="group">
					<label for="postal" class="label">Postal Address</label>
					<input id="postal" name="postal" type="text" class="input" required >
				</div>
			</div>
                
                <h2><i>Login Information</i></h2><hr>
                <div class="row">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="username" type="text" class="input" required >
				</div>
				<div class="group">
					<label for="pass" class="label">Year/Level</label>
					<input id="pass" name="year" type="text" class="input" required >
				</div>
				<div class="group">
					<label for="ref" class="label">Reference Number</label>
					<input id="ref" name="ref" type="text" class="input" required >
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password" required >
				</div>
				<div class="group">
					<label for="conpass" class="label">Confirm Password</label>
					<input id="conpass" name="conpass" type="password" class="input" data-type="password" required >
				</div>
				
			</div>
			    <div class="profile">
			    	<label>Select a Profile Picture: </label>
			    	<input type="file" name="profile" accept="image/*" required />
			    </div>
				<div class="group">
					<input type="submit" name="submit" class="button" value="Sign Up">
				</div>
				<span><?php echo $error; ?></span>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</form>
	</div>
  
  
</body>
</html>

