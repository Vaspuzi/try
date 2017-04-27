<?php
SESSION_START();
function get_msg(){
	$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$db_name = "medical";
$conn = mysqli_connect($db_host, $db_user,$db_pass,$db_name);
$uid = $_SESSION['iden'];

//$query = "SELECT 'Sender' , 'Message' ORDER BY 'Msg_ID ASC' ";
//this outputs all the messages;
$query = "SELECT users.Fname,f_name, message FROM doctor,users,chat WHERE `id` = $uid AND doctor_id = Cid AND Cuid = id ";  

  //$user_query=mysqli_query($conn,"select * from users ")or die(mysql_error());
								
if($run = mysqli_query($conn,$query))

$messages = array();
//find a way to find out who sent what message 
while($message = mysqli_fetch_array($run)){
$messages[] = array('Patient' => $message['Fname'],
						'Doctor'=>$message['f_name'],
						'message'=>$message['Message']						
						);
}

return $messages;
}

function send_msg($sender, $message, $pid){

	$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$db_name = "medical";
$conn = mysqli_connect($db_host, $db_user,$db_pass,$db_name);

if(!empty($sender) && !empty($message) && !empty($pid) ){
$sender = mysqli_real_escape_string($conn,$sender);
$message = 	mysqli_real_escape_string($conn,$message);
$pid = mysqli_real_escape_string($conn,$pid);

//$query = "INSERT INTO 'chat' VALUES ( '$sender', '$message') ";

$query = " INSERT INTO `chat` (`Cid`,`Cuid`, `CDid`, `Message`,`sender`) VALUES (NULL,'$pid', '$sender', '$message','0')";
if($run = mysqli_query($conn,$query)){
return true;
}else{
	return false;
}

}else{
return false;
}

}

?>



