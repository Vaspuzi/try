<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$db_name = "medical";

if($conn = mysqli_connect($db_host, $db_user,$db_pass,$db_name)){
	$Feedback[] = 'connected to database';

}
else{
	$Feedback[] =  'unable to connect to db</br>';
}
?>