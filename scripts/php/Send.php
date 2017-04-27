<?php
$conn = mysqli_connect("localhost", "root","","medical");
require('../../includes/functions/chat.func.php');

if(isset($_GET['sender']) && !empty($_GET['sender'])){
	$sender = $_GET['sender'];

	if(isset($_GET['message']) && !empty($_GET['message'])){		
		$message = $_GET['message'];
		if(isset($_GET['Pid']) && !empty($_GET['Pid'])){
		$pid = $_GET['Pid'];
		
		if(send_msg($sender, $message, $pid)){
		echo "<script type='text/javascript'> alert('Message Sent!')</script>";
		}else{
		echo "<script type='text/javascript'> alert('message was not sent!')</script>";
		}
	}else{
		echo "<script type='text/javascript'> alert('No Patients id was sent!')</script>";
	}
	}else{
		echo "<script type='text/javascript'> alert('message was not sent!')</script>";
	}

}else{
	echo "<script type='text/javascript'> alert('Doctor id is not set!')</script>";
	//echo 'Doctor\'s id was not caught.';
}

?>