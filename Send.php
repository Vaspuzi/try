<?php
$conn = mysqli_connect("localhost", "root","","chat");
require('../../includes/functions/chat.func.php');

if(isset($_GET['sender']) && !empty($_GET['sender'])){
	$sender = $_GET['sender'];

	if(isset($_GET['message']) && !empty($_GET['message'])){
		$message = $_GET['message'];

		if(send_msg($sender, $message)){
echo 'message sent';
		}else{
			echo 'The message wasn\'t sent';
		}

	}else{
		echo 'no message was entered';
	}

}else{
	echo 'No name was entered.';
}

?>