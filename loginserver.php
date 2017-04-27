<?php
session_start();
$error = '';


if (isset($_POST['login'])) {
	if (empty($_POST['username']) || empty($_POST['password']) && !empty($_POST['reference'])) {
		$error = "Username or password is empty";
	}
	else 
	{

$username = $_POST['username'];
$password = $_POST['password'];
$password_hash = md5($password);
$reference = $_POST['reference'];


$conn = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($conn, "medical");



$query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password_hash' AND reference='$reference'");
 $row = mysqli_fetch_assoc($query);
$_SESSION['iden'] = $row['id'];
 $_SESSION['profile'] = $row['profile'];
 $_SESSION['gender'] = $row['gender'];
 $_SESSION['surname'] = $row['surname'];
 $_SESSION['other'] = $row['other'];
 $_SESSION['phone'] = $row['pnumber'];
 $_SESSION['email'] = $row['email'];
 $_SESSION['postal'] = $row['paddress'];
 $year = $row['year'];
 $_SESSION['reference'] = $row['reference'];


 



$rows = mysqli_num_rows($query);
    if ($rows == 1) {

 $_SESSION['username'] = $username;
 $_SESSION['year'] = $year;
 $_SESSION['reference'] = $reference;
    	header("location: diagnosis.php");
    }
    else{
    	$error = "Username or password is invalid";
    }
    mysqli_close($conn);
}
$query = mysqli_query($conn, "SELECT * FROM vitals WHERE username = '$username'");
 $row = mysqli_fetch_assoc($query);
 $_SESSION['body_temp'] = $row['body_temp'];
 $_SESSION['pulse_rate'] = $row['pulse_rate'];
 $_SESSION['respiration_rate'] = $row['respiration_rate'];
 $_SESSION['systolic'] = $row['systolic'];
 $_SESSION['diastolic'] = $row['diastolic'];
}

?>
<?php 



// $query = mysqli_query($conn, "SELECT * FROM v.vitals as vitals  INNER JOIN users u ON v.username = u.username WHERE username = '$username'");
//  $row = mysqli_fetch_assoc($query);
//  $_SESSION['body_temp'] = $row['body_temp'];
//  $_SESSION['pulse_rate'] = $row['pulse_rate'];
//  $_SESSION['respiration_rate'] = $row['respiration_rate'];
//  $_SESSION['systolic'] = $row['systolic'];
//  $_SESSION['diastolic'] = $row['diastolic'];
 ?>

